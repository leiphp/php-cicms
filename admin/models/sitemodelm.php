<?php
class Sitemodelm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="model";//当前操作的数据库表
	}
 
 /*/ 更新模块信息
 */
  function update($data){
           $id=$data['id'];
	       unset($data['id']);
          $this->db->where(array('id' => $id))->update($this->form, $data);
 }
 
 /*/ 更新字段信息
 */
  function update_field($data){
           $id=$data['info']['id'];
	       unset($data['info']['id']);
		   $data['info']['setting']=isset($data['setting'])?$data['setting']:'';
	       $data['info']['setting']=array2string($data['info']['setting']);
          $this->db->where(array('id' => $id))->update('model_field', $data['info']);
 }
  /*/ 更新字段状态
 */
  function update_status($data){

            if($data['status']=='on'){
			  $update=array('status'=>0);
			}elseif($data['status']=='off'){
			    $update=array('status'=>1);
			}
           $id=$data['id'];
           $this->db->where(array('id' => $id))->update('model_field', $update);
 }
   
    //列表所有模块信息
 public function lists($rows='',$page='',$conditions=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}
		$query = $this->db
		          ->order_by("listorder desc,id desc")
		         ->get($this->form)
				 ->result_array();
		return $query;
	}
	
	
    //列表指定模块字段信息,无需分页
 public function field_list($modelid=''){
		$query = $this->db
		         ->where('modelid',$modelid)
		         ->order_by("listorder desc,id desc")
		         ->get('model_field')
				 ->result_array();
		return $query;
	}
	
		
	
	
  //字段排序
  function order($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update('model_field',array('listorder'=>$v));
          }  
 }
 
  //模型排序
  function order_model($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update($this->form,array('listorder'=>$v));
          }  
 }
 
 
/*删除字段
1、需要删除字段表model_filed的字段信息
2、需要删除模型表对应的字段
*/  
  function del_field($data){
              if(empty($data['id']) || empty($data['modelid'])) exit;
			  $model_info=$this->get_model_one(array('id'=>$data['modelid']));
			  $field_info=$this->get_field_one(array('id'=>$data['id']));
			  $tablename=$model_info['tablename'];
		      $this->load->dbforge();//加载数据库维护类
			  
              $this->dbforge->drop_column($tablename, $field_info['field']);
		      $this->db->where(array('id' => $data['id']))->delete('model_field');
		
 }	
 
 /*删除模型
1、需要删除字段表model_filed的字段信息
2、需要删除模型表
3、删除前台和后台控制器，模块，视图和前台前台上传文件夹等文件
*/  
  function del($data){
              if(empty($data['id'])) exit;
              $this->load->helper('file');
			  $modelid=$data['id'];
			  $model_info=$this->get_model_one(array('id'=>$modelid));
			  $tablename=$model_info['tablename'];
			  $count= $this->db->from($tablename)->count_all_results();//统计模型表下数据
			  $count2= $this->db->where(array('modelid'=>$modelid))->from('category')->count_all_results();//统计分类表category，是否有该模型字段
              if($count>0 || $count2>0){
			    return false;
				exit;
			  }
			  
			  //删除文件
			   delete_files('./views/'.$tablename,true,1);//删除后台视图文件
			   del_file('./controllers/'.$tablename.'.php');//删除后台控制器文件
			   del_file('./models/'.$tablename.'m.php');//删除后台模型文件
			   
			   delete_files('../upload/'.$tablename,true,1);//删除前台附件上传目录
			   del_file('../application/views/'.$tablename.'_list.php');//删除前台视图文件
			   del_file('../application/views/'.$tablename.'_show.php');//删除前台视图文件
			   del_file('../application/controllers/'.$tablename.'.php');//删除前台控制器文件
			   del_file('../application/models/'.$tablename.'m.php');//删除前台模型文件
			  
			  //执行sql
			  $this->load->dbforge();
			  $this->db->where(array('modelid' => $modelid))->delete('model_field');//删除字段
			  $this->db->where(array('id' => $modelid))->delete('model');//删除模型
			  $this->dbforge->drop_table($tablename);//删除模型表
              
			  
			  
			  return true;

		
 }	
 
 
/*增加模型
增加新模型条件， ①根目录/upload②根目录/application/③根目录/admin/可写
新增模型文件放在在admin/add_model文件夹下
增加模型步骤：
1、读取后台模块，控制器，视图文件，并创建

3、读取前台模块，控制器，视图文件，并创建
2、增加数据库文件，新模型表，和更新模型model数据表数据
*/
  function add($data){
            $this->load->helper('file');
			$data['tablename']=strtolower($data['tablename']);//转小写
			$controller=ucfirst($data['tablename']);//首字母大写
			$model=$controller.'m';
			
			//插入模型表wl_model数据
            $this->db->insert('model',$data);
		    $modelid=$this->db->insert_id();//获取模型ID
			
			//载入SQL文件并执行
            $model_sql_1 = read_file('./add_model/model.sql');
			$model_sql_2 = read_file('./add_model/field.sql');
		    $model_sql_1 = str_replace('<$model_tablename>', $this->db->dbprefix($data['tablename']), $model_sql_1);
		    $model_sql_2 = str_replace('<$model_field_tablename>', $this->db->dbprefix('model_field'), $model_sql_2);
		    $model_sql_2 = str_replace('<$modelid>', $modelid, $model_sql_2);

            $this->db->query($model_sql_1);
			$this->db->query($model_sql_2);
			
			
			//读取后台模块 控制器，模板，并替换变量
            $admin_controller=read_file('./add_model/admin/controller.php');
		    $admin_model=read_file('./add_model/admin/model.php');
			$admin_tp_add=read_file('./add_model/admin/template/add.php');
			$admin_tp_edit=read_file('./add_model/admin/template/edit.php');
			$admin_tp_lists=read_file('./add_model/admin/template/lists.php');
			$admin_tp_status=read_file('./add_model/admin/template/status.php');
			
		    $admin_controller = str_replace('<$controller>', $controller, $admin_controller);
		    $admin_controller = str_replace('<$modelid>', $modelid, $admin_controller);
			$admin_model = str_replace('<$model>', $model, $admin_model);
			$admin_model = str_replace('<$tablename>', $data['tablename'], $admin_model);
			$admin_tp_add = str_replace('<$tablename>', $data['tablename'], $admin_tp_add);
			$admin_tp_edit = str_replace('<$tablename>', $data['tablename'], $admin_tp_edit);
			$admin_tp_lists = str_replace('<$tablename>', $data['tablename'], $admin_tp_lists);
			$admin_tp_status = str_replace('<$tablename>', $data['tablename'], $admin_tp_status);
			
			//读取前台模块 控制器，模板，并替换变量
			$index_controller=read_file('./add_model/template/controller.php');
			$index_model=read_file('./add_model/template/model.php');
			$index_tp_list=read_file('./add_model/template/template_list.php');
			$index_tp_show=read_file('./add_model/template/template_show.php');
			
		    $index_controller = str_replace('<$controller>', $controller, $index_controller);
			$index_controller = str_replace('<$tablename>', $data['tablename'], $index_controller);
			$index_model = str_replace('<$model>', $model, $index_model);
			$index_model = str_replace('<$tablename>', $data['tablename'], $index_model);
			
			//写入后台模块 控制器，模板
			write_file('./controllers/'.$data['tablename'].'.php', $admin_controller);
			write_file('./models/'.$data['tablename'].'m.php', $admin_model);
			creat_file('./views/'.$data['tablename'].'/');//创建模板目录
	        write_file('./views/'.$data['tablename'].'/add.php', $admin_tp_add);
			write_file('./views/'.$data['tablename'].'/edit.php', $admin_tp_edit);
			write_file('./views/'.$data['tablename'].'/lists.php', $admin_tp_lists);
			write_file('./views/'.$data['tablename'].'/status.php', $admin_tp_status);
			
			//写入前台模块 控制器，模板
			creat_file('../upload/'.$data['tablename'].'/');//创建上传文件目录
            write_file('../application/controllers/'.$data['tablename'].'.php', $index_controller);
			write_file('../application/models/'.$data['tablename'].'m.php', $index_model);
		    write_file('../application/views/'.$data['tablename'].'_list.php', $index_tp_list);
			write_file('../application/views/'.$data['tablename'].'_show.php', $index_tp_show);
		

 }
/*
增加字段
流程：将字段信息添加到model_filed字段表，和对应的模型表里面
*/
public function add_field($data){
       $tablename=$data['info']['tablename'];
	    unset($data['info']['tablename']);
	   $data['info']['setting']=isset($data['setting'])?$data['setting']:'';
	   $data['info']['setting']=array2string($data['info']['setting']);
	   
	   if(empty($data['info']['minlength'])){unset($data['info']['minlength']);}
	   if(empty($data['info']['maxlength'])){unset($data['info']['maxlength']);}
	   
	   $field_info=$data['info'];
	   if(!isset($data['setting']['defaultvalue']))$data['setting']['defaultvalue']=''; 
		//合成插入到指定模块字段的sql语句
		switch ($data['info']['formtype']) {
			case 'datetime':
				   $sql="ALTER TABLE `wl_{$tablename}` ADD `{$data['info']['field']}` int(10) unsigned NOT NULL DEFAULT '0'" ;
				break;
			case "number":
		          if($data['setting']['decimaldigits']==0){
		             $sql="ALTER TABLE `wl_{$tablename}` ADD `{$data['info']['field']}`  int(10) unsigned NOT NULL DEFAULT '{$data['setting']['defaultvalue']}'" ;
				  }else{
		             $sql="ALTER TABLE `wl_{$tablename}` ADD `{$data['info']['field']}`  float(10,{$data['setting']['decimaldigits']}) NOT NULL   DEFAULT '{$data['setting']['defaultvalue']}'" ;
		          }

				break;
			case "textarea":
				   $sql="ALTER TABLE `wl_{$tablename}` ADD `{$data['info']['field']}` text NOT NULL   DEFAULT '{$data['setting']['defaultvalue']}'" ;
				break;
			case "editor":
				   $sql="ALTER TABLE `wl_{$tablename}` ADD `{$data['info']['field']}` text NOT NULL   DEFAULT '{$data['setting']['defaultvalue']}'" ;
				break;
			case "duo_img":
				   $sql="ALTER TABLE `wl_{$tablename}` ADD `{$data['info']['field']}` varchar(1500) NOT NULL   DEFAULT '{$data['setting']['defaultvalue']}'" ;
				break;
			default:
				 $sql="ALTER TABLE `wl_{$tablename}` ADD `{$data['info']['field']}` varchar(255) NOT NULL   DEFAULT '{$data['setting']['defaultvalue']}'" ;
		}


      //将字段追加到指定模块表里面
	   $this->db->query($sql);
	   //将字段信息插入字段数据库
	    $this->db->insert('model_field', $field_info);
	   

	  
}	

//获取单个字段信息
//$data 数组条件  例如：array('id'=>1)
 public function get_field_one($data){
       $query = $this->db->where($data)->get('model_field')->row_array();
	   return $query; 
 }
 	
	
//获取单个模型信息
//$data 数组条件  例如：array('id'=>1,'tablename'=>'news')
 public function get_model_one($data){
       $query = $this->db->where($data)->get($this->form)->row_array();
	   return $query; 
 }
 
 //检查字段是否存在
//$data 数组条件  例如：array('modelid'=>1,'field'=>'news') 模型ID和字段名
 public function get_check_field($data){
         //获取模型表
       $query = $this->db->where('id',$data['modelid'])->get($this->form)->row_array();
	   $formname=$query['tablename'];
	   //判断字段是否存在于某表里面
       if ($this->db->field_exists($data['field'], $formname)){
           return 1;
        }else{
	      return 0;
	    }
   }
 

 
}


?>
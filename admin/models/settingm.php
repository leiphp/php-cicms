<?php
class Settingm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="setting";//当前操作的数据库表
	}

//显示所有表单字段
 public function form(){
    $query = $this->db
		      ->order_by("listorder desc,id desc")
		      ->get($this->form)
		      ->result_array();
		return $query;
 }
 

 
 /*/ 管理员更新单个自定义标签
 */
  function update($data){
           $id=$data['id'];
	       unset($data['id']);
          $this->db->where(array('id' => $id))->update($this->form, $data);
 }
 
//更新修改所有表单字段
   public function form_edit($data){
        //循环文本标签
		  foreach($data as $key=>$v){
		   $this->db->where(array('id' => $key))->update($this->form,array('value'=>$v));
		  }
		   //循环图片标签
		   if(!empty($_FILES)){
		  
		        $config['upload_path'] = '../upload/setting/';
			    $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4|flv';
			    $config['max_size'] = '3100000000000';//最大3M
				$config['file_name']=date("Y").date("m").uniqid();//重命名文件
			    $this->load->library('upload', $config);
		        foreach( $_FILES as $key=>$v){  //循环所有图片
				       if($this->upload->do_upload($key)){
					       $data_img=$this->upload->data();//返回上传成功信息
					       $value='setting/'.$data_img['file_name'];
						    $this->db->where(array('id' => $key))->update($this->form,array('value'=>$value));
				        }  
		         }
			 }  
   }

//更新根目录config.php配置文件
 public function setting_edit($data){
        $res='';
	//循环分页配置
		$res.="//分页配置\r\n";
		foreach($data['wl_page'] as $key=>$v){
		  $res=$res.'$GLOBALS["wl_page"]["'.$key.'"]='.$v.";\r\n";
		  
		}
		
		//循环数据库配置
		$res.="//数据库配置\r\n";
		foreach($data['wl_db'] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_db"]["'.$key.'"]="'.$v.'"'.";\r\n";
		  
		}
		
		//循环水印配置
		$res.="//水印信息配置\r\n";
		foreach($data['wl_water'] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_water"]["'.$key.'"]='.$v.";\r\n";
		}
		
	   //编辑器远程图片自动下载
		$res.="//编辑器远程图片自动下载\r\n";
		foreach($data['wl_down'] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_down"]["'.$key.'"]='.$v.";\r\n";
		}
			
	   //搜索引擎链接提交
		$res.="//搜索引擎链接提交\r\n";
		foreach($data['wl_url'] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_url"]["'.$key.'"]="'.$v.'"'.";\r\n";
		}
		
		
		 //循环调试信息配置
		$res.="//调试信息配置\r\n";
		foreach($data['wl_ts'] as $key=>$v){
		  $res=$res.'$GLOBALS["wl_ts"]["'.$key.'"]='.$v.";\r\n";
		}
		
	//循环邮箱配置信息
		$res.="//邮箱配置\r\n";
		foreach($data['wl_email'] as $key=>$v){
	      $res=$res.'$GLOBALS["wl_email"]["'.$key.'"]="'.$v.'"'.";\r\n";
		}
		
		
		$res="<?php \r\n".$res."\r\n?>";
		//写入信息
		$this->load->helper('file');
		if ( ! write_file('../config.php', $res)){
             return false;
          }else{
             return true;
        }
	
 }

    //列表所有自定义字段信息
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
  //排序
  function order($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update($this->form,array('listorder'=>$v));
          }  
 }
 
   //删除标签，系统自带type=1的标签不能删除
  function del($id){
            //判断是否为系统自带标签，标志 type=1
           $count= $this->db->where(array('id' => $id[0],'type'=>1))->from($this->form)->count_all_results();
		   //统计栏目下文章数目

		   if($count==0){
		      $this->db->where(array('id' => $id[0]))->delete($this->form);
			  return true;
		   }else{
		      return false;
		   }
 }	
 
  //增加字段
  function add($data){
     $this->db->insert($this->form, $data);
 }
	
//获取单个标签信息
//$data 数组条件  例如：array('id'=>1,'key'=>'title')
 public function get_field_one($data){
       $query = $this->db->where($data)->get($this->form)->row_array();
	   return $query; 
 }

 
}


?>
<?php
class Categorym extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="category";//当前操作的数据库表
	}

 //增加栏目
  function add($data){
		 //获取父路径
		 $path=$this->db->select('path')->where("id",$data['pid'])->get($this->form)->row_array();//获取父ID路径
		 if(!empty($path)){
		      $data['path'] =$path['path'].$data['pid'].',' ;
		 }else{
		    $data['path']='0,';
		 }
		$this->db->insert($this->form, $data);
		  $insert_id=$this->db->insert_id();//插入的ID
		 //判断是否为单页面，如果是单页面，则写入数据到page表
		    $model_name = $this->db->select('tablename')->where("id",$data['modelid'])->get('model')->row_array();
			
		 if($model_name['tablename']=='page'){
		     $data_page=array('catid'=>$insert_id,'title'=>$data['catname'],'uptime'=>time());
		    $this->db->insert('page', $data_page);
		 }
		 
		 //生成伪静态路由文件
		 //$this->set_routes(); 
        
 }
 
  //修改栏目
  function update($data){
     $id=$data['id'];
	 unset($data['id']);
     $this->db->where(array('id' => $id))->update($this->form, $data);
	 
	 //生成伪静态路由文件
	// $this->set_routes(); 
		
 }
 
  //删除栏目，栏目里面有小类或者栏目下有数据的无法删除
  function del($id){
  
            //判断栏目子类数目
           $count= $this->db->where(array('pid' => $id[0]))->from($this->form)->count_all_results();
		   if($count>0){
		     return false;
			 exit;
		   }
		 
		   
		   $this->load->model("Publicm");//加载公共模型
		   $this->p=$this->Publicm;//重命名公共模型
		
		 /*判断删除的栏目是否为单页面page,如果是单页面，则要删除对应的page表信息  
		 */
		 //获取删除的栏目模型，判断是否为page
		  $model_arr=$this->p->get_cat_one('id='.$id[0]);
		  $modelid=$model_arr[0]['modelid'];
		  $catid=$model_arr[0]['id'];
	      $model=$this->p->get_model('id='.$modelid);
		  $model=$model[0]['tablename'];
		  
		  if($model=='page'){
		     $this->db->where(array('catid' => $catid))->delete('page');//删除文章
		     $this->db->where(array('id' => $id[0]))->delete($this->form);//删除栏目  
			 return true;
			 exit;
		  }
		  //外部链接
		   if($model=='url'){
		     $this->db->where(array('id' => $id[0]))->delete($this->form);//删除栏目  
			 return true;
			 exit;
		  }
		  
		   //统计栏目下文章数目,有文章内容的，不能删除，要先删除文章
		   $count2=$this->p->get_category_info_count($id[0]);
		   if($count2==0){
		      $this->db->where(array('id' => $id[0]))->delete($this->form);
			  return true;
		   }else{
		      return false;
		   }
 }
  //更改排序
  function order($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update($this->form,array('listorder'=>$v));
          }  
 }  
 
 //所有分类列表
 //返回一维数组
 public function lists(){
    			$query = $this->db
		        ->select("c.*,m.name,m.tablename")
		         ->from($this->form." as c")
				 ->join("wl_model as m","c.modelid = m.id","left")
				  ->order_by("concat( c.path , c.id ),c.listorder desc,c.id desc")
				 ->get()->result_array();
		return $query;
	}

//获取单条信息	
 public function get_one($id){
      $query = $this->db->where("id",$id)->get($this->form)->row_array();
	   return $query; 
 }
 
 
 //生成路由文件config/routes.php和英文目录和ID对应起来config/my_routes.php 
public function set_routes(){
	    $data = $this->db->select("id,catdir,modelid,path")->order_by("listorder desc,id desc")->get('category')->result_array();
		
		//生成config/my_routes.php文件
       $res='';
		$res.="<?php //目录对应栏目分类ID\r\n";
		foreach($data as $v){
		  if($v['modelid']==2){
		      $res=$res.'$config["my_routes"]['.$v['id']."]='".$v['catdir'].".html';\r\n";
		  }else{
		      $res=$res.'$config["my_routes"]['.$v['id']."]='".$v['catdir']."';\r\n";
		  }
		 
		}
		//写入信息
		$this->load->helper('file');
		if ( ! write_file('../application/config/my_routes.php', $res)){
          //nothing to do
        }
		
		//生成config/routes.php文件
        $res='';
		$res.="<?php \r\n";
		$res.='$route["default_controller"] = "index"; '."\r\n";
		$res.='$route["404_override"] = ""; '."\r\n";
		$res.="//自定义路由 \r\n";
	
		$res.='$route["home/(:any)"] = "home/show/$1/$2"; '."\r\n";
		$res.='$route["se/(:any)"] = "search/index/$1/"; '."\r\n";
		

		foreach($data as $v){
		   if(!empty($v['catdir'])){

			   //单页模型样式特殊化
			 if($v['modelid']==2){ //单页模型
				       $res=$res.'$route["'.$v['catdir'].'.html"]="article/'.$v['id'].'.html"; '."\r\n";	  
			    }else{//其它模型
				     $model=$this->p->get_model("id=".$v['modelid']);//所有模型
					 $tablename=$model[0]['tablename'];
					
					$res=$res.'$route["'.$v['catdir'].'/(:any)_(:num).html"]="'.$tablename.'/show/$2.html"; '."\r\n";
				    $res=$res.'$route["'.$v['catdir'].'/(:num).html"]="'.$tablename.'/show/$1.html"; '."\r\n";
				    $res=$res.'$route["'.$v['catdir'].'/(:num)"]="'.$tablename.'/lists/'.$v['id'].'/$1"; '."\r\n";
		            $res=$res.'$route["'.$v['catdir'].'"]="'.$tablename.'/lists/'.$v['id'].'"; '."\r\n";	 
				
				 
				
				}

		   }
		}
		//写入信息
		$this->load->helper('file');
		if ( ! write_file('../application/config/routes.php', $res)){
             return false;
          }else{
             return true;
        }
		
	} 
 
	
}


?>
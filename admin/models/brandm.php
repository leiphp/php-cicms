<?php
class Brandm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="brand";//当前操作的数据库表
	}

 //增加链接
  function add($data){
     $data['uptime']=time();//添加时间

	   //图片上传
		    if(!empty($_FILES)){
			      $file=$_FILES;
			      $config['upload_path'] = '../upload/brand/';
				  $config['allowed_types'] = 'gif|jpg|png|jpeg';
				  $config['max_size'] = '3100';//最大3M
				  $config['file_name']=date("Y").date("m").uniqid();//重命名文件
				  $this->load->library('upload', $config);
			      foreach( $file as $key=>$v){  //循环所有图片
				       if($this->upload->do_upload($key)){
					      $data_img=$this->upload->data();//返回上传成功信息
					      $data[$key]='brand/'.$data_img['file_name'];
				        }  
			       } 
		     }

     $this->db->insert($this->form, $data);
 }
 
  //更新链接
  function update($data){
     $id=$data['id'];
	 unset($data['id']);
	 //审核状态
    if(empty($data['status'])){
	   $data['status']=0;
	}
		 //图片上传
		    if(!empty($_FILES)){
			      $file=$_FILES;
			      $config['upload_path'] = '../upload/brand/';
				  $config['allowed_types'] = 'gif|jpg|png|jpeg';
				  $config['max_size'] = '3100';//最大3M
				  $config['file_name']=date("Y").date("m").uniqid();//重命名文件
				  $this->load->library('upload', $config);
			      foreach( $file as $key=>$v){  //循环所有图片
				       if($this->upload->do_upload($key)){
					      $data_img=$this->upload->data();//返回上传成功信息
					      $data[$key]='brand/'.$data_img['file_name'];
				        }  
			       } 
		     }
		
     $this->db->where(array('id' => $id))->update($this->form, $data);
 }
 
  //删除链接
  function del($id){ 
          $nn=0;
          foreach( $id as $v){
                $this->db->where(array('id' => $v))->delete($this->form);
				$nn++;
          } 
		  return $nn; 
 }
  //品牌排序
  function order($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update($this->form,array('listorder'=>$v));
          }  
 } 
 
 //品牌分类排序
  function order_list_type($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update('type',array('listorder'=>$v));
          }  
 }  
  
 
 //列表
 public function lists($rows='',$page='',$conditions='',$count=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}

	    if($count==''){
		    	$query = $this->db
			     ->select("c.*,t.name as typename")
              	 ->from($this->form." as c")
				 ->join("wl_type as t","c.type = t.id","left")
		         ->order_by("c.listorder desc,c.id desc")
		         ->get()
				 ->result_array();
		}else{
		    $query= $this->db->from($this->form." as c") ->join("wl_type as t","c.type = t.id","left")->count_all_results();
		}		 
				 
				 
		return $query;
	}
 //所有品牌列表
   public  function brand_all(){
         
		 $query = $this->db
		         ->order_by("listorder desc,id desc")
				  ->get($this->form)
				 ->result_array();
		return $query;
    }
	
//通过id获取单条信息	
 public function get_one($id){
       $query = $this->db->where("id",$id)->get($this->form)->row_array();
	   return $query; 
 }
 
  //批量审核
  function status_ok($id){ 
          $nn=0;
		  $data=array('status'=>1);
          foreach( $id as $v){
                $this->db->where(array('id' => $v))->update($this->form,$data);
				$nn++;
          } 
		  return $nn; 
 }
 
 
}


?>
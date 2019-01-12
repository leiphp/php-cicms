<?php
class Pagem extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="page";//当前操作的数据库表
	}

 
  //修改栏目
  function update($data){
     $id=$data['id'];
	 unset($data['id']);
	//格式化时间
	 $data['uptime']=strtotime($data['uptime']);
     $this->db->where(array('id' => $id))->update($this->form, $data);
 }


//获取单条信息	
//$id 为栏目id,catid 不是page表的自增id
 public function get_one($id){
      $query = $this->db->where("catid",$id)->get($this->form)->row_array();
	   return $query; 
 }
 

}


?>
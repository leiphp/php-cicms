<?php
class Messagem extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="message";//当前操作的数据库表
	}


  //更新
  function update($data){
     $id=$data['id'];
	 unset($data['id']);
	 //审核状态
    if(empty($data['status'])){
	   $data['status']=0;
	}
  	 //留言回复时间
	  $data['asktime']=strtotime($data['asktime'])?strtotime($data['asktime']):time();
		
     $this->db->where(array('id' => $id))->update($this->form, $data);
 }
 
  //删除
  function del($id){ 
          $nn=0;
          foreach( $id as $v){
                $this->db->where(array('id' => $v))->delete($this->form);
				$nn++;
          } 
		  return $nn; 
 }

 //列表
 public function lists($rows='',$page='',$conditions=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}
		$query = $this->db
		         ->order_by("id desc")
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
<?php
class Searchm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="search";//当前操作的数据库表
	}

 //增加关键词
  function add($data){
     $data['uptime']=strtotime($data['uptime'])?strtotime($data['uptime']):time();//注册时间
     $this->db->insert($this->form, $data);
 }
 
  //修改关键词
  function update($data){
     $id=$data['id'];
	 unset($data['id']);
      $data['uptime']=strtotime($data['uptime'])?strtotime($data['uptime']):time();//注册时间
     $this->db->where(array('id' => $id))->update($this->form, $data);
 }
 
  //删除关键词
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
		         ->order_by("hits desc,id desc")
		         ->get($this->form)
				 ->result_array();
		return $query;
	}

//通过id获取单条信息	
 public function get_one($id){
       $query = $this->db->where("id",$id)->get($this->form)->row_array();
	   return $query; 
 }
 
   
 
 
}


?>
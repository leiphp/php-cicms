<?php
class Messagem extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="message";//当前操作的数据库表	
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
		         ->where(array('status'=>1))
		         ->order_by("id desc")
		         ->get($this->form)
				 ->result_array();
		return $query;
	}

//增加留言
  function add($data){
     unset($data['code']); 
     $data['uptime']=time();//时间
	 $data['ip']=$this->input->ip_address();//IP
     $this->db->insert($this->form, $data);
 }
 

//检查留言
  function check($data){
     session_start();
     if($_SESSION['code']!=$data['code']){
		      $chk="验证码错误";
			return $chk;
		 }

	 if(strlen($data['title'])<1){
	    $chk="留言主题不能为空";
		return $chk;
	 }
	if(strlen($data['name'])<1){
	    $chk="姓名不能为空";
		return $chk;
	 }
	 if(strlen($data['tel'])<1){
	    $chk="电话不能为空";
		return $chk;
	 }
	 if(strlen($data['content'])<1){
	    $chk="留言内容不能为空";
		return $chk;
	 }
  }

 
}


?>
<?php
class Productm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="product";//当前操作的数据库表
		 
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
			   ->where('status',1)
		        ->order_by("listorder desc,id desc")
		        ->get($this->form)
				->result_array();
		
		}else{
		 $query= $this->db->from($this->form) ->where('status',1)->count_all_results();
		
		}
		return $query;
	}

 
}


?>
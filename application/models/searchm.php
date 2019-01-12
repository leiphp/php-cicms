<?php
class Searchm extends CI_Model{
 public function __construct(){
		parent::__construct();
		  $this->form="search";//当前操作的数据库表
	}

  //列表
 public function lists($rows='',$page='',$where=array(),$model='product'){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}

		$query = $this->db
	            ->like($where)
		         ->order_by("listorder desc,id desc")
		         ->get($model)
				 ->result_array();
		return $query;
	}
/*
将用户搜索的搜索词保存到数据库
如果搜索词已经存在，则搜索次数加一
*/	
 public function add($key=''){
     
	  $count= $this->db->from($this->form)->where(array('title'=>$key))->count_all_results();
	  if($count>0){
	      $this->db->where(array('title'=>$key))->set('hits', 'hits+1', FALSE)->update($this->form);//浏览量加一 
	  }else{
	    $da['title']=$key;
		$da['uptime']=time();
	    $this->db->insert($this->form, $da);
	  }
	
 
 } 	
 
}


?>
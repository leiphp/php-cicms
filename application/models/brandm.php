<?php
class Brandm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="brand";//当前操作的数据库表
		 
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


/*获取品牌分类列表
$model 模块名称
 */ 
 public function get_brand_type_list($model='brand'){
   
		$query = $this->db
		         ->where('model',$model)
				 ->order_by("listorder desc,id desc")
				 ->get("wl_type")
				 ->result_array();
		return $query;
	}
	
/*获取当个品牌分类详情*/
 public function get_brand_type_one($id=''){
   
		$query = $this->db
		         ->where(array('model'=>'brand','id'=>$id))
				 ->get("wl_type")
				 ->row_array();
		return $query;
	}

/*获取当个品牌详情*/
 public function get_one($id=''){
   		  $query = $this->db->where("id",$id)->get('brand')->row_array();
		   return $query;
	}


 
}


?>
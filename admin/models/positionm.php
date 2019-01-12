<?php
class Positionm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="position";//当前操作的数据库表
	}



 
 /*/ 修改
 */
  function update($data){
           $id=$data['id'];
	       unset($data['id']);
          $this->db->where(array('id' => $id))->update($this->form, $data);
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
		         ->select("c.*,t.name as modelname")
              	 ->from($this->form." as c")
				 ->join("wl_model as t","c.modelid = t.id","left")
		         ->order_by("c.listorder desc,c.id desc")
		         ->get()
				 ->result_array();
		return $query;
	}
  //排序
  function order($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update($this->form,array('listorder'=>$v));
          }  
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
 
  //增加
  function add($data){
     $this->db->insert($this->form, $data);
 }
	
//通过id获取单条信息	
 public function get_one($id){
       $query = $this->db->where("id",$id)->get($this->form)->row_array();
	   return $query; 
 }
 
}


?>
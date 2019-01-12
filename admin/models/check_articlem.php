<?php
/*文章审核模型*/
class Check_articlem extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->load->model("Publicm");//加载公共模型
		 $this->p=$this->Publicm;//重命名公共模型
	}

 //获取模型表,并获取已审核，已退稿数据
  function get_list(){
            
            //读取所有模型字段
	    	$this->load->model("Sitemodelm");//加载模型
		    $data=$this->Sitemodelm->lists('','','type=0');
			$nn=0;
		    foreach($data as  $v){
			    $data[$nn]['status0']= $this->db->from($v['tablename'])->where('status',0)->count_all_results();
				$data[$nn]['status2']= $this->db->from($v['tablename'])->where('status',2)->count_all_results();
			    $nn++;
			}
		/*	var_dump($data);
			exit;*/
			return $data;
		   
		}
    

 
}


?>
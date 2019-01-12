<?php
/*文章审核控制器*/
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Check_article extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->m=$this->load->model("Check_articlem");
		$this->m=$this->Check_articlem;
		$this->load->model("Publicm");//加载公共模型
		$this->p=$this->Publicm;//重命名公共模型
        $this->load->library("MY_page");//分页模型
	}
	
 public  function index(){
 
        //读取所有模型表,并获取已审核，已退稿数据
		$data['list']=$this->m->get_list();
		
	    $this->load->vars('data',$data);
        $this->load->view($this->router->class.'/index');   
 }
	
}
?>
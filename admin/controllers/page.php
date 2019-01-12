<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Pagem");//加载栏目模型
		$this->load->model("Publicm");//加载公共模型
		$this->m=$this->Pagem;//重命名栏目模型
		$this->p=$this->Publicm;//重命名公共模型
	}
	
 public  function index(){
    $this->lists();
 }
 //所有分类信息
   public  function lists(){
           $page=$this->p->get_model("tablename='page'");//获取单页面模型信息
		   $data['list']=$this->p->get_category(2,$page[0]['id']);
		   $this->load->vars('data',$data);
		   $this->load->view($this->router->class.'/lists');
    }

	
	 //修改信息
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改信息

			    $this->m->update($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class.'/lists'));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/lists'));
				}
			}else{
			    $data['id']=$this->uri->segment(3);
			    $data['res']=$this->m->get_one($data['id']);
				$this->load->vars('data',$data);
				$this->load->view($this->router->class.'/edit');
			}		
    }

	
}
?>
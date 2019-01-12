<?php
/**
 *  网站首页控制器
 */
class Message extends MY_Controller{
	public function __construct(){
		parent::__construct();
	    $this->m=$this->load->model("Messagem");//加载模型
	    $this->m=$this->Messagem;//重命名模型
		$this->load->model("Publicm");//加载公共模型
		$this->p=$this->Publicm;
		$this->model=$this->router->class;//当前模块名称
		//初始化当前栏目信息	
		$category=$top_category=$parent_category=$this->p->get_one_category(29);
		$this->load->vars('category',$category);//当前栏目
		$this->load->vars('parent_category',$parent_category);//顶级栏目
		$this->load->vars('top_category',$top_category);//顶级栏目
		
		
	}
	
	public function index(){
	   $this->lists();
	}
	public function lists(){
		/*手机端响应式处理*/
		$tp="message_show";
		$w_style=$_GET['b'];
		$tp=auto_tp('index','wap/wap_message_show',$w_style);
		/*手机端响应式结束*/
	     //统计数量
		$count = count($this->m->lists());
		//配置分页
		$page_list = config_page($count,$this->model.'/lists/',$GLOBALS['wl_page']['message']);
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($tp);
	}
	
	public function add(){
	    $data=$this->input->post();
		$chk=$this->m->check($data['info']);

		if(!empty($chk)){
		    $this->message('留言失败!'.$chk,site_url($this->model));  
		}
		
	    $this->m->add($data['info']);
		if($this->db->affected_rows()>0){
			 $this->message('留言成功，管理员会尽快回复！',site_url($this->model));
		}else{
	         $this->message('留言失败！',site_url($this->model));
	    }
	}

}
	
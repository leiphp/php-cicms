<?php
/**
 *  网站首页控制器
 */
class Article extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->m=$this->load->model("articleM");//加载新闻模型
		$this->m=$this->articleM;//重命名新闻模型
		$this->model=$this->router->class;//当前模块名称
	}
	
	public function _remap(){
		$tp="article_show";	  
		/*手机端响应式处理*/
		$w_style=$_GET['b'];
		$tp=auto_tp($tp,'wap/wap_article_show',$w_style);
		/*手机端响应式结束*/
		 $data=array();
		 $id=intval($this->uri->segment(2));	
		 $data=$this->m->get_one($id);
		
		if($data==false){$this->load->view('error_404'); return false;}
		 
		$this->load->vars('category',$data['category']);//当前栏目
		$this->load->vars('top_category',$data['category']['top']);//顶级栏目
		$this->load->vars('parent_category',$data['category']['parent']);//父级栏目

		 
	     $this->load->vars('data',$data);
		 $this->load->view($tp);
	}

}
	
<?php
/**
 *  控制器
 */
class Search extends MY_Controller{
	public function __construct(){
		parent::__construct();

        $this->load->model("Searchm");//加载搜索模型
		$this->m=$this->Searchm;//重命名搜索模型

		
	}
	
	public function index(){
	
	        $data=$this->input->get();
           if(!isset($data['q'])){
		          $data['q']='';
			  }else{
			     $data['q']=trim($data['q']);
		       }
            $where = array('title' => $data['q']);//匹配关键字
           
		   //搜索词大于5个字符，则保存到数据库，一个汉字为3个字符
			if(strlen($data['q'])>5){
			   $this->m->add($data['q']);
			}

			 //统计数量
			$count = count($this->m->lists('','',$where,'news'));
			//配置分页
			$page_list = config_page($count,$this->router->class.'/search',$GLOBALS['wl_page']['search']);
			$this->my_page->initialize($page_list);
			$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex'],$where,'news');
			$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
			

			$this->load->vars('data',$data);
			$this->load->vars('pages',$pages);
			$this->load->view($this->router->class);
	}

	

}
	
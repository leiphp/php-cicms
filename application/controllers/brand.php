<?php
/**
 *  控制器
 */
class Brand extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->m=$this->load->model("Brandm");//加载模型
		$this->m=$this->Brandm;//重命名
		
		$this->load->model("Publicm");//加载公共模型
		$this->p=$this->Publicm;
		$this->model=$this->router->class;//当前模块名称
		
	    //初始化当前栏目信息
		
		$category=$top_category=$parent_category=$this->p->get_one_category(33);
		$this->load->vars('category',$category);//当前栏目
		$this->load->vars('parent_category',$parent_category);//顶级栏目
		$this->load->vars('top_category',$top_category);//顶级栏目
		
	}
	
	public function index(){
	      $data['brand_type'] = $this->m->get_brand_type_list();
	      $this->load->vars('data',$data);
	      $this->load->view('brand/brand');
	}
	
	
	
	public function lists(){
        
	     $catid=$pagecatid=intval($this->uri->segment(3));//当前栏目catid
		 if($catid){
		    $catid=$this->p->ar_catid($catid);//获取栏目下所有子类ID
			$where="type in({$catid})";
		 }else{
		     redirect("brand/");
			
		 }
		
	     //统计数量
		$count = $this->m->lists('','',$where,'count');
		//配置分页
		$GLOBALS['wl_page']['brand']=isset($GLOBALS['wl_page']['brand'])?$GLOBALS['wl_page']['brand']:10;
		$page_list = config_page($count,$this->model.'/lists/'.$pagecatid,$GLOBALS['wl_page']['brand']);
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex'],$where);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		

		$data['brand_type']=$this->m->get_brand_type_one($catid);//品牌分类详情
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view('brand/brand_list');
	}

/*品牌详情页
  需要读取当前品牌资料，和当前品牌下的产品列表
*/	
	public function show(){
	       if($this->category==false){$this->load->view('error_404'); return false;}
	        $id=intval($this->uri->segment(3));//当前品牌ID
		   $data['res']=$this->m->get_one($id);//获取单挑品牌详情
		   
	    $this->load->model("Productm");//加载模型 
		    //统计数量
		$where='bid='.$id;	
		$count = count($this->Productm->lists('','',$where));
		//配置分页
		$GLOBALS['wl_page']['product']=isset($GLOBALS['wl_page']['product'])?$GLOBALS['wl_page']['product']:10;
		$page_list = config_page($count,$this->model.'/show/'.$id.'.html',$GLOBALS['wl_page']['product']);
		$this->my_page->initialize($page_list);
		$data['list'] = $this->Productm->lists($page_list['perpage'],$page_list['nowindex'],$where);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		
		   
		   $this->load->vars('data',$data);	
		   $this->load->vars('pages',$pages);
		   $this->load->view('brand/brand_show');
	}

}
	
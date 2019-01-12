<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->m=$this->load->model("Messagem");//加载友情链接模型
		$this->load->model("Publicm");//加载公共模型
        $this->load->library("MY_page");//分页模型
		$this->m=$this->Messagem;//重命名友情链接
		$this->p=$this->Publicm;//重命名公共模型

	}
	
 public  function index(){
    $this->lists();
 }
 //信息列表
   public  function lists(){
        //统计数量
		$count = count($this->m->lists());
		//配置分页
		$page_list = config_page($count,'index.php/'.$this->router->class.'/lists','10');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/lists');
    }
	
//审核列表
   public  function status(){
        //统计数量
		$count = count($this->m->lists('','','status=0'));
		//配置分页
		$page_list = config_page($count,'index.php/'.$this->router->class.'/lists','10');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex'],'status=0');
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/status');
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
			}else{//显示修改信息界面
			    $id=$this->uri->segment(3);	
				$data['res']=$this->m->get_one($id);
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }
	
   //删除信息
   public  function del(){	
            $urlshang = $_SERVER['HTTP_REFERER'];//获取上级URL
            $data=$this->input->post();//批量ID
		    $id[]=$this->uri->segment(3);	//单个id
			if(empty($id[0]) and !empty($data['id'])) $id=$data['id'];
			if(empty($id[0]))	$this->message('未选择任何数据！', $urlshang);
		    $res=$this->m->del($id);
		    if($res>0){
				$this->message('删除成功！影响数据:'.$res, $urlshang);
			}else{
			   $this->message('删除失败!', $urlshang);
			}
    }
	
	 
	
		   //通过审核
   public  function status_ok(){	
             
		    $data=$this->input->post();//批量ID
			$id=$data['id'];
			if(empty($id[0]))	$this->message('未选择任何数据！',site_url($this->router->class.'/status'));
		    $res=$this->m->status_ok($id);
		    if($res>0){
				$this->message('审核成功！影响数据:'.$res,site_url($this->router->class.'/status'));
			}else{
			   $this->message('审核失败!',site_url($this->router->class.'/status'));
			}
			
    }
	
   
}
?>
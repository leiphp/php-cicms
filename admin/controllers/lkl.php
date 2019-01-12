<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lkl extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->m=$this->load->model("Lklm");//加载新闻模型
		$this->load->model("Publicm");//加载公共模型
        $this->load->library("MY_page");//分页模型
		$this->m=$this->Lklm;//重命名新闻模型
		$this->p=$this->Publicm;//重命名公共模型
		$this->modelid=42;//当前模型ID
		
		$this->pre_url=$_SERVER['HTTP_REFERER'];//上级页面url
	}
	
 public  function index(){
    $this->lists();
 }
 //信息列表
   public  function lists(){
        //统计数量
		$count = $this->m->lists('','','','count');
		//配置分页
		$page_list = config_page($count,'index.php/'.$this->router->class.'/lists','10');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
	    $data['category']=$this->p->get_category(1,$this->modelid);//当前模型所有分类
		
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/lists');
    }
//审核列表
   public  function status(){
         $status=$_GET['status'];
        //统计数量
		$count = $this->m->lists('','','status='.$status,'count');
		//配置分页
		$page_list = config_page($count,'index.php/'.$this->router->class.'/status',10);
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex'],'status='.$status);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		 $data['category']=$this->p->get_category(1,$this->modelid);//当前模型所有分类
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/status');
    }			
   //增加信息
   public  function add(){
        $data=$this->input->post();
		
		if(!empty($data)){//增加新栏目
			
		  //添加数据
	     	$this->m->add($data['info']);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class.'/lists'));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class.'/lists'));
			}
		}else{

		   $data['form_info']=$this->m->get_form_info($this->modelid);
		   $this->load->vars('data',$data);
		   $this->load->view($this->router->class.'/add');
		}
		
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
				$data['form_info']=$this->m->get_form_info($this->modelid,$data['res']);
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }
	
   //删除信息
   public  function del(){	
            $data=$this->input->post();//批量ID
		    $id[]=$this->uri->segment(3);	//单个id
			if(empty($id[0]) and !empty($data['id'])) $id=$data['id'];
			if(empty($id[0]))	$this->message('未选择任何数据！',$this->pre_url);
		    $res=$this->m->del($id);
		    if($res>0){
				$this->message('删除成功！影响数据:'.$res,$this->pre_url);
			}else{
			   $this->message('删除失败!',$this->pre_url);
			}
    }
	
	   //排序
   public  function order(){	
            $data=$this->input->post();
		    $this->m->order($data['listorder']);
			$this->message('操作成功！',site_url($this->router->class.'/lists'));
			
    }
	
//通过审核
   public  function status_ok(){
 
  
            $status=$_GET['status'];
		    $data=$this->input->post();//批量ID
			$id=$data['id'];
			if(empty($id[0]))	$this->message('未选择任何数据！',$this->pre_url);
		    $res=$this->m->status_ok($id,$status);
		    if($res>0){
				$this->message('操作成功！影响数据:'.$res,$this->pre_url);
			}else{
			   $this->message('审核失败!',$this->pre_url);
			}
			
    }
		
	
   //搜索
   public  function search(){
            $data['get']=$this->input->get();

            $catid=$this->p->ar_catid($data['get']['catid']);//获取栏目下所有子类ID
			$where="catid in({$catid}) and title like '%{$data['get']['q']}%'";
			 //统计数量
			$count = count($this->m->lists('','',$where));
			//配置分页
			$page_list = config_page($count,'index.php/'.$this->router->class.'/search','10');
			$this->my_page->initialize($page_list);
			$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex'],$where);
			$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
			$data['category']=$this->p->get_category(1,$this->modelid);//当前模型所有分类
			
			$this->load->vars('data',$data);
			$this->load->vars('pages',$pages);
			$this->load->view($this->router->class.'/lists');
			
    }

	
}
?>
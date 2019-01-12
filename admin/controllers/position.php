<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Position extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Positionm");//加载模型
		$this->m=$this->Positionm;//重命名所加载的模型
		$this->load->model("Publicm");//加载公共模型
		$this->p=$this->Publicm;//重命名公共模型
		
	}
 public  function index(){
    $this->lists();
 }
 	



   
 //列表显示
 public function lists(){
      //统计数量
		$count = count($this->m->lists());
		//配置分页
		$page_list = config_page($count,$this->router->class.'/lists','20');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/lists');
 
 } 
 
    //排序
   public  function order(){	
            $data=$this->input->post();
		    $this->m->order($data['listorder']);
			$this->message('操作成功！',site_url($this->router->class));
			
    } 
	
//删除
   public  function del(){	
		   $data=$this->input->post();//批量ID
		    $id[]=$this->uri->segment(3);	//单个id
			if(empty($id[0]) and !empty($data['id'])) $id=$data['id'];
			if(empty($id[0]))	$this->message('未选择任何数据！',site_url($this->router->class));
		    $res=$this->m->del($id);
		    if($res){
				$this->message('删除成功！影响数据:'.$res,site_url($this->router->class));
			}else{
			   $this->message('删除失败',site_url($this->router->class.'/field'));
			}
    }
	
   //增加推荐位
   public  function add(){
		$data=$this->input->post();
		if(!empty($data)){//增加字段
	     	$this->m->add($data['info']);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class));
			}
		}else{	
		 $data['model']=$this->p->get_model('type=0');//所有模型 不含单页面
		  $this->load->vars('data',$data);
		   $this->load->view($this->router->class.'/add');
		}
		
    }	
	


 //修改单个自定义标签
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改信息
			    $data=$this->input->post();
			    $this->m->update($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class));
				}
			}else{
			    $id=$this->uri->segment(3);	
			    $data['res']=$this->m->get_one($id);
				 $data['model']=$this->p->get_model('type=0');//所有模型  不含单页面
				
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }	
	
  
}
?>
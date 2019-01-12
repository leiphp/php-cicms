<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Settingm");//加载模型
		$this->m=$this->Settingm;//重命名所加载的模型
	}
 public  function index(){
    $this->form();
 }
 	

 //自定义标签，表单显示页面
   public  function form(){
	      $data['list'] = $this->m->form();//读取自定义表单
		  $this->load->model("Publicm");
		  $data['model_list']=$this->Publicm->get_model('type=0');//获取自定义模型信息
		  $this->load->vars('data',$data);
          $this->load->view($this->router->class.'/form');
		  
    }
//修改全部自定义标签内容(基础设置)
   public function form_edit(){
          $data=$this->input->post();
		  $this->m->form_edit($data['info']);
		  $this->message('修改成功！',site_url($this->router->class.'/form'));
   }	
   
   //设置配置变量(高级设置)
   public function setting_edit(){
          $data=$this->input->post();
		  $res=$this->m->setting_edit($data['info']);
		    if($res){
				 $this->message('修改成功！',site_url($this->router->class.'/form'));
			}else{
			   $this->message('修改失败！根目录config.php文件权限不够',site_url($this->router->class.'/form'));
			}
   
   }
   
 //管理自定义标签 列表显示
 public function field(){
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
			$this->message('操作成功！',site_url($this->router->class.'/field'));
			
    } 
	
//删除单个标签
   public  function del(){	
		    $id[]=$this->uri->segment(3);	//单个id
			if(empty($id[0]))	$this->message('未选择任何数据！',site_url('category/lists'));
		    $res=$this->m->del($id);
		    if($res){
				$this->message('删除成功！',site_url($this->router->class.'/field'));
			}else{
			   $this->message('删除失败！可能的原因<br>①系统自带标签无法删除<br>',site_url($this->router->class.'/field'));
			}
    }
	
   //增加自定义标签
   public  function add(){
		$data=$this->input->post();
		if(!empty($data)){//增加字段
	     	$this->m->add($data['info']);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class.'/field'));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class.'/field'));
			}
		}else{	
		   $this->load->view($this->router->class.'/add');
		}
		
    }	
	
	/**
	 * 检查自定义字段key
	 * @return $status {1:key已经使用}
	 */
	 
   public  function ajax_check_key(){	
           $key = isset($_GET['key']) && trim($_GET['key']) ? trim($_GET['key']) : exit(0);
		   $status = $this->m->get_field_one(array('key'=>$key));
	       if(empty($status)){$status=0;}else{$status=1;}
			if($status == 1) {//验证通过
			    exit('1');
		    } else {
			    exit('0');
		    }
    }

 //修改单个自定义标签
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改信息
			    $data=$this->input->post();
			    $this->m->update($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class.'/field'));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/field'));
				}
			}else{
			    $id=$this->uri->segment(3);	
			    $data['res']=$this->m->get_field_one(array('id'=>$id));
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }	
	
  
}
?>
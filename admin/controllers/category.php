<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Categorym");//加载栏目模型
		$this->load->model("Publicm");//加载公共模型
		$this->m=$this->Categorym;//重命名栏目模型
		$this->p=$this->Publicm;//重命名公共模型
	}
	
 public  function index(){
    $this->lists();
 }
 //所有分类信息
   public  function lists(){
		  $data['list']=$this->p->get_category(2);
		  $this->load->vars('data',$data);
		  $this->load->view($this->router->class.'/lists');
    }
	
   //增加栏目分类
   public  function add(){
   
		$data=$this->input->post();
	
		if(!empty($data)){//增加新栏目
			 //图片上传
		    if(!empty($_FILES["image"]['name'])){
				   $config['upload_path'] = '../upload/category/';
				   $config['allowed_types'] = 'gif|jpg|png|jpeg';
				   $config['max_size'] = '3100';//最大3M
				   $config['file_name']=date("Y").date("m").uniqid();//重命名文件
				   $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('image')){
					  $error=$this->upload->display_errors();
					  $this->message($error,site_url($this->router->class.'/add'));
				   }else{
					 $data_img=$this->upload->data();//返回上传成功信息
					 $data['info']['image']='category/'.$data_img['file_name'];
				  }  	   
		     }
		   
		  //添加数据
	     	$this->m->add($data['info']);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class.'/lists'));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class.'/lists'));
			}
		}else{
		
		   $data['id']=$this->uri->segment(3);
		   if($data['id'])$data['res']=$this->m->get_one($data['id']);
		   $data['list']=$this->p->get_category();//所有分类
		   $data['model']=$this->p->get_model();//所有模型
		   $this->load->vars('data',$data);
		   $this->load->view($this->router->class.'/add');
		}
    }
	
	 //修改栏目信息
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改信息

            //图片上传
		    if(!empty($_FILES["image"]['name'])){
				   $config['upload_path'] = '../upload/category/';
				   $config['allowed_types'] = 'gif|jpg|png|jpeg';
				   $config['max_size'] = '3100';//最大3M
				   $config['file_name']=date("Y").date("m").uniqid();//重命名文件
				   $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('image')){
					  $error=$this->upload->display_errors();
					  $this->message($error,site_url($this->router->class.'/add'));
				   }else{
					 $data_img=$this->upload->data();//返回上传成功信息
					 $data['info']['image']='category/'.$data_img['file_name'];
				  }  	   
		     }


			    $this->m->update($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！','javascript:history.back();');
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/lists'));
				}
			}else{
			    $data['id']=$this->uri->segment(3);
			    $data['res']=$this->m->get_one($data['id']);
				$data['list']=$this->p->get_category();//所有分类
				$data['model']=$this->p->get_model();//所有模型
				$this->load->vars('data',$data);
				$this->load->view($this->router->class.'/edit');
			}	
			
    }
	
   //删除单个栏目信息
   public  function del(){	
		    $id[]=$this->uri->segment(3);	//单个id
			if(empty($id[0]))	$this->message('未选择任何数据！',site_url('category/lists'));
		    $res=$this->m->del($id);
		    if($res){
				$this->message('删除成功！',site_url($this->router->class.'/lists'));
			}else{
			   $this->message('删除失败！可能的原因<br>①本类下有子类<br>②本类下有信息数据',site_url($this->router->class.'/lists'));
			}
    }
	
	   //排序
   public  function order(){	
            $data=$this->input->post();
		    $this->m->order($data['listorder']);
			$this->message('操作成功！',site_url($this->router->class.'/lists'));
    }
	

	
}
?>
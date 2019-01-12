<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemodel extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Sitemodelm");//加载模型
		$this->m=$this->Sitemodelm;//重命名所加载的模型
	}
 public  function index(){
    $this->lists();
 }

//模块列表 
public function lists(){
           //统计数量
		$count = count($this->m->lists());
		//配置分页
		$page_list = config_page($count,$this->router->class.'/lists','20');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex'],'type=0');
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";

		
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/lists');
   } 
   
 //模块字段列表 
public function field_list(){
        $modelid=$this->uri->segment(3);	
        $data['list'] = $this->m->field_list($modelid);
		$data['res']=$this->m->get_model_one(array('id'=>$modelid));
		$this->load->vars('data',$data);
        $this->load->view($this->router->class.'/field_list');
         
   } 	
 //修改模型信息
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改信息
			    $data=$this->input->post();
			    $this->m->update($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class.'/lists'));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/lists'));
				}
			}else{
			    $id=$this->uri->segment(3);	
			    $data['res']=$this->m->get_model_one(array('id'=>$id));
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }	

 //修改字段信息
   public  function edit_field(){
            $data=$this->input->post();
            if(!empty($data)){//修改信息
			    $data=$this->input->post();
			    $this->m->update_field($data);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class.'/field_list/'.$data['info']['modelid']));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/field_list/'.$data['info']['modelid']));
				}
			}else{
			    $id=$this->uri->segment(3);	
			    $data['res']=$this->m->get_field_one(array('id'=>$id));
				$data['res']['setting']=string2array($data['res']['setting']);
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit_field');
			}	
			
    }	
  //修改字段状态:是否为启用状态
   public  function edit_status(){
			    $data['id']=$this->uri->segment(3);	
				$data['status']=$_GET['status'];
				$modelid=$_GET['modelid'];
			    $this->m->update_status($data);
				$this->message('操作成功！',site_url($this->router->class.'/field_list/'.$modelid));	
    }
    //字段排序
   public  function order(){	
            $data=$this->input->post();
		    $id=$this->uri->segment(3);	
		    $this->m->order($data['listorder']);
			$this->message('操作成功！',site_url($this->router->class.'/field_list/'.$id));
			
    }
    //模型排序
   public  function order_model(){	
            $data=$this->input->post();
		    $this->m->order_model($data['listorder']);
			$this->message('操作成功！',site_url($this->router->class));
			
    } 	 
	
//删除字段
   public  function del_field(){	
		    $data['id']=$this->uri->segment(3);	//字段ID
			$data['modelid']=$_GET['modelid'];  //模型ID
		    $res=$this->m->del_field($data);
			$this->message('删除成功！',site_url($this->router->class.'/field_list/'.$data['modelid']));
		   
    }
//删除模型
   public  function del(){	

		    $data['id']=$this->uri->segment(3);	//模型ID
			$res=$this->m->del($data);
		    if($res){
			    $this->message('删除成功！',site_url($this->router->class.'/lists/'));
			 }else{
			    $this->message('删除失败！该模型下有数据或者未开启可写权限',site_url($this->router->class.'/lists/'));
			 } 
		   
    }	
   //增加模型
   public  function add(){

		$data=$this->input->post();
		if(!empty($data)){//增加字段
	     	$this->m->add($data['info']);
			 $this->message('新增成功！',site_url($this->router->class.'/lists/'));
		}else{	
		   $this->load->view($this->router->class.'/add');
		}
		
    }
	
	//增加字段
   public  function add_field(){
		$data=$this->input->post();
		if(!empty($data)){//增加字段
	     	$this->m->add_field($data);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class.'/field_list/'.$data['info']['modelid']));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class.'/field_list/'.$data['info']['modelid']));
			}
		}else{	
		   $id=$this->uri->segment(3);	
		    $data['res']=$this->m->get_model_one(array('id'=>$id));
			$this->load->vars('data',$data);	
		    $this->load->view($this->router->class.'/add_field');
		}
		
    }		
	
	/**
	 * ajax检查模型是否存在
	 * @return $status {1:已经存在}
	 */
	 
   public  function ajax_check_tablename(){	
           $tablename = isset($_GET['tablename']) && trim($_GET['tablename']) ? trim($_GET['tablename']) : exit(0);
		   $status = $this->m->get_model_one(array('tablename'=>$tablename));
	       if(empty($status)){$status=0;}else{$status=1;}
			if($status == 1) {//验证通过
			    exit('1');
		    } else {
			    exit('0');
		    }
    }

	/**
	 * ajax检查模型字段是否存在
	 * @return $status {1:已经存在}
	 */
	 
   public  function ajax_check_field(){	
           $modelid = isset($_GET['modelid']) && trim($_GET['modelid']) ? trim($_GET['modelid']) : exit(0);
		   $field = isset($_GET['field']) && trim($_GET['field']) ? trim($_GET['field']) : exit(0);
		   $status = $this->m->get_check_field(array('modelid'=>$modelid,'field'=>$field));
			if($status == 1) {//验证通过
			    exit('1');
		    } else {
			    exit('0');
		    }
    }
	/**
	 * ajax获取字段属性 通过jquery get 获取
	 * @return 返回表单内容
	  这个功能在增加模型表字段的时候使用，动态展示字段属性值
	 */
	 
   public  function get_field_type(){	
     
           $fieldtype = isset($_GET['fieldtype']) && trim($_GET['fieldtype']) ? trim($_GET['fieldtype']) : exit(0);
		   ob_start();
		   include './views/sitemodel/fields/'.$fieldtype.'/field_add_form.php';
		    $data_setting = ob_get_contents();
		   ob_end_clean();
		   //$data_setting = iconv('gbk','utf-8',$data_setting);
		   exit($data_setting);
    }	
	
  
}
?>
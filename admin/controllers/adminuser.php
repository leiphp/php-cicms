<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminuser extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Adminuserm");//加载模型
        $this->load->library("MY_page");
		$this->m=$this->Adminuserm;//重命名所加载的模型
	}
 public  function index(){
    $this->lists();
 }
 	

 //读取所有管理员账号信息
   public  function lists(){
	
        //统计数量
		$count = count($this->m->lists());
		//配置分页
		$page_list = config_page($count,'index.php/'.$this->router->class.'/lists','10');
		$this->my_page->initialize($page_list);
		$data = $this->m->lists($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		$this->load->vars('list',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/lists');
    }
	
   //增加管理员
   public  function add(){
		$data=$this->input->post();
		if(!empty($data)){//增加新管理员
	     	$this->m->adduser($data['info']);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class.'/lists'));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class.'/lists'));
			}
		}else{	
		   $this->load->view($this->router->class.'/add');
		}
		
    }
	
	 //修改管理员信息
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改管理员信息
			    $data=$this->input->post();
			    $this->m->update($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class.'/lists'));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/lists'));
				}
			}else{
			    $id=$this->uri->segment(3);	
			    $data=$this->m->get_one($id);
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }
	
   //删除管理员信息
   public  function del(){	
            $data=$this->input->post();//批量ID
		    $id[]=$this->uri->segment(3);	//单个id
			if(empty($id[0]) and !empty($data['id'])) $id=$data['id'];
			if(empty($id[0]))	$this->message('未选择任何数据！',site_url($this->router->class.'/lists'));
		    $res=$this->m->del($id);
		    if($res>0){
				$this->message('删除成功！影响数据:'.$res,site_url($this->router->class.'/lists'));
			}else{
			   $this->message('删除失败,最后一个管理员不许删除！',site_url($this->router->class.'/lists'));
			}
    }
	
	   //排序
   public  function order(){	
            $data=$this->input->post();
		    $this->m->order($data['listorder']);
			$this->message('操作成功！',site_url($this->router->class.'/lists'));
			
    }
	
/**
	 * 检查用户名
	 * @param string $username	用户名
	 * @return $status {1:用户已注册}
	 */
	 
   public  function ajax_check_username(){	
           $name = isset($_GET['name']) && trim($_GET['name']) ? trim($_GET['name']) : exit(0);
		   $status1 = $this->db->from('admin')->where("name",$name)->count_all_results();//验证管理员表
		   $status2 = $this->db->from('member')->where("username",$name)->count_all_results();//验证用户表

	       if(empty($status1) and empty($status2)){$status=0;}else{$status=1;}

			if($status == 1) {
			    exit('1');
		    } else {   //验证通过
			    exit('0');
		    }
    }
	

	
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Memberm");//加载模型
        $this->load->library("MY_page");
		$this->m=$this->Memberm;//重命名所加载的模型
	}
 public  function index(){
    $this->lists();
 }
 	

 //读取所有会员账号信息
   public  function lists(){
	
        //统计数量
		
			$count = $this->m->lists('','','','','count');
		//配置分页
		$page_list = config_page($count,'index.php/'.$this->router->class.'/lists','10');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		$data['category']=$this->m->group_lists();//会员组分类
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/lists');
    }
	
   //增加会员
   public  function add(){
		$data=$this->input->post();
		if(!empty($data)){//增加会员
	     	$this->m->adduser($data['info']);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class.'/lists'));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class.'/lists'));
			}
		}else{	
		  $data['category']=$this->m->group_lists();//会员组分类
		  $this->load->vars('data',$data);
		  $this->load->view($this->router->class.'/add');
		}
		
    }
 //增加会员组
   public  function group_add(){
		$data=$this->input->post();
		if(!empty($data)){//增加会员组
	     	$this->m->addgroup($data['info']);
			if($this->db->affected_rows()>0){
			     $this->message('新增成功！',site_url($this->router->class.'/group_lists'));
			}else{
			     $this->message('新增失败 ！',site_url($this->router->class.'/group_lists'));
			}
		}else{	
		  $this->load->vars('data',$data);
		  $this->load->view($this->router->class.'/group_add');
		}
		
    }
		
	 //修改会员信息
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改会员信息
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
                $data['category']=$this->m->group_lists();//会员组分类
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }
 //修改会员组信息
   public  function group_edit(){
            $data=$this->input->post();
            if(!empty($data)){//修改会员信息
			    $data=$this->input->post();
			    $this->m->group_update($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class.'/group_lists'));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/group_lists'));
				}
			}else{
			    $id=$this->uri->segment(3);	
			    $data=$this->m->group_lists('id='.$id);
				$this->load->vars('data',$data[0]);	
				$this->load->view($this->router->class.'/group_edit');
			}	
			
    }	
   //删除会员信息
   public  function del(){	
            $data=$this->input->post();//批量ID
		    $id[]=$this->uri->segment(3);	//单个id
			if(empty($id[0]) and !empty($data['id'])) $id=$data['id'];
			if(empty($id[0]))	$this->message('未选择任何数据！',site_url($this->router->class.'/lists'));
		    $res=$this->m->del($id);
		    if($res>0){
				$this->message('删除成功！影响数据:'.$res,site_url($this->router->class.'/lists'));
			}else{
			   $this->message('删除失败',site_url($this->router->class.'/lists'));
			}
    }
   //删除会员组信息
   public  function group_del(){	
           
		    $id=$this->uri->segment(3);	//单个id
		    $res=$this->m->group_del($id);
		    if($this->db->affected_rows()>0){
				$this->message('删除成功！',site_url($this->router->class.'/group_lists'));
			}else{
			   $this->message('删除失败',site_url($this->router->class.'/group_lists'));
			}
    }	
   //搜索
   public  function search(){
            $data['get']=$this->input->get();

           // $catid=$this->p->ar_catid($data['catid']);//获取栏目下所有子类ID
		   $where="m.id>0 ";
		   $order='';
		   if(!empty($data['get']['order'])) $order=$data['get']['order']. " desc";
			
	       if(!empty($data['get']['regdate'])) $where.=" and regdate >=  ".strtotime($data['get']['regdate']);
		   if(!empty($data['get']['regdate_end'])){
		          $regdate_end=$data['get']['regdate_end']." 23:59:59";
		          $where.=" and regdate <=  ".strtotime($regdate_end);
				  }
		   
		   if(!empty($data['get']['groupid'])) $where.=" and groupid={$data['get']['groupid']}";
		   if(!empty($data['get']['keyword'])) $where.=" and {$data['get']['type']} like '%{$data['get']['keyword']}%'";
		  
		   
			 //统计数量
			$count = count($this->m->lists('','',$where));
			//配置分页
			$page_list = config_page($count,'index.php/'.$this->router->class.'/search','10');
			$this->my_page->initialize($page_list);
			$data['list'] = $this->m->lists($page_list['perpage'],$page_list['nowindex'],$where,$order);
			$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
             $data['category']=$this->m->group_lists();//会员组分类
			$this->load->vars('data',$data);
			$this->load->vars('pages',$pages);
			$this->load->view($this->router->class.'/lists');
			
    }

    //排序
   public  function group_order(){	
            $data=$this->input->post();
		    $this->m->group_order($data['listorder']);
			$this->message('操作成功！',site_url($this->router->class.'/group_lists/'));
			
    } 
	
		
	
//会员组列表
public function group_lists(){

		$data['list'] = $this->m->group_lists();
		$this->load->vars('data',$data);
		$this->load->view($this->router->class.'/group_lists');

}

//删除会员报名信息
   public  function baoming_del(){	
            $data=$this->input->post();//批量ID
			 $id=$data['id'];
			if(empty($id[0])) $this->message('未选择任何数据！',site_url($this->router->class.'/baoming_lists'));
		     $nn=0;
             foreach( $id AS $v){
                 $this->db->where(array('id' => $v))->delete('member_baoming');
			 	$nn++;
              } 
		    if($nn>0){
				$this->message('删除成功！影响数据:'.$nn,site_url($this->router->class.'/baoming_lists'));
			}else{
			   $this->message('删除失败',site_url($this->router->class.'/baoming_lists'));
			}
    }
	

//会员报名信息列表
   public  function baoming_lists(){
        //统计数量
		$count = $this->m->public_lists('','','','count','member_baoming');
		//配置分页
		$page_list = config_page($count,$this->router->class.'/baoming_lists','10');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->public_lists($page_list['perpage'],$page_list['nowindex'],'','','member_baoming');
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/baoming_lists');
    }

	//删除会员收藏信息
   public  function shoucang_del(){	
            $data=$this->input->post();//批量ID
			 $id=$data['id'];
			if(empty($id[0])) $this->message('未选择任何数据！',site_url($this->router->class.'/shoucang_lists'));
		     $nn=0;
             foreach( $id AS $v){
                 $this->db->where(array('id' => $v))->delete('member_shoucang');
			 	$nn++;
              } 
		    if($nn>0){
				$this->message('删除成功！影响数据:'.$nn,site_url($this->router->class.'/shoucang_lists'));
			}else{
			   $this->message('删除失败',site_url($this->router->class.'/shoucang_lists'));
			}
    }
	

//会员收藏信息列表
   public  function shoucang_lists(){
        //统计数量
		$count = $this->m->public_lists('','','','count','member_shoucang');
		//配置分页
		$page_list = config_page($count,$this->router->class.'/shoucang_lists','10');
		$this->my_page->initialize($page_list);
		$data['list'] = $this->m->public_lists($page_list['perpage'],$page_list['nowindex'],'','','member_shoucang');
		$pages=trim($this->my_page->show()) ? $this->my_page->show() : " ";
		
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
		$this->load->view($this->router->class.'/shoucang_lists');
    }	
 
	
}
?>
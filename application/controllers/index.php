<?php
/**
 *  网站首页控制器
 */
class Index extends MY_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
	  if($GLOBALS['wl_ts']['cache']==true){
	     $this->output->cache(1440);//输出缓存设置，单位分钟
	  	}
		$tp="index";	  
		/*手机端响应式处理*/
		$w_style=$_GET['b'];
		$tp=auto_tp('index','wap/wap_index',$w_style);
		/*手机端响应式结束*/
		$this->load->view($tp);
	}
	
  //报名课程页面显示
	public function baoming(){
	       $data=@$_GET;
	       $this->load->vars('data',$data);
		   $this->load->view('layer/baoming');
	}
	//报名课程预约增加
	public function baoming_add(){
	         
			 $data=$this->input->post();
			
			 $data['info']['uptime']=time();
			 $data['info']['username']=@$this->member_info['username'];
			 $data['info']['userid']=@$this->member_info['id'];
			 if($data['info']['title']=='' || $data['info']['name']=='' || $data['info']['tel']==''){
			    $res=2;//报名失败
			 }else{
			 //注册用户判断是否重复报名
			    $count=0;
			      if(!empty($data['info']['userid'])){
				     $where=array('userid'=>$data['info']['userid'],'model'=>$data['info']['model'],'articleid'=>$data['info']['articleid']);
			         $count= $this->db->from('member_baoming')->where($where)->count_all_results();
				  }
			      
			       if($count>0){
			           $res=3;//报名失败，之前已经报过了
			       }else{
			           $this->db->insert('member_baoming', $data['info']);
				       $res=1;//报名成功
			        }   
			 }
	
	       $this->load->vars('res',$res);
		   $this->load->view('layer/baoming');
	}

}
	
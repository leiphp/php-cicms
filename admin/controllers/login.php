<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

   public function __construct(){
		parent::__construct();
		session_start();
	}
	
	public function index(){
		  $this->load->model("Publicm");//加载公共模型
	     // $this->Publicm->if_safe_ip(); 
	  
	      $data=$this->code();
         $this->load->vars('data',$data);
		$this->load->view('login');
	}
//验证登陆	
	public function check_login(){
	  

	     $data=$this->input->post();
		 
		  if($_SESSION['code']!=$data['info']['code']){
		     $this->message('验证码错误！',site_url('login'));
			 exit;
		 }
		 $this->load->model("Adminuserm");//加载模型
		 $this->m=$this->Adminuserm;//重命名所加载的模型
		 if($this->m->check_login($data)){
		       $this->message('登陆成功！',site_url());
		 }else{
		     $this->message('用户名或密码错误！',site_url('login'));
		 }
   }
   
//退出登陆
	public function out_login(){
	    $this->load->library("session");
		$this->session->unset_userdata('user');//销毁管理员session
	    $this->message('退出成功！',site_url('login'));
	}
//生成验证码
	public function code($ajax='',$width=100,$height=30){
	      $ajax=$this->uri->segment(3);
		//生成验证码
	    $this->load->helper('captcha');
		 $vals = array(
		 'word'=>rand(1000,9999),
		'img_path' => '../upload/code/',
		'font_path' => './views/skin/images/texb.ttf',
		'img_url' => base_url().'../upload/code/',
		'img_width' => $width,
		'img_height' => $height,
		'expiration' => 60
		);
        $cap = create_captcha($vals);
		 $_SESSION['code']=$cap['word'];
		 
		 //判断的是否是通过页面点击图片ajax过来的
		 if($ajax=='ajax'){
		    echo $cap['image'];
		 }else{
		    return $cap;
		 }
		 
	}
	
	/**
	 * 这个提示信息没有继承MY_Controller,因为在那里会首页判断是否登陆，然后跳转到登陆页面
	 *
	 * @access  public
	 * @param   $msg string 提示信息
	 * @param   $goto string 跳转地址
	 * @param   $auto bool 是否自动跳转：true:自动；false:不自动
	 * @param   $fix string
	 * @return  $pause void 跳转所需时间
	 */
	public function message($msg, $goto = '', $auto = TRUE, $fix = '', $pause = 2000)
	{
		if($goto == '')
		{
			$goto = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url();
		}
		else
		{
			 if(strpos($goto, 'avascript') == false){
		       $goto = strpos($goto, 'http') !== false ? $goto : site_url($goto);
		     }
		}
		$goto .= $fix;
		$this->load->view('sys_message', array('msg' => $msg, 'goto' => $goto, 'auto' => $auto, 'pause' => $pause));
		echo $this->output->get_output();
		exit();
	}
	

}
?>
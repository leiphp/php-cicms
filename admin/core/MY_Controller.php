<?php
/*
 admin
 扩展控制器
*/
class MY_Controller extends CI_Controller{ 
     public function __construct(){
	    parent::__construct();
		$this->output->enable_profiler($GLOBALS['wl_ts']['db_debug_file']);//全站显示调试信息
		$this->load->library("session");
		$this->user_info = $this->user_info();
		date_default_timezone_set("PRC"); //设置时区为北京时间
		if($GLOBALS['wl_ts']['error']==false){error_reporting(0); }
	 }
	 
/**
	 * 信息提示
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
	
/**
	 * @uses  获取当前登陆用户的信息

*/
	public function user_info(){		
		$this->load->model("Adminuserm");
		$info =$this->session->userdata('user');
	
		//var_dump(redirect("login"));
		//exit;
		if(!empty($info)){
		   return $info;
		   exit;
		}else{
		   echo "<script language=\"javascript\">window.top.location.href='".base_url()."index.php/login';</script>";
		   exit;
		}
		
	}


 }

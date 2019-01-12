<?php
/*
 admin
 扩展控制器
*/
class MY_Controller extends CI_Controller{ 
     public function __construct(){
	    parent::__construct();
		
			if(@$GLOBALS["install"]=='false'){
		       $this->load->helper('url');
			   redirect('install', 'refresh');
		    }else{
	
				$this->load->helper("url");
				$this->load->helper("wl_function");
				$this->load->model("Publicm");//加载公共模型
				$this->load->library("MY_page");//分页模型
				$this->p=$this->Publicm;//重命名公共模型
				date_default_timezone_set("PRC"); //设置时区为北京时间
				if($GLOBALS['wl_ts']['error']==false){error_reporting(0); }
				$this->output->enable_profiler($GLOBALS['wl_ts']['db_debug_file']);//全站显示调试信息
				
				//判断是否登陆,获取登录用户信息
				$this->load->library("session");
				$this->member_info =$this->session->userdata('member_info');
			 
		 } 

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
	



 }

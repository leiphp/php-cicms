<?php
/**
 *  控制器
 */
class Install extends CI_Controller{
	public function __construct(){
		parent::__construct();
        $this->load->helper('url');
	}
	
	public function index(){
	
	  $file="install/cicms.lock";
	   if(file_exists($file)){
	     header("Content-type: text/html; charset=utf-8"); 
         echo '<h1>系统检测到已经安装，若要重新安装，请删除根目录/install/cicms.lock文件再进行操作。</h1>';
		 exit;
       }
	   
		$this->load->view('install/index');
		
	}


}
	
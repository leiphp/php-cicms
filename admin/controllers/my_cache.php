<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_cache extends MY_Controller {

   public function __construct(){
		parent::__construct();
	}
	

 //清空缓存
   public  function chearall(){
            $this->load->helper('file');
            $urlshang = $_SERVER['HTTP_REFERER'];//获取上级URL
            delete_files('../application/cache/',true);//删除前台缓存文件
		    $this->message('清除成功!',$urlshang );
    }

	
}
?>
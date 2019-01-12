<?php
/**
 *  控制器
 */
class Get_info extends MY_Controller{
	public function __construct(){
		parent::__construct();
		session_start();
		
	}
	//生成验证码
	public function code($ajax='',$width=100,$height=30){
	      $ajax=$this->uri->segment(3);
		//生成验证码
	    $this->load->helper('captcha');
		 $vals = array(
		 'word'=>rand(1000,9999),
		'img_path' => './upload/code/',
		'img_url' => base_url().'upload/code/',
		'img_url' => './upload/code/',
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

}
	
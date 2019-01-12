<?php
//公共控制器
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Publicm");//加载公共模型
        $this->load->library("MY_page");//分页模型
		$this->p=$this->Publicm;//重命名公共模型
       $this->pre_url=$_SERVER['HTTP_REFERER'];//上级页面url
	}

//百度URL提交	,通过psot提交ID，组合成url提交给百度
 public  function baidu_url($model){
           //组成url数组
		   $data=$this->input->post();
		   $url_root=$_SERVER['SERVER_NAME'];
		   $nn=0;
		   foreach( $data['id'] as $v){
             $urls[$nn]="http://".$url_root.'/'.$model.'/show/'.$v.'.html';
			 $nn++;
           } 
		 
		  $aa=$this->baidu_url_post($urls);
	      $bb=json_decode($aa,true);
		  $this->message("成功推送：".$bb['success']."条<br>剩余额度：".$bb['remain'],$this->pre_url);

  
 }
   //baidu url 推送
   //$urls 提交推送url
   public function  baidu_url_post($urls){
   
		/*$urls = array(
			'http://www.aweishang.net/news/show/980.html',
			'http://www.aweishang.net/news/show/966.html',
		);*/
		$api = $GLOBALS['wl_url']['baidu'];
		$ch = curl_init();
		$options =  array(
			CURLOPT_URL => $api,
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => implode("\n", $urls),
			CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
		);
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		return $result;
   }

	
}
?>
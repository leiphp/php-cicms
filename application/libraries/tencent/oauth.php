<?php
/*
腾讯QQ登陆模块
www.wfuyu.com 程序员人生
2015-11-19
*/    
    class Oauth
    {
        public function __construct() {
		    $this->access_token= '';
            $this->openid = '';
			$CI = &get_instance();
            $CI->config->load('qq_setting');
            $this->qq_set= $CI->config->item('inc_info');
        }

	 //获得登录的 openid
        public function wget_openid($code){
            $url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id={$this->qq_set['appid']}&client_secret={$this->qq_set['appkey']}&code={$code}&redirect_uri={$this->qq_set['callback']}";
           $content=file_get_contents($url);
		            if (stristr($content,'access_token=')) {
                $params = explode('&',$content);
                $tokens = explode('=',$params[0]);
                $token  = $tokens[1];
                $this->access_token=$token;
                if ($token) {
                     $url="https://graph.qq.com/oauth2.0/me?access_token=$token";
                    $content=file_get_contents($url);
                     $content=str_replace('callback( ','',$content);
                     $content=str_replace(' );','',$content);
                     $returns = json_decode($content);
                     $openid = $returns->openid;
                     $this->openid = $openid;
                     $_SESSION["token2"]  = $openid;
                } else {
                    $openid='';
                }
            } elseif (stristr($content,'error')) {
                $openid='';
            }
			
            return $openid;
        }
//用户登陆		
    public function redirect_to_login() {
            //跳转到QQ登录页的接口地址, 不要更改!!
            $redirect = "https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id={$this->qq_set['appid']}&scope=&redirect_uri={$this->qq_set['callback']}";
            header("Location:$redirect");
        }
		
 /**
        * 返回用户信息
        * 
*/
        public function get_user_info(){
            $url = "https://graph.qq.com/user/get_user_info?access_token=$this->access_token&oauth_consumer_key={$this->qq_set['appid']}&openid=$this->openid";
            //$content=file_get_contents($url);
			 	
           $content=file_get_contents($url);
            $result = json_decode($content);
            return $result->nickname;
        }
	

    }
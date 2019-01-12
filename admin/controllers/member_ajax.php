<?php 
/*
AJAX控制器，主要用于表单检查

这里没有继承自定义MY_Controller,原因是因为验证表单的时候用户没有登录，会员模块的MY_Controller，必须登录才能范围

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_ajax extends CI_Controller {

   public function __construct(){
		parent::__construct();
	}

 	
/**
	 * 检查用户名
	 * @param string $username	用户名
	 * @return $status {1:用户已注册}
	  这里要检查用户表wl_member和管理员表wl_admin。两个表都不能重复
	 */
	 
   public  function ajax_check_username(){	

           $name = isset($_GET['username']) && trim($_GET['username']) ? trim($_GET['username']) : exit(0);
		   $status1 = $this->db->from('admin')->where("name",$name)->count_all_results();//验证管理员表
		   $status2 = $this->db->from('member')->where("username",$name)->count_all_results();//验证用户表

	       if(empty($status1) and empty($status2)){$status=0;}else{$status=1;}
			if($status == 1) {
			    exit('1');
		    } else {         //验证通过
			    exit('0');
		    }
    }
	
	/**
	 * 检查昵称
	 * @param string $nickname	昵称
	 * @return $status {1:用户已注册}
	 */
	 
   public  function ajax_check_nickname(){	

           $nickname = isset($_GET['nickname']) && trim($_GET['nickname']) ? trim($_GET['nickname']) : exit(0);
		   $status1 = $this->db->from('member')->where("nickname",$nickname)->count_all_results();
	       if(empty($status1)){$status=0;}else{$status=1;}
			if($status == 1) {
			    exit('1');
		    } else {         //验证通过
			    exit('0');
		    }
    }
	
/**
	 * 检查邮箱
	 * @param string $email	邮箱
	 * @return $status {1:用户已注册}
	 */
	 
   public  function ajax_check_email(){	

           $email = isset($_GET['email']) && trim($_GET['email']) ? trim($_GET['email']) : exit(0);
		   $status1 = $this->db->from('member')->where("email",$email)->count_all_results();
	       if(empty($status1)){$status=0;}else{$status=1;}
			if($status == 1) {
			    exit('1');
		    } else {         //验证通过
			    exit('0');
		    }
    }
	
 
	
}
?>
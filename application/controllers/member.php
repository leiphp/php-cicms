<?php
/**
 *  会员控制器
 这里要做个说明
 前台会员信息，显示，一般都要用session里面的值就可以了
 但是有个例外，需要修改的数据，不要用session里面的值，因为session里面的值，用户需要重新登陆才能更新
 */
class Member extends MY_Controller{
	public function __construct(){
		parent::__construct();
		session_start();
		$this->m=$this->load->model("Memberm");//加载会员模型
		$this->m=$this->Memberm;//重命名会员模型
		$this->model=$this->router->class;//当前模块名称
		
		$this->mp=$this->load->model("Memberm_publish");//加载会员文章管理模型
		$this->mp=$this->Memberm_publish;//重命名会员文章管理模型
		
		$this->load->library("MY_page_member");//会员分页模型
		
		//页面seo title
		$this->seotitle='会员后台管理';
		
        //判断是否登陆	
	    $this->load->library("session");
	    $this->member_info =$this->session->userdata('member_info');
	   //以下控制器，在没有登陆的情况下可以访问		
	    if(empty($this->member_info) && $this->uri->segment(2)!='login' && $this->uri->segment(2)!='register'&& $this->uri->segment(2)!='get_password'&& $this->uri->segment(2)!='qq_login'){
	       echo "<script language=\"javascript\">window.location.href='".base_url()."member/login';</script>";
	    }


		
	}
	
	public function index(){
	     	$this->edit_member();
	}
	
	//用户注册
	public function register(){
	        $data=$this->input->post();
		if(!empty($data)){//增加新管理员
            if($data['info']['username']=='' || $data['info']['email']=='' || $data['info']['nickname']==''){
		        $this->message('注册失败,用户名，邮箱，昵称均不能为空！',site_url($this->router->class.'/register'));
		     }
			 
			 if(strlen($data['info']['password'])<6){
		        $this->message('注册失败,密码长度最少6位！',site_url($this->router->class.'/register'));
		     }
			 if($data['info']['password']!=$data['ppwd']){
		        $this->message('两次输入的密码不一致！',site_url($this->router->class.'/register'));
		     }
			 
			   if($_SESSION['code']!=$data['code']){
		          $this->message('验证码错误！',site_url($this->router->class.'/register'));
		       }
		
	     	$res=$this->m->member_register($data['info']);
			if($res=="true"){
			     $this->session->unset_userdata('qqsession');//销毁qqsession
			     $this->message('注册成功！',site_url($this->router->class));
			}else{
			     $this->message('注册失败,'.$res,site_url($this->router->class.'/register'));
			}
		}else{	
		     $this->seotitle='用户注册-'.$this->seotitle;
		    $this->load->view($this->router->class.'/register');
		}
	     	
	}
	
	//用户登陆
	public function login(){

	        $data=$this->input->post();
		if(!empty($data)){//登录验证
            if($data['info']['username']=='' || strlen($data['info']['password'])<6 ){
		        $this->message('用户名或密码错误！',site_url($this->router->class.'/login'));
		     }
			   if($_SESSION['code']!=$data['code']){
		          $this->message('验证码错误！',site_url($this->router->class.'/login'));
		       }
		
	     	$res=$this->m->check_login($data['info']);
			if($res==true){
			     $this->session->unset_userdata('qqsession');//销毁qqsession
			     $this->message('登录成功！',site_url($this->router->class));
			}else{
			     $this->message('用户名或密码错误,',site_url($this->router->class.'/login'));
			}
		}else{	
		    $this->seotitle='用户登陆-'.$this->seotitle;
		    $this->load->view($this->router->class.'/login');
		}

	}
//qq用户登陆
  public function qq_login(){
         $this->load->library('tencent/oauth','oauth'); 
	     if(!isset($_GET['code'])){
                      $this->oauth->redirect_to_login();//登陆腾讯qq,并返回到回调地址
          }else{
			 $code = $_GET['code'];
			 $openid =  $this->oauth->wget_openid($code);
			 if(!empty($openid)){

			   $data['info']=$this->m->get_member($openid,'connectid');//通过connectid获取会员信息
				 if(!empty($data['info'])){
				       //QQ已存在于数据库(已绑定QQ的用户)，则直接转向登陆操作
				        $res=$this->m->check_login($data['info'],'qq');
		     	           if($res==true){
			                   $this->message('登录成功！',site_url($this->router->class));
			               }else{
			                 $this->message('用户名或密码错误,',site_url($this->router->class.'/login'));
			               }
		
				 }else{
				   //未存在于数据库中，跳去完善资料页面。页面预置用户名（QQ返回是UTF8编码，如有需要进行转码）
				         $user = $this->oauth->get_user_info();//获取用户信息
						 
						 $data['nickname'] =$user;
						 $data['connectid'] = $openid;
						 $this->session->set_userdata('qqsession',$data);
						 $this->seotitle='用户注册-'.$this->seotitle;
		                 $this->load->view($this->router->class.'/register');
						 
						   
				 }
			 }else{
			     $this->login();
			 }
	     }	

	}	
//用户修改自己的信息
   public  function edit_member(){
            $data=$this->input->post();
            if(!empty($data)){//修改会员信息
			    $this->m->edit_member($data['info']);
				if($this->db->affected_rows()>0){
					 $this->message('修改成功！',site_url($this->router->class.'/edit_member'));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/edit_member'));
				}
			}else{
			    $data['res']=$this->m->get_member($this->member_info['id']);
				$this->seotitle='账号信息-'.$this->seotitle;
				$this->load->vars('data',$data);
				$this->load->view($this->router->class.'/edit_member');
			}	
			
    }	
  //用户修改密码
   public  function edit_password(){

            $data=$this->input->post();
            if(!empty($data)){//修改密码
			    if(strlen($data['info']['new_password'])<6){
		             $this->message('修改失败,密码长度最少6位！',site_url($this->router->class.'/edit_password'));
		         }
			     if($data['info']['new_password']!=$data['ppwd']){
		             $this->message('两次输入的密码不一致！',site_url($this->router->class.'/edit_password'));
		         }
			 
			    $res=$this->m->edit_password($data['info']);
				if($res){
					 $this->message('修改成功！',site_url($this->router->class.'/edit_member'));
				}else{
					 $this->message('修改失败,原密码不正确！',site_url($this->router->class.'/edit_password'));
				}
			}else{
				$this->seotitle='密码修改-'.$this->seotitle;
				$this->load->view($this->router->class.'/edit_password');
			}	
			
    }
//用户密保设置
   public function mibao(){
               
            $data=$this->input->post();
            if(!empty($data)){
			    if(strlen($data['info']['ans1'])<1 || strlen($data['info']['ans2'])<1){
		             $this->message('密保答案不能为空！',site_url($this->router->class.'/mibao'));
		         }
			 
			    $res=$this->m->mibao($data['info'],'set');
				if($res){
					 $this->message('设置成功！',site_url($this->router->class.'/mibao'));
				}else{
					 $this->message('设置失败！',site_url($this->router->class.'/mibao'));
				}
			}else{
			   
				//判断是否设置密保
			   $status = $this->db->from('member_mibao')->where(array('uid'=>$this->member_info['id'],'mibao_ques !='=>''))->count_all_results();
			   if($status>0){
			        $data['type']='setted';
			   }else{
			        $data['mibao_ques'] = $this->config->item('mibao');
			        $data['type']='setting';
			   }
				$this->load->vars('data',$data);
				$this->seotitle='密保设置-'.$this->seotitle;
				$this->load->view($this->router->class.'/set_mibao');	
			}	
   }	
//用户重置密保
	 public function reset_mibao(){
	         $data=$this->input->post();
			 $type=$this->uri->segment(3);
		
			 
			 //显示回答密保问题页面
			 if(empty($type)){
			       $data['mibao_ques'] = $this->config->item('mibao');
				   $data['user_mibao']=$this->m->get_mibao();
				   $this->load->vars('data',$data);
				   $this->seotitle='密保设置-'.$this->seotitle;
				   $this->load->view($this->router->class.'/check_mibao');	
			   
			 }
			 
			 //验证回答的密保问题
			 if($type=='ask'){
			         if(strlen($data['info']['ans1'])<1 || strlen($data['info']['ans2'])<1){
		                  $this->message('密保答案不能为空！',site_url($this->router->class.'/reset_mibao'));
		               }
					   $res=$this->m->check_mibao($data['info']);
					   
					   if($res==true){
					        $data['mibao_ques'] = $this->config->item('mibao');
							$this->seotitle='密保设置-'.$this->seotitle;
							$this->load->vars('data',$data);
					        $this->load->view($this->router->class.'/reset_mibao');
			           }else{
			              $this->message('密保问题错误，无法重置',site_url($this->router->class.'/reset_mibao'));
			           }
			 }
			//重置密保 
			  if($type=='reset'){
			          if(!empty($data)){ 
							  if(strlen($data['info']['ans1'])<1 || strlen($data['info']['ans2'])<1){
								  $this->message('密保答案不能为空！',site_url($this->router->class.'/reset_mibao'));
							   }
							   $res=$this->m->update_mibao($data['info']);
							   
							   if($res==true){
								   $this->message('设置成功！',site_url($this->router->class.'/mibao'));
							   }else{
								  $this->message('设置失败',site_url($this->router->class.'/mibao'));
							   }
				         }else{

							$data['mibao_ques'] = $this->config->item('mibao');
							$this->seotitle='密保设置-'.$this->seotitle;
							$this->load->vars('data',$data);
				            $this->load->view($this->router->class.'/reset_mibao');
						  
						 }
			  
			  }

	 }	
//密码找回
 public function get_password(){
         $data=$this->input->post();
		 $type=$this->uri->segment(3);
		 $data['type']='';
		 
		 //找回密码主页面
		 if(empty($type)){
		     
		  }
		  
		  //密保找回密码  
		  if($type=='mibao'){
			   //表单提交
			   if(!empty($data['action'])){
			       //验证用户名
			       if($data['action']=='sub_user'){
						   if($_SESSION['code']!=$data['code']){
								 $this->message('验证码错误！',site_url($this->router->class.'/get_password/mibao'));
							}
							//判断用户名是否已经注册
						   if($this->m->get_member($data['info']['username'],'username')){
								$data['user_mibao']=$this->m->get_mibao('',$data['info']['username']);//获取用户密保问题
								if(empty($data['user_mibao'])){
								  //用户未设置密保
								    $data['type']='mibao_check_false'; 
								}else{
								   $data['type']='mibao_check'; 
								   $this->session->set_userdata('flash2_username',$data['info']['username']);
								}
								
						   }else{
							 $this->message('用户名没有被注册！',site_url($this->router->class.'/get_password/mibao'));
						   }
		            }
				 //验证密保问题
			       if($data['action']=='sub_check'){

						   if($_SESSION['code']!=$data['code']){
								 $this->message('验证码错误！',site_url($this->router->class.'/get_password/mibao'));
							}
						    $res=$this->m->check_mibao($data['info'],'',$this->session->userdata('flash2_username'));
					        if($res==true){
						          $data['type']='mibao_reset'; 
			                 }else{
			                    $this->message('密保问题错误，无法重置',site_url($this->router->class.'/get_password/mibao'));
			                }
		            }	
				 //重置密码
			       if($data['action']=='sub_reset'){

						   $res=$this->m->reset_password($data['info'],$this->session->userdata('flash2_username'));
					        if($res==true){
						         $this->message('密码重置成功，请重新登陆！',site_url($this->router->class.'/member/login/'));
			                 }else{
			                    $this->message('重置失败',site_url($this->router->class.'/get_password/mibao'));
			                }
		            }	
					
					
			   }else{
			   
			    $data['type']='mibao_user'; 
			   }
		     
		  }
		  
		   //通过邮箱找回密保
		  if($type=='email'){
			   //表单提交
			   if(!empty($data['action'])){
			       //验证邮箱，并发送验证邮件
			       if($data['action']=='sub_email'){
						   if($_SESSION['code']!=$data['code']){
								 $this->message('验证码错误！',site_url($this->router->class.'/get_password/email'));
							}
							//判断邮箱是否已经注册
							$member_info=$this->m->get_member($data['info']['email'],'email');
	
						   if($member_info){
						   
	
								  $code=$this->m->get_lostpwd_code($data['info']['email']);;//生成code并保存数据库
								 
								 //发送重置密码邮件
								 $email_send['email']  =$data['info']['email'];
                                 $email_send['fjr']    ="密码找回";
                                 $email_send['zhuti']  =base_url().' 密码找回邮件';
                                 $email_send['message']=$GLOBALS["wl_email"]["lost_pwd_message"]; 
								 $email_send['message']=str_replace("<username>",$member_info['username'],$email_send['message']);
								 $email_send['message']=str_replace("<time>",date('Y-m-d H:i:s',time()),$email_send['message']);
								 $email_send['message']=str_replace("<url>",base_url().'member/get_password/code/'.$code,$email_send['message']);
								 $email_send=$this->m->get_lostpwd_email_send($email_send);
								if($email_send){
								    $data['type']='email_send_ok';
								 }else{
								    $data['type']='email_send_false';  
								 } 
						   }else{
							 $this->message('邮箱没有被注册！',site_url($this->router->class.'/get_password/email'));
						   }
		            }
			   }else{
			   
			    $data['type']='email_user'; 
			   }
		     
		  }
		  
		  //通过邮箱找回密码，验证是否正确
		  if($type=='code'){
		      $code=$this->uri->segment(4);
			  if(empty($code))exit;
			  //判断邮箱code是否正确
			  $data['member']=$this->m->check_lostpwd_code($code);
			  if(!empty($data['member'])){
			        $this->session->set_userdata('flash2_username',$data['member']['username']);
	                $data['type']='email_reset'; 
			  }else{
			       $data['type']='email_reset_false';  
			  }
		  }
		  $this->seotitle='密保设置-'.$this->seotitle;
		  $this->load->vars('data',$data);
		  $this->load->view($this->router->class.'/get_password');
       
 }	 
//退出登陆
	public function out_login(){
	    $this->load->library("session");
		$this->session->unset_userdata('member_info');//销毁会员session
	   $this->message('退出成功！',site_url('member/login'));
	}
/*发布修改删除文章系列方法*/

//发布文章
 public function publish(){
        $data=$this->input->post();
		$get['model']=@$_GET['model'];
		$get['modelid']=@$_GET['modelid'];
		if(!empty($data)){//增加新信息
				
		  //添加数据
	     	$this->mp->add($data['info'],$get['model']);
			if($this->db->affected_rows()>0){
			     $this->message('发布成功,等待审核！',site_url($this->router->class.'/published?model='.$get['model'].'&modelid='.$get['modelid'].'&nt=信息管理'));
			}else{
			     $this->message('发布失败 ！',site_url($this->router->class.'/published?model='.$get['model'].'&modelid='.$get['modelid']));
			}
		}else{
		   $data['form_info']=$this->mp->get_form_info($get['modelid']);
		    $this->load->vars('data',$data);
			 $this->load->vars('get',$get);
		    $this->load->view($this->router->class.'/publish');
		}
     
 }

	 //会员已发布文章列表 
	 public function published(){
        $get['model']=@$_GET['model'];
		$get['modelid']=@$_GET['modelid'];
		
          //统计数量
		$count = $this->mp->lists('','','','count',$get['model']);
		//配置分页
		$page_list = config_page_member($count,$this->model.'/published/',1);
		$this->my_page_member->initialize($page_list);
		$data['list'] = $this->mp->lists($page_list['perpage'],$page_list['nowindex'],'','',$get['model']);
		$pages=trim($this->my_page_member->show()) ? $this->my_page_member->show() : " ";
		
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
         $this->load->view($this->router->class.'/publish_list');
     }
	//会员删除文章
  public function del(){
  
          $id=$_GET['id'];
		  $get['model']=@$_GET['model'];
		  $get['modelid']=@$_GET['modelid'];
		  $get['nt']=@$_GET['nt'];
		  $model=$_GET['model'];
          $this->db->where(array('id' => $id,'username'=>$this->member_info['username']))->delete($model);
		  $this->message('删除成功！',site_url($this->router->class.'/published?model='.$get['model'].'&modelid='.$get['modelid'].'&nt='.$get['nt']));
		   
		   
  
     }
	 
//会员修改文章
   public  function edit(){
             $data=$this->input->post();
			 
			 $get['id']=@$_GET['id'];
			 $get['model']=@$_GET['model'];
		     $get['modelid']=@$_GET['modelid'];
			 $get['nt']=@$_GET['nt'];
		     if(empty($get['nt'])){$get['nt']='信息管理';}
	
            if(!empty($data)){//修改信息
			    $this->mp->update($data['info'],$get['model']);
				if($this->db->affected_rows()>0){ 
					 $this->message('修改成功！',site_url($this->router->class.'/published?model='.$get['model'].'&modelid='.$get['modelid'].'&nt='.$get['nt']));
				}else{
					 $this->message('修改失败 ！',site_url($this->router->class.'/published?model='.$get['model'].'&modelid='.$get['modelid'].'&nt='.$get['nt']));
				}
			}else{//显示修改信息界面
				$data['res']=$this->mp->get_one($get['id'],$get['model']);
				$data['form_info']=$this->mp->get_form_info($get['modelid'],$data['res']);
				$this->load->vars('data',$data);
				$this->load->vars('get',$get);
				$this->load->view($this->router->class.'/publish_edit');
			}	
			
    }
	 
/*发布修改删除文章系列方法 end*/

 //会员报名列表
	 public function baoming(){
          //统计数量
		$count = $this->mp->lists_baoming('','','','count');
		//配置分页
		$page_list = config_page_member($count,$this->model.'/baoming/',10);
		$this->my_page_member->initialize($page_list);
		$data['list'] = $this->mp->lists_baoming($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page_member->show()) ? $this->my_page_member->show() : " ";
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
         $this->load->view($this->router->class.'/baoming_list');
     }
	 
	  //会员收藏列表
	 public function shoucang(){
          //统计数量
		$count = $this->mp->lists_shoucang('','','','count');
		//配置分页
		$page_list = config_page_member($count,$this->model.'/shoucang/',10);
		$this->my_page_member->initialize($page_list);
		$data['list'] = $this->mp->lists_shoucang($page_list['perpage'],$page_list['nowindex']);
		$pages=trim($this->my_page_member->show()) ? $this->my_page_member->show() : " ";
		$this->load->vars('data',$data);
		$this->load->vars('pages',$pages);
         $this->load->view($this->router->class.'/shoucang_list');
     }
	 
	 	//会员删除报名信息
  public function del_baoming(){
          $id=$_GET['id'];
          $this->db->where(array('id' => $id,'userid'=>$this->member_info['id']))->delete('member_baoming');
          $this->message('删除成功 ！',site_url($this->router->class.'/baoming'));
     }
	 
	  	//会员删除收藏信息
  public function del_shoucang(){
          $id=$_GET['id'];
          $this->db->where(array('id' => $id,'userid'=>$this->member_info['id']))->delete('member_shoucang');
          $this->message('删除成功 ！',site_url($this->router->class.'/shoucang'));
     }
	 
}
	
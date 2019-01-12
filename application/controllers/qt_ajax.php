<?php 
/*
前台，AJAX控制器

这里没有继承自定义MY_Controller,原因是因为验证表单的时候用户没有登录，会员模块的MY_Controller，必须登录才能范围

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qt_ajax extends CI_Controller {

   public function __construct(){
		parent::__construct();
		
		//判断是否登陆,获取登录用户信息
	    $this->load->library("session");
	    $this->member_info =$this->session->userdata('member_info');
	}

	
//前端文章收藏	
 public  function ajax_shoucang(){	
          
          if(empty($this->member_info['username'])){
		     exit('1');//用户没登陆
		  }else{
		     $data=$_POST;
			 $data['uptime']=time();
			 $data['username']=$this->member_info['username'];
			 $data['userid']=$this->member_info['id'];
			 $where=array('userid'=>$data['userid'],'model'=>$data['model'],'articleid'=>$data['articleid']);
			 $count= $this->db->from('member_shoucang')->where($where)->count_all_results();
			 if($count>0){
			   exit('3');//您已经收藏过
			 }else{
			     $this->db->insert('member_shoucang', $data);
			    exit('2');//收藏成功
			 }
		  }
 }
 
 //通过省份找城市
 public  function city(){	
                $id=@$_GET['id'];
				$ip=@$_GET['ip'];
				
			//通过省份ID找到对应的城市	
			if(!empty($id)){
			  $data='';
			    $query = $this->db->where("parentid",$id)->get('wl_city')->result_array();
				foreach($query as $v){
				  $data=$data.'<option value="'.$v['id'].'">'.$v['name'].'</option>';
				}
			   exit($data);//
			}
			
				//通过本身的IP地址，初始化城市
			if(!empty($ip)){
			   $ip= $this->input->ip_address();
			   $api = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=$ip";
               $json = @file_get_contents($api);//调用新浪IP地址库
               $arr = json_decode($json,true);//解析json
               $province = $arr['province'];//获取省份
               $city = $arr['city']; //取得城市
			
			    if(!empty($province)){
				    $query1= $this->db->like("name",$province)->get('wl_city')->row_array();
				  if(!empty($city)){
				     $query2= $this->db->like("name",$city)->get('wl_city')->row_array();
				  } 
			   }
			   if(!empty($query1)){
				  $data['p']= $query1['id'];
				  if(!empty($query2)){
				        $data['c']= $query1['id'];   
				  } 
			   }
             exit(json_encode($data));
		
			}
				
	
 }
 
//pc端留言
  public  function ajax_message_pc(){	
          
		  $data=$_POST;
		  $data['uptime']=time();
          if(empty($data['name']) or empty($data['tel']) ){
		     exit('1');//表单信息没有填写完整
		  }else{
			 $this->load->helper("wl_function");
			 $data['ip']=$this->input->ip_address();//注册IP
	         $data['address']=@get_ip_adds($data['ip']);//注册地址
			 $this->db->insert('message', $data); 
			 exit('2');//留言成功
			 
		  }
       
 }
 
//手机端留言
  public  function ajax_message_wap(){	
          
		  $data=$_POST;
		  $data['uptime']=time();
          if(empty($data['content'])){$data['content']="我对此项目很感兴趣，请联系。";}
          if(empty($data['name']) or empty($data['tel']) ){
		     exit('1');//表单信息没有填写完整
		  }else{
			 $this->load->helper("wl_function");
			 $data['ip']=$this->input->ip_address();//注册IP
	         $data['address']=@get_ip_adds($data['ip']);//注册地址
			 $this->db->insert('message', $data); 
			 exit('2');//留言成功
			 
		  }
       
 }
 	
}
?>
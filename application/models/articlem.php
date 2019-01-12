<?php
class Articlem extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="page";//当前操作的数据库表	
	}

/*返回单页面详情和当前栏目和顶级栏目和父级栏目信息 
//
*/	
 public function get_one($id=''){
       $id=$this->get_catid($id);//获取栏目id
	   $id=intval($id);
       $query['res'] = $this->db->where("catid",$id)->get($this->form)->row_array();
	    if(empty($query['res'])){ //当前栏目ID不存在，返回404错误信息
		   return false;
		 }
	   //获取当前栏目
	   $query['category']=$this->p->get_one_category($id);
	   
	   //顶级栏目信息
	   $top_array=explode(',',$query['category']['path']);//将栏目路径转为数组
	   if(!empty($top_array[1])){
	        $query['category']['top']=$this->p->get_one_category($top_array[1]);
	   }else{
	      $query['category']['top']=$query['category']['parent']= $query['category'];
	   }
	   
	    //获取父栏目
		if($query['category']['pid']!=0){
		     $query['category']['parent']=$this->p->get_one_category($query['category']['pid']);
		}else{
			 $query['category']['parent']=$query['category']['top'];
		}
	  
	   return $query; 
 }



/*获取单页面展示ID
  现有单面目录结构如下
   关于我们(1)   帮助中心(2) 
   公司简介(3)   订单帮助(6) =>  如何下单(8)  如何注册(9)
   总裁致辞(4)   售后服务(7) =>  售后流程(10)   
   发展历程(5)
   
①url:/article/1/  当访问id号为大类时，取排序最大的子类，取公司简介
②url:/article/    当访问url无id号时：取排序靠前的栏目，取公司简介。（因为关于我们为大类，所以要取下面的小类）

//只处理3级分类，意思说单页面分类最多只允许三级分类	

 */
 public function get_catid($id=''){
        $catid='';
         $model=$this->p->get_model("tablename='page'");//获取单页面模型信息
         $data=$this->p->get_category("modelid={$model['id']}");//获取所有单页面栏目信息
		 if($id==''){
		      $nn=0;
			 foreach($data as $key=>$v){
			   if($nn==0){
	             //到达帮助中心
				  if(!empty($v['child'])){
				   //帮助中心下有子类
				   //获取订单帮助栏目
				    $kk=0;
				       foreach($v['child'] as $key=>$v){
					      if($kk==0){
						   //到达订单帮助
						     if(!empty($v['child'])){
							   //订单帮助下有子类
							   //获取如何下单栏目
							   $mm=0;
							    foreach($v['child'] as $key=>$v){
								     if($mm==0){
									   if(!empty($v['child'])){
									   
									   //如何下单下有子类
									    //单页面超过三级分类，不予处理
									   }else{
									     $catid=$key;
									   //如何下单无有子类
									   }
									 }
								     $mm++;
								}
							 }else{
							    //订单帮助下无子类
								 $catid=$key; 
							 }
						  }
					       $kk++;
					   }
				  }else{
				    //帮助中心下无子类
				       $catid=$key; 
				  }
			   }
			   $nn++;
			 }
		 }else{
		 
	//处理传递的ID有值
		 
		   //获取小类
		   $query = $this->db->where(array("modelid"=>$model['id'],"pid"=>$id))->order_by("listorder desc,id desc")->get('wl_category')->row_array();

		   if(!empty($query)){
		      //一级有小类
			   $childid=$query['id'];
			    $query = $this->db->where(array("modelid"=>$model['id'],"pid"=>$childid))->order_by("listorder desc,id desc")->get('wl_category')->row_array();
				if(!empty($query)){
				   //二级有小类
				    $childid=$query['id'];
				    $query = $this->db->where(array("modelid"=>$model['id'],"pid"=>$childid))->order_by("listorder desc,id desc")->get('wl_category')->row_array();                    
					if(!empty($query)){
					  //三级有小类
					  //单页面三级分类不予处理
					}else{
					//三级无小类
					 $catid=$childid;
					}
				   
				}else{
				   //二级无小类
				   $catid=$childid;
				}
				
			  
		   }else{
		    //一级无小类
			$catid=$id;
		   }
		 
		 }
		 
	return $catid;
		
 }
 
}


?>
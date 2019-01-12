<?php

/*前台公共模块
部分说明：
$this->get_category($) 读取的是所有栏目分类，返回多维数组, 前台用 foreach ($cat[1]['child'] as $v){循环调用；
调用深度无限
例如：调用新闻资讯10(顶级栏目)下的公司新闻8小类 方法：foreach ($cat[10]['child'][8]['child'] as $v){
*/
class Publicm extends CI_Model{
 public function __construct(){
		parent::__construct();
		$data['setting']=$this->get_all_setting();//读取自定义标签
		$this->all_category=$this->get_category();//读取所有栏目信息 get_category()正常调用 get_category2()自定义伪静态调用 
       	$this->load->vars('setting',$data['setting']);//直接这样调用$setting['title']
		$this->load->vars('cat',$this->all_category);
		
	}
//初始化模块信息
/*
*/
public function get_model_info(){
        $model = $this->uri->segment(1);//模块名称
		$control=$this->uri->segment(2);//控制器方法名
		$id=intval($this->uri->segment(3));//当前id
		 	//详情页 获取详情页信息，增加点击次数hits
		if($control=='show'){
		   $data['res'] = $this->db->where("id",$id)->get($model)->row_array();//获取单条详情页信息

		   if($data['res']['status']!=1 and @$_GET['st']!='shenhe'){
			  echo '文章审核中...';
			   exit;
			}
		    $data['res']['pages']='';
		    $content_pages = explode('<hr style="page-break-after:always;" class="ke-pagebreak" />',$data['res']['content']);
			//分页代码 详情页最多显示10页
			if(isset($content_pages[1])){
                $p_count=count($content_pages);//总页数
				if($p_count>10){$p_count=10;}
				//当前分页代码
				if(substr($this->uri->segment(3),-7,1)!='_'){
				   $p= 1;
				}else{
				   $p= substr($this->uri->segment(3),-6,1);
				}
			    $cur_page = min(max(1,intval($p)),$p_count);
			    $data['res']['content']=$content_pages[$cur_page-1];
				$pages='';
				if($p==1){
				     $pages.='<a class="pg_first" href="'.base_url().$model.'/'.$control.'/'.$id.'.html">上一页</a>';
				}else
				{
				   $nn=$p-1;
				   $pages.='<a class="pg_first" href="'.base_url().$model.'/'.$control.'/'.$id.'_'.$nn.'.html">上一页</a>';
				}
				for ($t=1; $t<=$p_count; $t++) {
				   $pg_class='pg_link';
				   if($p==$t){$pg_class='pg_curr';}
                   $pages.='<a class="'.$pg_class.'" href="'.base_url().$model.'/'.$control.'/'.$id.'_'.$t.'.html">'.$t.'</a>';
                } 
				if($p==$p_count){
				     $pages.='<a class="pg_next" href="'.base_url().$model.'/'.$control.'/'.$id.'.html">下一页</a>';
				}else
				{
				   $nn=$p+1;
				   $pages.='<a class="pg_next" href="'.base_url().$model.'/'.$control.'/'.$id.'_'.$nn.'.html">下一页</a>';
				}
				 $data['res']['pages']=$pages;
			}
		   
           $this->db->where('id',$id)->set('hits', 'hits+1', FALSE)->update($model);//浏览量加一 
		 }
	    return $data;	
}
//初始化当前栏目信息,适用于标准模型栏目，例如，新闻，产品等
/* 任意页面，返回当前栏目详情，和顶级栏目详情
*/
public function get_category_info(){
        $model = $this->uri->segment(1);//模块名称
		$control=$this->uri->segment(2);//控制器方法名
		$id=intval($this->uri->segment(3));//当前id
		$data=array();
		if(!empty($model)){
		    //列表页
		    if($control=='' || $control=='lists' ){
			    if(!empty($id)){
				    //获取当前栏目
				    $data=$this->get_one_category($id);
				 if(empty($data)){ //当前栏目ID不存在，返回404错误信息
				        return false;
					 }
					//获取顶级栏目
					$q_catid=explode(',',$data['path']);//将栏目路径转为数组;
					if(empty($q_catid[1])){$d_catid=$id;}else{$d_catid=$q_catid[1];}
					$data['top']=$this->get_one_category($d_catid);
					//获取父栏目
					if($data['pid']!=0){
					    $data['parent']=$this->get_one_category($data['pid']);
					}else{
					  $data['parent']=$data['top'];
					}

				}else{
				
				  //获取当前栏目
				    $data= $this->db
			          ->select("c.*,m.name,m.tablename")
		              ->from('wl_category'." as c")
			          ->join("wl_model as m","c.modelid = m.id","left")
				      ->where("m.tablename='{$model}' and c.pid=0",'',false)
		              ->order_by("c.listorder desc,c.id desc")
				      ->get()->row_array();
					  
					 //获取顶级栏目和父栏目
					  $data['top']=$data['parent']=$data; 
				}
			}
			
			//详情页
			if($control=='show'){
			    //获取当前栏目
			     $catid=$this->db->select('catid')->where("id",$id)->get($model)->row_array();//获取栏目id
				 if(empty($catid)){ //当前ID不存在，返回404错误信息
				        return false;
					 }
				 $data=$this->get_one_category($catid['catid']);
				// echo $data['pid'];
				 //exit;
				 //获取顶级栏目
					$q_catid=explode(',',$data['path']);//将栏目路径转为数组;
					if(empty($q_catid[1])){$d_catid=$catid['catid'];}else{$d_catid=$q_catid[1];}
					 $data['top']=$this->get_one_category($d_catid);
					 
					 //获取父栏目
					if($data['pid']!=0){
					    $data['parent']=$this->get_one_category($data['pid']);
					}else{
					  $data['parent']=$data['top'];
					}
			}
		 }
	    return $data;	
}

//初始化当前栏目信息,适用于标准模型栏目，例如，新闻，产品等
/* 任意页面，返回当前栏目详情，和顶级栏目详情
用在栏目伪静态页面
*/
public function get_category_info2($mo='',$con='',$id=''){
	    
		$model=empty($mo)?$this->uri->segment(1):$mo;//模块名称
		$control=empty($con)?$this->uri->segment(2):$con;//控制器方法名
		$id=empty($id)?intval($this->uri->segment(3)):$id;//当前id
		  
/*        $model = $this->uri->segment(1);//模块名称
		$control=$this->uri->segment(2);//控制器方法名
		$id=intval($this->uri->segment(3));//当前id*/
		$data=array();
		
		
		if(!empty($model)){
		    //列表页
		    if($control=='' || $control=='lists' ){
			    if(!empty($id)){
				    //获取当前栏目
				    $data=$this->get_one_category($id);
				 if(empty($data)){ //当前栏目ID不存在，返回404错误信息
				        return false;
					 }
					//获取顶级栏目
					$q_catid=explode(',',$data['path']);//将栏目路径转为数组;
					if(empty($q_catid[1])){$d_catid=$id;}else{$d_catid=$q_catid[1];}
					$data['top']=$this->get_one_category($d_catid);
					
					//获取父栏目
					if($data['pid']!=0){
					    $data['parent']=$this->get_one_category($data['pid']);
					}else{
					  $data['parent']=$data['top'];
					}

				}else{
				
				  //获取当前栏目
				    $data= $this->db
			          ->select("c.*,m.name,m.tablename")
		              ->from('wl_category'." as c")
			          ->join("wl_model as m","c.modelid = m.id","left")
				      ->where("m.tablename='{$model}' and c.pid=0",'',false)
		              ->order_by("c.listorder desc,c.id desc")
				      ->get()->row_array();
					  
					 //获取顶级栏目和父栏目
					  $data['top']=$data['parent']=$data; 
				}
			}
			
			//详情页
			if($control=='show'){
			    //获取当前栏目
			     $catid=$this->db->select('catid')->where("id",$id)->get($model)->row_array();//获取栏目id
				 if(empty($catid)){ //当前ID不存在，返回404错误信息
				        return false;
					 }
				 
				 $data=$this->get_one_category($catid['catid']);
				// echo $data['pid'];
				 //exit;
				 //获取顶级栏目
					$q_catid=explode(',',$data['path']);//将栏目路径转为数组;
					if(empty($q_catid[1])){$d_catid=$catid['catid'];}else{$d_catid=$q_catid[1];}
					 $data['top']=$this->get_one_category($d_catid);
					 
					 //获取父栏目
					if($data['pid']!=0){
					    $data['parent']=$this->get_one_category($data['pid']);
					}else{
					  $data['parent']=$data['top'];
					}
				 
			}

			
		 }
	    return $data;	
}
/**********
action  :获取指定栏目路径
给出栏目id，调用该栏目所在的所有栏目id路径
例如 新闻资讯-大类(1),行业新闻-小类(2),公司新闻-大类(3)
新闻资讯路径为1,2,3
行业资讯路径为2
*********/
 public function ar_catid($catid='1',$a=''){
         static $result;
		 $result=$a;
	      $data = $this->db
		        ->select("id")
			    ->where("pid",$catid)
				->order_by("listorder desc,id desc")
		        ->get('wl_category')->result_array();

				  foreach($data as $val){ //回调，继续查找小类
				     $result=$result.','.$val['id'];
					 $this->ar_catid($val['id'],$result);	
				  }
	 return $catid.$result;
 
 }
/**********
  action  :递归调用小类
  要配合get_category使用
*********/
	public function getChild($pid, $data) {
		 $result = array(); 
		 foreach($data as $val){
			if($val['pid']==$pid){
			    $id=$val['id'];
				$val['child']=$this->getChild($id, $data);
				 //赋值栏目URL
						 if($val['tablename']=='page'){//单页面
						       $val['url']='article/'.$val['id'].'.html';
						 }elseif($val['tablename']=='url'){//外部链接
						  $val['url']=$val['url'];
						 }else{
						    $val['url']=$val['tablename'].'/lists/'.$val['id'].'/';
						 }
				$result[$id]=$val;
			}
		}
		 return $result;
	}

	//返回所有栏目信息
    public function get_category($conditions='')
    {
        $result = array();
		
		if($conditions){
			$this->db->where($conditions,"",false);
		}
		
	  $data = $this->db
	                  ->select("c.*,m.name,m.tablename")
		              ->from('wl_category'." as c")
					  ->where('ismenu','1')
			          ->join("wl_model as m","c.modelid = m.id","left")
		              ->order_by("c.listorder desc,c.id desc")
				      ->get()->result_array();
			  
				  foreach($data as $val){
				      if($val['pid']==0){
					     $id=$val['id'];
						 $val['child']=$this->getchild($id,$data);
						 //赋值栏目URL
						 if($val['tablename']=='page'){//单页面
						       $val['url']='article/'.$val['id'].'.html';
						 }elseif($val['tablename']=='url'){//外部链接
						  $val['url']=$val['url'];
						 }else{
						     $val['url']=$val['tablename'].'/';
						 }
					
						 $result[$id]=$val;
					  }
				  }
        return $result;
    }

/**********
  action  :递归调用小类
  要配合get_category使用
  伪静态调用
*********/
	public function getChild2($pid, $data) {
		 $result = array(); 	 
		 
		 foreach($data as $val){
			if($val['pid']==$pid){
			    $id=$val['id'];
				$val['child']=$this->getChild($id, $data);
				 //赋值栏目URL
						 if($val['tablename']=='page'){//单页面
						       $val['url']=$val['catdir'].'.html';
						 }elseif($val['tablename']=='url'){//外部链接
						  $val['url']=$val['url'];
						 }else{
						    $val['url']=$val['catdir'].'/';
						 }
				$result[$id]=$val;
			}
		}
		 return $result;
	}
//返回所有栏目信息
    public function get_category2($conditions='')
    {
        $result = array();
		
		if($conditions){
			$this->db->where($conditions,"",false);
		}
		
	  $data = $this->db
	                  ->select("c.*,m.name,m.tablename")
		              ->from('wl_category'." as c")
					  ->where('ismenu','1')
			          ->join("wl_model as m","c.modelid = m.id","left")
		              ->order_by("c.listorder desc,c.id desc")
				      ->get()->result_array();
//伪静态处理	  
				  foreach($data as $val){
				      if($val['pid']==0){
					     $id=$val['id'];
						 $val['child']=$this->getchild2($id,$data);
						 //赋值栏目URL
						 if($val['tablename']=='page'){//单页面
						       $val['url']=$val['catdir'].'.html';
						 }elseif($val['tablename']=='url'){//外部链接
						  $val['url']=$val['url'];
						 }else{
						     $val['url']=$val['catdir'].'/';
						 }
					
						 $result[$id]=$val;
					  }
				  }
        return $result;
    }	

	
/*返回所有自定义标签值
返回结果为二维数组
*/
    public function get_all_setting(){
	       $query = $this->db
		          ->order_by("listorder desc,id desc")
		          ->get("wl_setting")
				  ->result_array();	
			foreach($query as $v){
			       $data[$v['key']]=$v['value'];
			}	  	 
          return $data;
    }	
/*
返回指定栏目详情
$id:栏目id
*/
  public function get_one_category($id=''){
			 $query = $this->db
			          ->select("c.*,m.name,m.tablename")
		              ->from('wl_category'." as c")
			          ->join("wl_model as m","c.modelid = m.id","left")
				      ->where("c.id={$id}",'',false)
		              ->order_by("c.listorder desc,c.id desc")
				      ->get()->row_array();
				return $query;
  }
  
//获取任意模型信息
 public function get_model($conditions=''){
      if($conditions){
			$this->db->where($conditions,"",false);
		}
      $query = $this->db->get("wl_model")->row_array();
	   return $query; 
 }
//获取广告列表
//$id 广告模块id  $limit 获取的广告数量
  public function get_poster($id='',$limit=20){
     if($id){
	   $this->db->where("p.type={$id}","",false);
	 }
     $query = $this->db
		         ->select("p.*,t.name as typename")
              	 ->from("wl_poster as p")
				 ->join("wl_type as t","t.id = p.type","left")
		         ->order_by("p.listorder desc,p.id desc")
				 ->where("p.status=1 and t.model='poster'","",false)
				 ->limit($limit,0)
		         ->get()
				 ->result_array();
		return $query;
  } 
//获取友情链接列表
//$id 友情链接分类id  
  public function get_links($id=''){
     if($id){
	   $this->db->where("p.type={$id}","",false);
	 }
     $query = $this->db
		         ->select("p.*,t.name as typename")
              	 ->from("wl_links as p")
				 ->join("wl_type as t","t.id = p.type","left")
		         ->order_by("p.listorder desc,p.id desc")
				 ->where("p.status=1 and t.model='links'","",false)
		         ->get()
				 ->result_array();
		return $query;
  } 
 //获取推荐位内容
//$id 推荐位ID，$limit 数量，$model 模型表
//catid='' 栏目分类，为空则表示当前模型所有分类
  public function get_position($id=1,$limit=5,$catid=''){
      //获取推荐位所在数据表
	  $res=$this->db->select('tablename')->from("wl_position as p")
	       ->join("wl_model as m","p.modelid = m.id","left")
		   ->where('p.id',$id)->get()->row_array();
	 $model=$res['tablename'];
    //读取推荐位列表
	 if($catid){
	   $this->db->where('catid',$catid);
	 }
    $this->db->where('status',1);
    $query = $this->db
			  ->like('position', "[".$id."]")
			  ->limit($limit,0)
			  ->order_by("listorder desc,id desc")
			  ->get($model)
			  ->result_array();
		return $query;
  } 
 //获取热门搜索词
//$id 推荐位ID，$limit 数量，$model 模型表
  public function get_search($limit=10){
    $query = $this->db
			 ->limit($limit,0)
			 ->order_by("hits desc,id desc")
			 ->get('wl_search')
			  ->result_array();
		return $query;
  }  
 
/*获取全站任意文章内容
  $id 文章id；model 为数据库表名称(不含前缀)
  $back 为返回字段，默认返回全部字段
  注意：单页面id，为栏目ID，不是数据库自增ID
 */
  public function get_article($id='',$back='',$model="page"){
		if($model=='page'){
		    $query = $this->db->where("catid",$id)->get($model)->row_array();
		}else{
		    $query = $this->db->where("id",$id)->get($model)->row_array();
		}
		if($back){
		  return $query[$back];
		}else{
		  return $query;
		}
  }
  
/*获取任意模型文章列表
  $limit 调用数量
  $model 模块名称，例如新闻就是news
  $catid  栏目id 为空，则调用所在模型的所有文章列表
  $order 排序方式 默认listorder desc,id desc
 */
 public function get_list($limit='5',$model='news',$catid='',$order='listorder desc,id desc'){
        if($catid){
		    $catid=$this->ar_catid($catid); //获取栏目下所有子类ID
			 $this->db->where("catid in({$catid})",'',false);
		}
		$query = $this->db
				->where('status',1)
		         ->order_by($order)
				 ->limit($limit)
		         ->get($model)
				 ->result_array();
		return $query;
	}

/*获取文章上一页，下一页内容
  $id ID号
  $model 模块名称，例如新闻就是news
  返回值：$data;
 */
 public function get_next_page($id='',$model='news',$catid=''){
        $pre_where="id < {$id} and status=1 ";
		$next_where="id > {$id} and status=1 ";
		if(!empty($catid)){
		    $pre_where="id < {$id} and status=1 and catid={$catid}";
	    	$next_where="id > {$id} and status=1 and catid={$catid}";
		}
		$pre = $this->db->select("id,title")->where($pre_where,"",false)->order_by("id","desc")->limit(1)->get($model)->row_array();
		$next =  $this->db->select("id,title")->where($next_where,"",false)->order_by("id","asc")->limit(1)->get($model)->row_array();
		if($pre){
		    $data['pre_title']=$pre['title'];
		    $data['pre_url']=$model.'/show/'.$pre['id'].'.html';
		}else{
		   $data['pre_title']='没有了';
		   $data['pre_url']='javascript:void(0)';
		}
        if($next){
		    $data['next_title']=$next['title'];
		    $data['next_url']=$model.'/show/'.$next['id'].'.html';
		}else{
		   $data['next_title']='没有了';
		   $data['next_url']='javascript:void(0)';
		}
		return $data;
	}
/*******************************************/
/***以下内容是根据具体网站进行的扩展内容***/
/*******************************************/

/*网站启用了自定义伪静态，在模型详情页的时候，要用到这个方法*/
		public function routes_show($id='',$model=""){
			   
				//详情页 获取详情页信息，增加点击次数hits
				   $data['res'] = $this->db->where("id",$id)->get($model)->row_array();//获取单条详情页信息
		
					
					if(empty($data['res'])){ return false;}   
				   if($data['res']['status']!=1 and @$_GET['st']!='shenhe'){
					   echo '文章审核中...<br>';
					   exit;
					}
				   $this->db->where('id',$id)->set('hits', 'hits+1', FALSE)->update($model);//浏览量加一 
					
				  return $data;
		}
		
}		
?>
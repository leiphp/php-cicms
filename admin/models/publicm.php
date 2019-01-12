<?php
class Publicm extends CI_Model{
 public function __construct(){
		parent::__construct();
	}

	
//获取任意模型信息
 public function get_model($conditions=''){
      if($conditions){
			$this->db->where($conditions,"",false);
		}
      $query = $this->db->order_by("id desc")->get("wl_model")->result_array();
	   return $query; 
 }
 
 //获取任意栏目信息
 public function get_cat_one($conditions=''){
      if($conditions){
			$this->db->where($conditions,"",false);
		}
      $query = $this->db->get("wl_category")->result_array();
	   return $query; 
 }
 

 
/*获取指定模块分类列表
$model 模块名称
 */ 
 public function get_type($model,$rows='',$page=''){
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		$query = $this->db
		         ->where('model',$model)
				 ->order_by("listorder desc,id desc")
				 ->get("wl_type")
				 ->result_array();
		return $query;
	}


 
/*获取指定模块推荐位列表
$modelid 模块ID
 */ 
 public function get_position($modelid){
        if(!empty($modelid)){
			 $this->db->where('modelid',$modelid);
		}
		$query = $this->db
				 ->get("wl_position")
				 ->result_array();
		return $query;
}
	
	
	
 //获取指定分类的数据量
 //$id  wl_type id字段 $model  模块名称
 public function get_type_count($id='',$model=''){
        $count= $this->db->where("type",$id)->from($model)->count_all_results();
	   return $count; 
 }	
 	
 //获取单条分类信息
 //$id  wl_type id字段
 public function get_type_one($id=''){
	   $query = $this->db->where("id",$id)->get('wl_type')->row_array();
	   return $query; 
 }	
	
 
 /*添加模块分类
$model 模块名称，名称应该和指定模块数据库名称一致
$data 更新的数组
 */ 
 public function add_type($data=array(),$model=''){
	  if($model==''){return false; exit;}
       $data['model']=$model;
	   $this->db->insert('wl_type', $data);
 }
 
  /*修改模块分类
$model 模块名称，名称应该和指定模块数据库名称一致
$data 更新的数组
 */ 
 public function edit_type($data=array()){
	   $id=$data['id'];
	   unset($data['id']);
      $this->db->where(array('id' => $id))->update('wl_type', $data);
 }
 
   /*删除模块分类
$model 模块名称，名称应该和指定模块数据库名称一致
$data 更新的数组
 */ 
 public function del_type($id){
	    $this->db->where(array('id' => $id))->delete('wl_type');
		return $this->db->affected_rows();
 }
 
 
/**********
action  :获取指定栏目路径
给出栏目id，调用该栏目所在的所有栏目id路径
例如 新闻资讯(1),行业新闻(2),公司大类(3)
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
*********/
	public function getChild($pid, $data) {
		 $result = array(); 
		 foreach($data as $val){
			if($val['pid']==$pid){
				$val['child']=$this->getChild($val['id'], $data);
				$result[]=$val;
			}
		}
		 return $result;
	}
	
	
	 /**
     * 根据参数返回分类数据
     * $type=1 : 返回所有分类或者指定模型数据，返回：一维数组。一般应用在下拉列表选项
     *       2 : 递归获取所有分类。子类放入child中
     * 
     * @param $catid 栏目ID
     * @param $modelid 模型ID
     * @param string $fields
     * @param bool $json
     * @return mixed
     */
    public function get_category($type=1,$modelid="",$catid="")
    {
        $id  = (int)$catid;
        $type = (int)$type;
        $result = array();
        switch($type)
        {
            // 返回所有分类或者指定模型数据，返回：一维数组。一般应用在下拉列表选项
            case 1:
               if(!empty($modelid)){
			        $this->db->where('modelid',$modelid);
                  }
         	    $result = $this->db
					  ->select("c.*,m.name,m.tablename")
					 ->from("wl_category as c")
					 ->join("wl_model as m","c.modelid = m.id","left")
					  ->order_by("concat( c.path , c.id ),c.listorder desc,c.id desc")
					 ->get()->result_array();
                break;
			
                
            //递归获取所有分类。子类放入child中
            case 2:
			  if(!empty($catid)){
			        $this->db->where("c.id={$catid}",'',false);
                  }
				   if(!empty($modelid)){
			        $this->db->where('modelid',$modelid);
                  }
				  
			     $data = $this->db
		        ->select("c.*,m.name,m.tablename")
		         ->from("wl_category as c")
				 ->join("wl_model as m","c.modelid = m.id","left")
				  ->order_by("c.listorder desc,c.id desc")
				 ->get()->result_array();
				 
				  foreach($data as $val){
					  if($val['pid']==0){
						 $val['child']=$this->getchild($val['id'],$data);
						 $result[]=$val;
					  }
				  }
                break;
        }

        return $result;
    }

//返回对应栏目下所有文章数目
    public function get_category_info_count($id){
	      //获取栏目对应的数据库表
		  $modelid=$this->get_cat_one('id='.$id);
		  $modelid=$modelid[0]['modelid'];
	      $model_from=$this->get_model('id='.$modelid);
	      $model_from='wl_'.$model_from[0]['tablename'];

		  //获取栏目下所有子类ID
		  $catid=$this->ar_catid($id);

		  $count= $this->db->from($model_from)
		                 ->where("catid in({$catid})",'',false)
						 ->count_all_results();
		  return $count;				 
    }	
	
/*返回所有自定义标签值
返回结果为二维数组
直接全站这样调用 $data['setting']['title']
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
将文本内容里面的图片下载到本地，并且替换原有图片src
$content:文本内容
$max_img,图片最大宽度，当图片超过最大宽度的时候，自动裁剪
*/	
   public function get_content_down_img($content,$max_img='700'){
                $path="./../";//路径地址，后台./../， 前台./
               $reg = '/((http|https):\/\/)+(\w+\.)+(\w+)[\w\/\.\-]*(jpg|gif|png|bmp|jpeg)/';
               $img_array = array();
                 preg_match_all($reg, $content, $img_array);
                 $img_array = array_unique($img_array[0]);//去除重复图片地址
				 if(!empty($img_array)){
				    //图片下载到本地，并且替换图片src地址
				    $w_path='../upload/images/'; //前后台地址不一致
				    $this->load->helper('file');
				    $year=date('Y');
				    $month=date('m');
				    $day=date('d');
				    $path_year = rtrim($w_path.$year,DIRECTORY_SEPARATOR);
				    $path_month = rtrim($w_path.$year.'/'.$month,DIRECTORY_SEPARATOR);
				    $path_day = rtrim($w_path.$year.'/'.$month.'/'.$day,DIRECTORY_SEPARATOR);
				    if(!file_exists($path_year)){ creat_file($path_year);}
				    if(!file_exists($path_month)){ creat_file($path_month);}
				    if(!file_exists($path_day)){ creat_file($path_day);}

				    foreach ($img_array as $value){
					   $fileext=strtolower(trim(substr(strrchr($value, '.'), 1, 10)));//获取文件扩展名
					   $news_file_name=date("Y").date("m").date('d').uniqid().'.'.$fileext;//新图片名称
					   $news_file_src="/upload/images/".$year.'/'.$month.'/'.$day.'/'.$news_file_name;//新图片，完整src地址
					   $img = file_get_contents($value); 
                       if(file_put_contents($path.$news_file_src,$img)){ 
					     
						  //裁切图片
		                  $news_data_img=getimagesize($path.$news_file_src);//前后台这里地址会不一致
                          $img_w=$news_data_img["0"];////获取图片的宽
					      if($img_w>$max_img){$this->img_resize("upload/images/".$year.'/'.$month.'/'.$day.'/'.$news_file_name,$max_img);}
						 
						 //添加水印
					      $this->add_image_water("upload/images/".$year.'/'.$month.'/'.$day.'/'.$news_file_name);
					      $content=str_replace($value,$news_file_src,$content);
					   }
					}
				 }
		  return $content;	
	}	  
 /*
 图片裁剪
 $file 文件路径。相对地址，例如$file="upload/123.jpg
 $width:裁剪宽度  ，$auto为true的时候，按照宽度等比裁切。否则就按照宽高等比裁切
 */  
  public function img_resize($file='',$width='',$auto=true,$height=''){
                   
                  $path="./../";//路径地址，后台./../， 前台./
				  if(empty($file) or empty($width)){return false;}
				   $this->load->library('image_lib');
                   $config['source_image'] =$path.$file;
				   $config['width']=$width;
				   if($auto==false){ 
				       $config['maintain_ratio']=false;
				       $config['height']=$height;
				   }else{
				      $config['maintain_ratio']=true; 
					  $config['height']=2000;
				   }
				   $this->image_lib->initialize($config);
				   $this->image_lib->resize();
				      
  }  	

/*
给图片添加水印
水印路径：upload\water\water.png
$file 文件路径。相对地址，例如$file="upload/123.jpg"
$$config,水印图片设置，$status 是否开启水印，$min_image_w添加水印最小宽度，$min_image_h添加水印最小高度
*/
   public function add_image_water($file='',$config=array("status"=>'',"min_image_w"=>'',"min_image_h"=>'')){
   

          $path="./../";//路径地址，后台./../， 前台./
         if(empty($config['status'])){
		   $config['status']=$GLOBALS["wl_water"]["action"];
		   $config['min_image_w']=$GLOBALS["wl_water"]["min_image_w"];
		   $config['min_image_h']=$GLOBALS["wl_water"]["min_image_h"]; 
		 }

         if($config['status']==false or empty($file)){return false;}
		 //获取原图信息
		 $data_img=getimagesize($path.$file);//前后台这里地址会不一致
         $img_w=$data_img["0"];////获取图片的宽
         $img_h=$data_img["1"];///获取图片的高
		 if($img_w<$config['min_image_w'] or $img_h<$config['min_image_h']){
		     return false;
		 }else{
		      $this->load->library('image_lib');
		     $config['source_image'] =$path.$file;//前后台这里地址会不一致
			 $config['wm_hor_alignment'] = 'right';
			 $config['wm_vrt_alignment'] = 'bottom';
			 $config['wm_type'] = 'overlay';

			 $config['wm_overlay_path'] = $path.'upload/water/water.png';//前后台这里地址会不一致
             $this->image_lib->initialize($config); 
             $this->image_lib->watermark();
			 
			 return true;
		 }
   }
   
 /*
 2016-10-11
 获取字段下拉列表值
 $modelid:模型ID，$field字段名称
 返回列表值数组。例如:$data[0]['id']=1;$data[0]['value']='湖北';$data[1]['id']=2;$data[1]['value']='广州';
  */  	
  
  public function get_field_options($modelid='',$field=''){
		  
		   $data = $this->db
						->where(array('modelid'=>$modelid,'field'=>$field))
						 ->order_by("listorder desc,id desc")
						  ->get('model_field')
						 ->result_array();
		   $list=string2array($data[0]['setting']);
		   $list_new=explode("\n",$list['options']);
		   $i=0;
		   foreach($list_new as $v){
				 $ar=explode("|",$v);
				 $res[$i]['id']    = $ar[0];
				 $res[$i]['value'] = $ar[1];
				$i++; 
		   }
	  return $res;
  }
  
   /*
 2017-06-08
 获取城市名称
 $id：城市名称codeid
 $lv： 默认为0 ，返回当前城市中文名，1：返回当前城市上级城市名，2：返回当前城市上级的上级城市名
 返回值：城市所在数组
  */  	
  
  public function get_city_name($id='',$lv=0){
           
		   if($lv==0){
		       $data = $this->db->where("id",$id)->get('wl_city')->row_array();
			   $res  = $data;
		   }
		   
		     if($lv==1){
		       $data  = $this->db->where("id",$id)->get('wl_city')->row_array();
			   $pid   = $data['parentid'];
			   $data2 = $this->db->where("id",$pid)->get('wl_city')->row_array();
			   $res   = $data2;
		   }
		   
		     if($lv==2){
		       $data   = $this->db->where("id",$id)->get('wl_city')->row_array();
			   $pid    = $data['parentid'];
			   $data2  = $this->db->where("id",$pid)->get('wl_city')->row_array();
			   $pid2   = $data['parentid'];
			   $data3  = $this->db->where("id",$pid2)->get('wl_city')->row_array();
			   $res    = $data3;
			  
		   }
          
	  return $res;
  }
  
     /*
 2017-06-08
 通过省份获取城市列表
 $id：省份codeid
 返回值：城市所在数组列表
  */  	
  
  public function get_city_list($id=''){
		  
	   $data = $this->db->where("parentid",$id)->get('wl_city')->result_array();
	   return $data;
  }
	
/*
 2017-10-25
 http://safe.aisoker.qq/
 只有通过了上述网址认证的IP，才能登陆后台，添加了数据库safe_ip
  */ 
  
  public function if_safe_ip($id=''){
  
	   $ip=$_SERVER["REMOTE_ADDR"].'';
	   $query = $this->db->where("ip",$ip)->get('safe_ip')->row_array();
	   if(empty($query) || @$query['gqtime']<time()){
		  echo "<div style='text-align:center'>您的IP为【".$_SERVER["REMOTE_ADDR"]."】请提交管理员认证后才能访问</div>";
		  exit;
	   }
  } 
  		
 
}


?>
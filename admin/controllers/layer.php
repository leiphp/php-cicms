<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*****
文件上传与编辑器控制器
******/
class Layer extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->library('upload');//加载文件上传模块
	    $this->load->helper('url');//url辅助函数
		$this->load->library('image_lib');//图片处理类
		
		$this->load->model("Publicm");//加载公共模型
		$this->p=$this->Publicm;//重命名公共模型
		
		
		$this->max_file_size=2*1024;//设置允许上传图片的大小
		$this->file_allowed_types='gif|jpg|png|jpeg|bmp';//允许上传格式
		
		//$this->max_file_width=400;//列表封面图片允许上传最大宽度，超出自动裁剪。这个功能只能放在会员投稿那里，因为管理员还要上传广告等大图
		
		
		
	}
	
 public  function index(){
         $this->load->view($this->router->class.'/index');
 }
//文件上传
//重要提醒：此方法一定要进行身份验证
  public  function upload_file(){
      
		 $w_path='../upload/images/';//定义上传更目录，后台admin是../upload/images/，前台会员是upload/images/
		 //创建上传目录
		 $this->load->helper('file');
		 $year=date('Y');
		 $month=date('m');
		 $day=date('d');
		 $path_year = rtrim($w_path.$year,DIRECTORY_SEPARATOR);
		 $path_month = rtrim($w_path.$year.'/'.$month,DIRECTORY_SEPARATOR);
		 $path_day = rtrim($w_path.$year.'/'.$month.'/'.$day,DIRECTORY_SEPARATOR);
		 if(!file_exists($path_year)){
		   creat_file($path_year);
		 }
		  if(!file_exists($path_month)){
		   creat_file($path_month);
		 }
		  if(!file_exists($path_day)){
		   creat_file($path_day);
		 }
    
         $config['upload_path'] =$path_day;
		 $config['file_name']=date("Y").date("m").date('d').uniqid();//重命名文件
		 $config['allowed_types'] =$this->file_allowed_types;
		 $config['max_size'] = $this->max_file_size;
		  $this->upload->initialize($config);
		 if($this->upload->do_upload()){
			  $data_img=$this->upload->data();//返回上传成功信息
			  $res="upload/images/".$year.'/'.$month.'/'.$day.'/'.$data_img['file_name'];
			   
			    //上传的图片超过宽度自动裁切  管理员后台不用此功能，因为广告等图片特别大
		        /* $news_data_img=getimagesize('./../'.$res);//前后台这里地址会不一致
                 $img_w=$news_data_img["0"];////获取图片的宽
			     if($img_w>$this->max_file_width){$this->p->img_resize($res,$this->max_file_width);}*/
			  
		 }else{
			 $res='false';
		 }  
		  $this->load->vars('res',$res);
		  $this->load->view($this->router->class.'/index');
 }
 
//图片裁剪
//重要提醒：此方法一定要进行身份验证
  public  function img_select(){
           $w_path='./../';//定义上传更目录，后台admin是./../，前台会员是./
          
          $data=$this->input->post();
          if(empty($data)){
		      $this->load->view($this->router->class.'/img_select');
		  }else{
			$config['source_image'] =$w_path.$data['y_image'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['x_axis'] =$data['x1']*$data['w_k'];
			$config['y_axis'] =$data['y1']*$data['w_k'];
			$config['width'] =$data['w']*$data['w_k'];
            $config['height'] = $data['h']*$data['w_k'];

			
			$this->image_lib->initialize($config); 
			if ( ! $this->image_lib->crop()){
				echo $this->image_lib->display_errors();
			}else{
			  //图片裁剪成功,返回新图片地址
			   $filename=basename($data['y_image']);//获取文件名称
			   $base_route=substr($data['y_image'],0,-strlen($filename));//文件存储路径
			   $fileext=strtolower(trim(substr(strrchr($filename, '.'), 1, 10)));//获取文件扩展名
			   $basename=substr($filename,0,-strlen('.'.$fileext));//文件名称，不含扩展名；
			   
			   $datas['res']=$base_route.$basename.'_thumb.'.$fileext;
			   
			   //裁剪完成后，按照裁剪比例，重新缩放图片 
			   if($data['w_k']!=1){
			      $this->image_lib->clear();
			      $config['source_image'] ='./'.$datas['res'];
			      $config['width'] =$data['w'];
                  $config['height'] = $data['h'];
			      $config['create_thumb'] = FALSE;
			      $this->image_lib->initialize($config);
			      $this->image_lib->resize();
			   }
			 
			  // echo $this->image_lib->display_errors();
			//   exit;
			   
			   $datas['imgid']=$data['imgid'];

			   $this->load->vars('data',$datas);
			   $this->load->view($this->router->class.'/img_select');
			}
		  
	   }
		
  }
  
  //重要提醒：此方法一定要进行身份验证
 /* php.ini 需要开启中文字符串截取功能，即php_mbstring.dll
  采集微信文章
  作者：wlsh
  日期：2017-03-28
 */ 
  public  function caiji_wx(){
  
       $this->load->view($this->router->class.'/caiji_wx');
  }
  
    public  function caiji_wx_a(){
          
		 /****采集微信中的标题和内容*****/
	 	  $res['url']=$_GET['url'];
		  $fh= file_get_contents($res['url']);
		   $reg1 = '/<title>(.*)<\/title>/i';
		   preg_match_all($reg1, $fh, $caiji_title1);
		   unset($caiji_title1[0]); 
		   $caiji_title=$caiji_title1[1]; 
		   //内容  采用字符串截取
           $caiji_content=$this->caiji_wx_jiequ($fh,'id="js_content">','</div>');
		/****采集微信中的标题和内容 end *****/   
		
		 $data['title']= $caiji_title[0];
		 $data['content']=$caiji_content;
         $data['content']=trim($data['content']);
		 
		 
		  /****图片批量下载和替换图片地址*****/
		   $path="./../";//路径地址，后台./../， 前台./
			  	$reg10 = '/<img.*? data\-src=[\"|\']?(.*?)[\"|\']?\s.*?>/i';
			  
                $img_array = array();
                 preg_match_all($reg10, $data['content'], $img_array1);
				 unset($img_array1[0]); 
				 $img_array=$img_array1[1]; 	 
			 
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
					  // $fileext=strtolower(trim(substr(strrchr($value, '.'), 1, 10)));//获取文件扩展名
					   $fileext='jpg';
					   $news_file_name=date("Y").date("m").date('d').uniqid().'.'.$fileext;//新图片名称
					   $news_file_src="/upload/images/".$year.'/'.$month.'/'.$day.'/'.$news_file_name;//新图片，完整src地址
					   $img = file_get_contents($value); 
                       if(file_put_contents($path.$news_file_src,$img)){ 

						 //裁切图片
						   $max_img=640;//图片最大宽度
		                  $news_data_img=getimagesize($path.$news_file_src);//前后台这里地址会不一致
                          $img_w=$news_data_img["0"];////获取图片的宽
					      if($img_w>$max_img){$this->p->img_resize("upload/images/".$year.'/'.$month.'/'.$day.'/'.$news_file_name,$max_img);}
						  
						
						 //添加水印
						  if($GLOBALS["wl_water"]["action"]==true){
					        $this->p->add_image_water("upload/images/".$year.'/'.$month.'/'.$day.'/'.$news_file_name);
						  }
						//  echo $value."<br>";
						  //替换图片为新地址
					      $data['content']=str_replace('data-src="'.$value,'src="'.$news_file_src,$data['content']);
					   }
					}
				 }
			//正则去掉一些不需要的标签	
			 $rege = '{img.+?(style=".+?")}i';
			 preg_match_all($rege, $data['content'] , $ms);
             $data['content']  = str_replace($ms[1], '', $data['content']);

        	 $rege = '{img.+?(data-ratio=".+?")}i';
			 preg_match_all($rege, $data['content'] , $ms);
             $data['content']  = str_replace($ms[1], '', $data['content']);
			 
			  $rege = '{img.+?(class=".+?")}i';
			 preg_match_all($rege, $data['content'] , $ms);
             $data['content']  = str_replace($ms[1], '', $data['content']);
		  /****图片批量下载和替换图片地址 end *****/

		 $this->load->vars('data',$data);
         $this->load->view($this->router->class.'/caiji_wx');
  }
  
      public  function caiji_wx_jiequ($content='',$sta='',$end=''){
			   $len_z=mb_strlen($content);
		       $wz_sta=mb_strpos($content,$sta);
			   $len_sta=mb_strlen($sta);
			   
			   $content1= mb_substr($content, $wz_sta+$len_sta, $len_z-$wz_sta-$len_sta);
			   $wz_end=mb_strpos($content1,$end);
			   $content2= mb_substr($content1, 0,$wz_end);

			   return $content2;
	  }

	
}
?>
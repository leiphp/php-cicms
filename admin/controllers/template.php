<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->helper('file');//加载文件辅助函数
        $this->style_info = include './config/template_config.php';//模板风格

	}
	
 public  function index(){
    $this->style_lists();
 }
 //风格模块列表
   public  function style_lists(){
          $data=array();
		  $this->load->vars('data',$data);
		  $this->load->view($this->router->class.'/style_lists');
    }

//文件列表
     public  function lists(){
	          $style = isset($_GET['style']) && trim($_GET['style']) ? trim($_GET['style']) : '';
	  	      if($style=='css'){
			       $dir="../skin/css/";
		      }elseif($style=='template'){
			       $dir="../application/views/";
			   }
	          $data['list']=get_filenames($dir,ture);//获取所有文件列表
		
			   
			  $data['style']=$style;
              $this->load->vars('data',$data);
			  $this->load->vars('file_name',$this->style_info);
		      $this->load->view($this->router->class.'/lists');
       
     }

//编辑文件	 
   public  function edit(){
            $data=$this->input->post();
            if(!empty($data)){//写入文件信息
				 $style = isset($data['info']['style']) && trim($data['info']['style']) ? trim($data['info']['style']) : '';
				 $file = isset($data['info']['file']) && trim($data['info']['file']) ? trim($data['info']['file']) : '';
				/* if($style=='css'){
			       $dir="../skin/css/".$file;
		         }elseif($style=='template'){
			       $dir="../application/views/".$file;
			     }*/
				 
				  $dir=$file;

				 if(write_file($dir, $data['info']['content'])){
				         $this->message('修改成功！',site_url($this->router->class.'/lists?style='.$style));
                 }else{

                       $this->message('修改失败 ！请检查文件权限'.$dir,site_url($this->router->class.'/edit?style='.$style.'&file='.$file));
                 }

			}else{
			     $style = isset($_GET['style']) && trim($_GET['style']) ? trim($_GET['style']) : '';
				 $file = isset($_GET['file']) && trim($_GET['file']) ? trim($_GET['file']) : '';
	  	       /* if($style=='css'){
			       $dir="../skin/css/".$file;
		         }elseif($style=='template'){
			       $dir="../application/views/".$file;
			     }*/
				  $dir=$file;
			    $data['file']=$file;
			    $data['style']=$style;
				$data['res']=read_file($dir);//获取文件内容
				
				$this->load->vars('data',$data);	
				$this->load->view($this->router->class.'/edit');
			}	
			
    }	
	
/*删除文件
该功能暂时不启用，很容易导致前台用户误删除模板文件，那就完蛋啦
前台调用地址：<a onclick="return ConfirmDel();"  href="<?=base_url();?>template/del/?style=<?=$data['style']?>&file=<?=$v?>">删除</a>
*/	   
   public  function del(){	
            $style = isset($_GET['style']) && trim($_GET['style']) ? trim($_GET['style']) : '';
		    $file = isset($_GET['file']) && trim($_GET['file']) ? trim($_GET['file']) : '';
	  	    if($style=='css'){
			       $dir="../skin/css/".$file;
		    }elseif($style=='template'){
			       $dir="../application/views/".$file;
			 }
			 $path = rtrim($dir,DIRECTORY_SEPARATOR);

		    if(unlink($path)){
				$this->message('删除成功',site_url($this->router->class.'/lists/?style='.$style));
			}else{
			   $this->message('删除失败 ！请检查文件权限'.$dir,site_url($this->router->class.'/lists/?style='.$style));
			}
    }
//新增文件	
 public  function add_file(){	
          $data=$this->input->post();
		   if(!empty($data)){//新增文件
				 $style = isset($data['info']['style']) && trim($data['info']['style']) ? trim($data['info']['style']) : '';
				 if($style=='css'){
			       $dir="../skin/css/";
		         }elseif($style=='template'){
			       $dir="../application/views/";
			     }
			
				$path=$dir.$data['info']['name']; 
				$path = rtrim($path,DIRECTORY_SEPARATOR);

				if(file_exists($path)){
					$this->message('添加失败 ！文件已存在',site_url($this->router->class.'/lists/?style='.$style));
					exit;
				  }
	
				 if(write_file($dir.$data['info']['name'], '')){
							 $this->message('添加成功！',site_url($this->router->class.'/lists/?style='.$style));
					}else{
	
						   $this->message('添加失败 ！请检查文件权限'.$dir,site_url($this->router->class.'/lists/?style='.$style));
				   }

		      
		   }else{
            $this->load->view($this->router->class.'/add_file');
			
			}
    }	
/*修改文件配置信息
 就是更新admin/config/template_config.php文件的内容
*/
  public function file_update_info(){
		$data=$this->input->post();
		$new_data= array_merge($this->style_info, $data['file_info']);
		$style=$data['info']['style'];
		if(write_file('./config/template_config.php', '<?php return '.var_export($new_data, true).';?>')){
				$this->message('更新成功！',site_url($this->router->class.'/lists/?style='.$style));
			}else{
				 $this->message('添加失败 ！请检查文件权限'.$dir,site_url($this->router->class.'/lists/?style='.$style));
		
		}
  }
//ajax检查文件是否存在		 
  public function ajax_check_file(){
  
           $file = isset($_GET['name']) && trim($_GET['name']) ? trim($_GET['name']) : exit(0);
		   $style = isset($_GET['style']) && trim($_GET['style']) ? trim($_GET['style']) : exit(0);
		   if($style=='css'){
			       $dir="../skin/css/".$file;
		    }elseif($style=='template'){
			       $dir="../application/views/".$file;
			 }
			 $path = rtrim($dir,DIRECTORY_SEPARATOR);
		   if(file_exists($path)){
              exit('1'); //存在文件
           }else{
              exit('0');
            }	
  }	
  
}
?>
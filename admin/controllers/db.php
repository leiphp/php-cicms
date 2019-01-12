<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 为了数据库安全，暂时不支持备份文件上传，因为自己上传，sql语句可以自己随便写，可以删除整个数据库其它用户的信息
除非安全措施做到位。例如隔离用户等，否则一律不许上传自己的sql备份文件
*/
class Db extends MY_Controller {

   public function __construct(){
		parent::__construct();
		$this->load->model("Publicm");//加载公共模型
		$this->p=$this->Publicm;//重命名公共模型
	    $this->load->dbutil();//数据库工具类
	 	$this->load->helper('file');//加载文件辅助函数
		$this->load->helper('download');//下载函数

	}
//实时数据库表列表	
 public  function index(){
	   $sql='SHOW TABLE STATUS FROM '.$GLOBALS["wl_db"]["database"];
	   $data = $this->db->query($sql)->result_array();;
	    $this->load->vars('data',$data);
	   $this->load->view($this->router->class.'/lists');
 }
 
 //优化表
 public function optimize_tbl(){
    $table_name=$this->uri->segment(3);	
	if ($this->dbutil->optimize_table($table_name)){
	   $this->message('数据库表'.$table_name.'优化成功！',site_url($this->router->class.'/index'));
	}else{
	    $this->message('数据库表'.$table_name.'优化失败，可能服务器不支持！',site_url($this->router->class.'/index'));
	}
	
 }
 
 //修复表
 public function repair_tb(){
        $table_name=$this->uri->segment(3);	
        if ($this->dbutil->repair_table($table_name)){
			  $this->message('数据库表'.$table_name.'修复成功！',site_url($this->router->class.'/index'));
	    } else{
				$this->message('数据库表'.$table_name.'修复失败，可能服务器不支持！',site_url($this->router->class.'/index'));
	   }
     }

//备份数据库表	 
 public  function backup(){
	 $file_name='Cicms_tables_'.date("Y").date("m").date("d").date("H").date("i").date("s").'.sql';
     $prefs = array(
                'tables'      => array(),  // 包含了需备份的表名的数组.
                'ignore'      => array(),           // 备份时需要被忽略的表
                'format'      => 'txt',             // gzip, zip, txt
                'filename'    => 'mybackup.sql',    // 文件名 - 如果选择了ZIP压缩,此项就是必需的
                'add_drop'    => TRUE,              // 是否要在备份文件中添加 DROP TABLE 语句
                'add_insert'  => TRUE,              // 是否要在备份文件中添加 INSERT 语句
                'newline'     => "@@ww@@"               // 备份文件中的换行符
              );
     $backup = $this->dbutil->backup($prefs);
     write_file( dirname(dirname(__FILE__)).'\\cache\\db\\'.$file_name, $backup);
	 
	 if(file_exists( dirname(dirname(__FILE__)).'\\cache\\db\\'.$file_name)){
        $this->message('文件'.$file_name.'备份成功！',site_url($this->router->class.'/restore'));
    }else{
	   $this->message('操作失败，请将根目录/admin/cache文件赋予写权限！',site_url($this->router->class.'/restore'));
    }
	 
	 
 }
   
/*备份数据库列表*/
  public  function restore(){
      
        $data['list']=get_dir_file_info( dirname(dirname(__FILE__)).'\\cache\\db\\');//获取所有文件列表
		$this->load->vars('data',$data);
	   $this->load->view($this->router->class.'/file_list');
  }
  
  /*删除备份文件*/
    public  function del(){
	    $file_name=$this->uri->segment(3);	
		if(del_file( dirname(dirname(__FILE__)).'\\cache\\db\\'.$file_name)){
		    $this->message('文件'.$file_name.'删除成功！',site_url($this->router->class.'/restore'));
		}else{
		     $this->message('操作失败，请将根目录/admin/cache文件赋予写权限！',site_url($this->router->class.'/restore'));
		
		}
	}
	  /*下载备份文件*/
	 public  function down(){
		      $file_name=$this->uri->segment(3);	
			  $data = read_file(dirname(dirname(__FILE__)).'\\cache\\db\\'.$file_name);
			  force_download($file_name, $data); 

		}
/*还原数据库*/		
 public function huany(){
        $file_name=$this->uri->segment(3);	
	    $data = read_file('./cache/db/'.$file_name);
		//将sql语句打散，逐个执行
		$sqls = explode("@@ww@@",$data);
		foreach($sqls as $sql){
			 if(str_replace(" ","",$sql)){
				 $this->db->query($sql);
			   }
		}
	   $this->message('文件'.$file_name.'恢复成功！',site_url($this->router->class.'/restore'));

  }
	
}
?>
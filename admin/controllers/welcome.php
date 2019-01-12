<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model("Publicm");//加载公共模型
		$this->p=$this->Publicm;//重命名公共模型
	}
	

	public function index(){ 

		$data['setting']=$this->p->get_all_setting();
		//读取所有模型字段，并且组成菜单
		$this->load->model("Sitemodelm");//加载模型
		$list=$this->Sitemodelm->lists('','','type=0');
		$menu=' ';
		$nn=3;
		foreach($list as $v){
		        $menu=$menu."'{$nn}':{Text:'{$v['name']}',Parent:'2',url:'".base_url()."index.php/{$v['tablename']}/'},";
			   $nn++;
		}
	
		$this->load->vars('menu',$menu);
	    $this->load->vars('data',$data);
		$this->load->view('index');
	}
	
 //后台主页面板信息 
    function info(){
	
		$data=array();
		//读取各个模型下的数据段
	    	$this->load->model("Sitemodelm");//加载模型
		    $data_tpye=$this->Sitemodelm->lists('','','type=0');
			$nn=0;
		    foreach($data_tpye as  $v){
			    $data_tpye[$nn]['count']= $this->db->from($v['tablename'])->count_all_results();
			    $nn++;
			}
		$data['list']=$data_tpye;
		  $data['count_ca']= $this->db->from('category')->count_all_results();


				
		$this->load->vars('data',$data);
		$this->load->view('showindex');
  }


	
}
?>
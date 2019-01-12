<?php
/*会员文章管理模块*/
class Memberm_publish extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="member";//当前操作的数据库表
		 $this->load->model("Publicm_admin");//加载公共模型,将后台admin里面的Publicm模型，放到前台model下，并重命名publicm_admin
		 $this->p=$this->Publicm_admin;//重命名公共模型
	}

  
  /*发布修改删除文章系列方法*/
  
  
 /*获取后台编辑表单,增加文章
$modelid 模型ID，默认为新闻模型
$data 编辑页面，文章详情
*/
 public function get_form_info($modelid=1,$data_res=array()){
 

      $model_field=$this->db->where(array("modelid"=>$modelid,'status'=>0,'isadd'=>1))->order_by("listorder desc,id desc")->get('model_field')->result_array();
	
	  foreach($model_field as $key=>$v){
	      $v['setting']=string2array($v['setting']);
		  
		  //如果是编辑页面，则将结果值传递给默认值
		  if(isset($data_res[$v['field']]))$v['setting']['defaultvalue']=$data_res[$v['field']];
		  $v['setting']['defaultvalue']=isset($v['setting']['defaultvalue'])?$v['setting']['defaultvalue']:'';
		  
		   switch ($v['formtype']) {
            case "text"://单行文本
			  $model_field[$key]['form']="<input type='text' name='info[{$v['field']}]' id='{$v['field']}' class='input-text' size='{$v['setting']['size']}' value='{$v['setting']['defaultvalue']}'>&nbsp; ".$v['tips'];
                break;
            case "textarea"://多行文本
                $model_field[$key]['form']="<textarea  name='info[{$v['field']}]' id='{$v['field']}'  style='width:{$v['setting']['width']}px;height:{$v['setting']['height']}px'>{$v['setting']['defaultvalue']}</textarea>&nbsp; ".$v['tips'];
              break;
            case "catid"://分类
			       $model_field[$key]['form']="<select name='info[{$v['field']}]' id='{$v['field']}'>";
			       $data['list']=$this->p->get_category(1,$modelid);//当前模型所有分类
				   $nn=0;
				   foreach ($data['list'] as $k){
	                  $m=substr_count($k['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
	                  $strpad=str_pad('',$m*13,'|&nbsp;&nbsp;');
					   $selected=(isset($data_res[$v['field']]) && $data_res[$v['field']]==$k['id'])?"selected='selected'":'';//判断是否为选中状态
					   if($nn==0) {$l_class="disabled='disabled'";}else{$l_class="";}
					   $model_field[$key]['form'].="<option value='{$k['id']}' {$l_class} {$selected}>{$strpad}{$k['catname']}</option>";
					  $nn++;
					  
					 } 
					$model_field[$key]['form'].="</select>&nbsp; ".$v['tips'];
              break;
			 case "image"://图片
			     $model_field[$key]['form']='';
				 //获取图片地址
				 if(isset($data_res[$v['field']])){
				    $up_img=$data_res[$v['field']];
				    if(substr($up_img,0,4)=='http' || substr($up_img,0,1)=='/'){
				        $up_img1=$up_img2=$data_res[$v['field']];
					  }elseif($up_img==''){
					     $up_img1=base_url().'admin/views/skin/images/upload-pic.png';
				         $up_img2='';
					  }else{
				        $up_img1=base_url().'../'.$up_img;
				        $up_img2=$up_img;
				      }
				
				 }else{
				   $up_img1=base_url().'admin/views/skin/images/upload-pic.png';
				   $up_img2='';
				 }
			 $model_field[$key]['form'].="<img src='{$up_img1}' id='{$v['field']}_img' style=' cursor:pointer' width='135' height='133' onclick=".'"'."file_upload('{$v['field']}');this.blur();".'"'."/>
		<input id='{$v['field']}' type='hidden' value='{$up_img2}' name='info[{$v['field']}]'>".' <input type="button"  value="裁剪图片" onclick="file_corp('."'{$v['field']}'".');this.blur();" />'.$v['tips'];

              break;
			case "position"://推荐位
			       $form_add="<select name='info[{$v['field']}]' id='{$v['field']}'><option value='0' selected='selected'>无</option>";
				   $form_edit="<select name='info[{$v['field']}]' id='{$v['field']}'><option value='0' >无</option>";
			       $model_field[$key]['form']=isset($data_res[$v['field']])?$form_edit:$form_edit;
			       $data['position']=$this->p->get_position($modelid);//当前模型所有推荐位
				   foreach ($data['position'] as $k){
				       $selected=(isset($data_res[$v['field']]) && $data_res[$v['field']]==$k['id'])?"selected='selected'":'';//判断是否为选中状态
					   $model_field[$key]['form'].="<option value='{$k['id']}' {$selected}>{$k['name']}</option>";
					  
					 } 
					$model_field[$key]['form'].="</select>&nbsp; ".$v['tips'];
              break;
			 case "editor"://编辑器
                $model_field[$key]['form']="<textarea id='editor_id_{$key}' name='info[{$v['field']}]'   style='width:{$v['setting']['width']}px;height:{$v['setting']['height']}px'>{$v['setting']['defaultvalue']}</textarea>".$v['tips']."<script>KindEditor.ready(function(K) {window.editor = K.create('##editor_id_{$key}',{
items:['justifyleft', 'justifycenter', 'justifyright', 'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript', 'superscript',  'quickformat',  '/', 'image','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold','italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'table', 'hr']
});});</script>";
              break;  
			  
			   case "status"://通过审核
			     /*有三种情况
				  1、新增信息页面，默认值为1，选中状态
				  2、修改页面，    值为1，选中状态
				  3、修改页面，  值为0，未选择状态
				 */ 
				 if(isset($data_res[$v['field']])){
				        if($data_res[$v['field']]==1){
						     $selected="checked='checked'";
					        $value=1;
						}else{
						    $selected="";
					        $value=0;
						}
				 }else{
				      $selected="checked='checked'";
					  $value=1;
				 }
                $model_field[$key]['form']=" <input name='info[{$v['field']}]' type='checkbox' id='{$v['field']}' value='1' {$selected} />&nbsp; ".$v['tips'];
              break;
			  
			    case "datetime"://时间
				 if(empty($v['setting']['defaultvalue'])){$v['setting']['defaultvalue']=time();}
                $model_field[$key]['form']="<input type='text' name='info[{$v['field']}]' id='{$v['field']}'  size='25' value='".date('Y-m-d H:i:s',$v['setting']['defaultvalue'])."' class='date'>&nbsp; ".$v['tips']." <script type='text/javascript'> Calendar.setup({ weekNumbers: true, inputField : '{$v['field']}', trigger    : '{$v['field']}', dateFormat: '%Y-%m-%d %H:%M:%S',showTime: true,minuteStep: 1, onSelect   : function() {this.hide();} }); </script> ".$v['tips'];
               break;
			   
			 
			    case "downfile"://文件下载
                $model_field[$key]['form']="<input type='file' name='{$v['field']}' id='{$v['field']}' value='' size='50' class='input-text'  style='border:none; background:none; height:25px;'/> {$v['setting']['defaultvalue']}";
               break; 
           }

		   
	  }
	
	  return $model_field;
    
 }
 
 //增加文章
  function add($data,$model=''){
            
           if(!isset($data['uptime']))$data['uptime']='';
		    if(!isset($data['des']))$data['des']='';
           $data['uptime']=strtotime($data['uptime'])?strtotime($data['uptime']):time();//注册时间
	      
		   //内容自动下载编辑器载图片
	   if($GLOBALS["wl_down"]["action"]==true){
	      $data['content']=$this->p->get_content_down_img($data['content'],$GLOBALS["wl_down"]["max_image_w"]); 
	   }

	  	//自动提取缩略图
		if($data['image'] == '' && isset($data['content']) && isset($data['auto_thumb'])){
			if(preg_match_all("/(src)=([\"|']?)([^ \"'>]+\.(gif|jpg|jpeg|bmp|png))\\2/i", $data['content'], $matches)){
				//将根目录图片替换成相对地址图片
				if(substr($matches[3][0],0,1)=='/'){
				   $data['image'] = substr($matches[3][0],1);
				}else{
				   $data['image'] =$matches[3][0];
				}
			}
		}
	 //自动提取摘要
		if($data['des'] == '' && isset($data['content']) && isset($data['add_introduce'])) {
			$content = stripslashes($data['content']);
			$data['des'] = str_cut(str_replace(array("'","\r\n","\t",'[page]','[/page]','&ldquo;','&rdquo;','&nbsp;'), '', strip_tags($content)),$data['introcude_length'],'');
		}
	//删除编辑器参数
	if(isset($data['auto_thumb'])){unset($data['auto_thumb']);}	
	if(isset($data['add_introduce'])){unset($data['add_introduce']);}	
	if(isset($data['introcude_length'])){unset($data['introcude_length']);}	
	
         $data['username']=$this->member_info['username'];//文章发布者用户名
        $this->db->insert($model, $data);
 }
 
 //会员文章修改
  function update($data,$model=''){
     $id=$data['id'];
	 unset($data['id']);
	
	  //审核状态 会员修改文章后，需要重新审核
	   $data['status']=0;

	 //格式化时间
	 if(isset($data['uptime'])){
	   $data['uptime']=strtotime($data['uptime'])?strtotime($data['uptime']):time();
	 }
	 
	  //内容自动下载编辑器载图片
	   if($GLOBALS["wl_down"]["action"]==true){
	      $data['content']=$this->p->get_content_down_img($data['content'],$GLOBALS["wl_down"]["max_image_w"]); 
	   }
	   
	   	//自动提取缩略图
		if($data['image'] == '' && isset($data['content']) && isset($data['auto_thumb'])){
			if(preg_match_all("/(src)=([\"|']?)([^ \"'>]+\.(gif|jpg|jpeg|bmp|png))\\2/i", $data['content'], $matches)){
				//将根目录图片替换成相对地址图片
				if(substr($matches[3][0],0,1)=='/'){
				   $data['image'] = substr($matches[3][0],1);
				}else{
				   $data['image'] =$matches[3][0];
				}
			}
		}
		
		//自动提取摘要
		if($data['des'] == '' && isset($data['content']) && isset($data['add_introduce'])) {
			$content = stripslashes($data['content']);
			$data['des'] = str_cut(str_replace(array("'","\r\n","\t",'[page]','[/page]','&ldquo;','&rdquo;','&nbsp;'), '', strip_tags($content)),$data['introcude_length'],'');
		}
	//删除编辑器参数
	if(isset($data['auto_thumb'])){unset($data['auto_thumb']);}	
	if(isset($data['add_introduce'])){unset($data['add_introduce']);}	
	if(isset($data['introcude_length'])){unset($data['introcude_length']);}	
	
      $this->db->where(array('username' => $this->member_info['username']));
      $this->db->where(array('id' => $id))->update($model, $data);
 }
 
 
 
 
//会员发布信息列表
 public function lists($rows='',$page='',$conditions='',$count='',$model=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}
	    $this->db->where('username',$this->member_info['username']);
	  if($count==''){
		   	$query = $this->db
		       ->order_by("listorder desc,id desc")
		       ->get($model)
			   ->result_array();
		}else{
		  $query= $this->db->from($model)->count_all_results();
		
		}
		return $query;
	}

	
//通过id 和模型表获取单条信息	
 public function get_one($id='',$model=''){
       $query = $this->db->where("id",$id)->get($model)->row_array();
	   return $query; 
 }
 
 /*发布修改删除文章系列方法 end*/
 
 //会员报名列表
 public function lists_baoming($rows='',$page='',$conditions='',$count=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}
	    $this->db->where('userid',$this->member_info['id']);
	  if($count==''){
		   	$query = $this->db
		       ->order_by("id desc")
		       ->get('member_baoming')
			   ->result_array();
		}else{
		  $query= $this->db->from('member_baoming')->count_all_results();
		
		}
		return $query;
	}
	
	 //会员收藏列表
 public function lists_shoucang($rows='',$page='',$conditions='',$count=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}
	    $this->db->where('userid',$this->member_info['id']);
	  if($count==''){
		   	$query = $this->db
		       ->order_by("id desc")
		       ->get('member_shoucang')
			   ->result_array();
		}else{
		  $query= $this->db->from('member_shoucang')->count_all_results();
		
		}
		return $query;
	}
}


?>
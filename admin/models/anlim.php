<?php
class Anlim extends CI_Model{
 public function __construct(){
		parent::__construct();
		 $this->form="anli";//当前操作的数据库表
		 $this->load->model("Publicm");//加载公共模型
		 $this->p=$this->Publicm;//重命名公共模型
		 $this->load->library('upload');//加载文件上传模块
	}

 //增加文章
  function add($data){
       $this->load->model("Sitemodelm");//加载模型设置类
     $data['uptime']=strtotime($data['uptime'])?strtotime($data['uptime']):time();//注册时间
	 //处理推荐位
	if(isset($data['position'])){
	    $arr=$data['position'];
		$data['position']='';
		 foreach($arr as $k){
			 $data['position'].='['.$k.']';
		 }
	 }else{
	   $data['position']=0;
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
	//处理多个图片字段
	$get_mol=$res=$this->Sitemodelm->get_model_one(array('tablename'=>$this->form));
	$get_res_field=$this->Sitemodelm->field_list($get_mol['id']);
	foreach( $get_res_field as $vv){  //循环所有字段
	     if($vv['formtype']=='duo_img'){
			   if(isset($data[$vv['field']])){	
	               foreach($data[$vv['field']] as $k => $v){
	                    if(empty($v)){unset($data[$vv['field']][$k]);}
	                }
	           $data[$vv['field']]=array2string($data[$vv['field']]);
			 }
		 }
	} 
	//删除编辑器参数
	if(isset($data['auto_thumb'])){unset($data['auto_thumb']);}	
	if(isset($data['add_introduce'])){unset($data['add_introduce']);}	
	if(isset($data['introcude_length'])){unset($data['introcude_length']);}	
	
	
      $data['username']=$this->user_info['name'];//文章发布者用户名
	   //文件上传
		    if(!empty($_FILES)){
			      $file=$_FILES;
			      foreach( $file as $key=>$v){  //循环所有文件
				       if(!empty($v['tmp_name'])){
					      //获取上传字段信息(这里主要读取允许上传的字段类型)
					       $res=$this->Sitemodelm->get_model_one(array('tablename'=>$this->form));
						   $res_field=$this->Sitemodelm->get_field_one(array('modelid'=>$res['id'],'field'=>$key));
						   $res_field=string2array($res_field['setting']);
						   $allow_type=isset($res_field['upload_allowext'])?$res_field['upload_allowext']:'';

				           $data[$key]=$this->upload_file($key,$allow_type);
						} 
			       } 
		     }

     $this->db->insert($this->form, $data);
 }
 
 /*上传文件
 $key:提交表单里名为userfile的文件域
 $type:上传类型
 返回上传成功后文件路径
 */
 public function upload_file($key='',$type='gif|jpg|png|jpeg'){
         if(empty($type))$type='gif|jpg|png|jpeg';
         $config['upload_path'] = '../upload/'.$this->form.'/';
		 $config['file_name']=date("Y").date("m").uniqid();//重命名文件
		 $config['allowed_types'] = $type;
		 $this->upload->initialize($config);
		 if($this->upload->do_upload($key)){
			  $data_img=$this->upload->data();//返回上传成功信息
			  $res=$this->form.'/'.$data_img['file_name'];
		 }else{
			 $res='';
		 }  
			return $res;									
 }  
  //更新文章
  function update($data){
     $this->load->model("Sitemodelm");//加载模型设置类
     $id=$data['id'];
	 unset($data['id']);
	  //审核状态
    if(empty($data['status'])){
	   $data['status']=0;
	 }
	 //处理推荐位
	if(isset($data['position'])){
	    $arr=$data['position'];
		$data['position']='';
		 foreach($arr as $k){
			 $data['position'].='['.$k.']';
		 }
	 }else{
	   $data['position']=0;
	 }
	 //格式化时间
	 $data['uptime']=strtotime($data['uptime'])?strtotime($data['uptime']):time();
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
 //处理多个图片字段
	$get_mol=$res=$this->Sitemodelm->get_model_one(array('tablename'=>$this->form));
	$get_res_field=$this->Sitemodelm->field_list($get_mol['id']);
	foreach( $get_res_field as $vv){  //循环所有字段
	     if($vv['formtype']=='duo_img'){
			   if(isset($data[$vv['field']])){	
	               foreach($data[$vv['field']] as $k => $v){
	                    if(empty($v)){unset($data[$vv['field']][$k]);}
	                }
	           $data[$vv['field']]=array2string($data[$vv['field']]);
			 }else{
			  $data[$vv['field']]='';
			 }
		 }
	}

	//删除编辑器参数
	if(isset($data['auto_thumb'])){unset($data['auto_thumb']);}	
	if(isset($data['add_introduce'])){unset($data['add_introduce']);}	
	if(isset($data['introcude_length'])){unset($data['introcude_length']);}	
		 //文件上传
		    if(!empty($_FILES)){
			     $file=$_FILES;
			      foreach( $file as $key=>$v){  //循环所有文件
				       if(!empty($v['tmp_name'])){
				           //获取上传字段信息(这里主要读取允许上传的字段类型)
					       $res=$this->Sitemodelm->get_model_one(array('tablename'=>$this->form));
						   $res_field=$this->Sitemodelm->get_field_one(array('modelid'=>$res['id'],'field'=>$key));
						   $res_field=string2array($res_field['setting']);
						   $allow_type=isset($res_field['upload_allowext'])?$res_field['upload_allowext']:'';

				           $data[$key]=$this->upload_file($key,$allow_type);
						} 
			       } 
		     }
		
     $this->db->where(array('id' => $id))->update($this->form, $data);
 }
 
  //删除文章
  function del($id){ 
          $nn=0;
          foreach( $id as $v){
                $this->db->where(array('id' => $v))->delete($this->form);
				$nn++;
          } 
		  return $nn; 
 }
  //排序
  function order($id){
          foreach( $id AS $k=>$v){
              $this->db->where(array('id' => $k))->update($this->form,array('listorder'=>$v));
          }  
 }  
 
 //列表
 public function lists($rows='',$page='',$conditions='',$count=''){
 
        if(!empty($page) && !empty($rows)){
			$this->db->limit($rows,($page-1)*$rows);
		}
		if($conditions){
			$this->db->where($conditions,"",false);
		}
	if($count==''){
		   	$query = $this->db
		       ->order_by("listorder desc,id desc")
		       ->get($this->form)
			   ->result_array();
		
		}else{
		 $query= $this->db->from($this->form)->count_all_results();
		
		}
		return $query;
	}

//通过id获取单条信息	
 public function get_one($id){
       $query = $this->db->where("id",$id)->get($this->form)->row_array();
	   return $query; 
 }
 
   //批量审核
 public function status_ok($id,$status){ 
          $nn=0;
		  $data=array('status'=>$status);
          foreach( $id as $v){
                $this->db->where(array('id' => $v))->update($this->form,$data);
				$nn++;
          } 
		  return $nn; 
 }
 
/*获取后台编辑表单,增加文章
$modelid 模型ID，默认为新闻模型
$data 编辑页面，文章详情
*/
 public function get_form_info($modelid=1,$data_res=array()){
 

      $model_field=$this->db->where(array("modelid"=>$modelid,'status'=>0))->order_by("listorder desc,id desc")->get('model_field')->result_array();
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
			       $data['list']=$this->p->get_category(1,$this->modelid);//当前模型所有分类
				   foreach ($data['list'] as $k){
	                  $m=substr_count($k['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
	                  $strpad=str_pad('',$m*13,'|&nbsp;&nbsp;');
					   $selected=(isset($data_res[$v['field']]) && $data_res[$v['field']]==$k['id'])?"selected='selected'":'';//判断是否为选中状态
					   $model_field[$key]['form'].="<option value='{$k['id']}' {$selected}>{$strpad}{$k['catname']}</option>";
					  
					  
					 } 
					$model_field[$key]['form'].="</select>&nbsp; ".$v['tips'];
              break;
			  
			   case "bid"://品牌列表
			       $model_field[$key]['form']="<select name='info[{$v['field']}]' id='{$v['field']}'>";
				   $this->load->model("Brandm");
		            $data['list']=$this->Brandm->brand_all();
				   foreach ($data['list'] as $k){
					   $selected=(isset($data_res[$v['field']]) && $data_res[$v['field']]==$k['id'])?"selected='selected'":'';//判断是否为选中状态
					   $model_field[$key]['form'].="<option value='{$k['id']}' {$selected}>{$k['name']}</option>";
					  
					  
					 } 
					$model_field[$key]['form'].="</select>&nbsp; ".$v['tips'];
              break;
			  
			    case "options"://单选下拉框
			       $model_field[$key]['form']="<select name='info[{$v['field']}]' id='{$v['field']}'>";
		            $data['list']=$this->p->get_field_options($modelid,$v['field']);//获取下拉列表
				   foreach ($data['list'] as $k){
					   $selected=(isset($data_res[$v['field']]) && $data_res[$v['field']]==$k['id'])?"selected='selected'":'';//判断是否为选中状态
					   $model_field[$key]['form'].="<option value='{$k['id']}' {$selected}>{$k['value']}</option>";
					 } 
					$model_field[$key]['form'].="</select>&nbsp; ".$v['tips'];
              break;
			   case "citycode"://二级联动菜单
				//初始化城市
				$data_city=array(array(110000,'北京市'),
				array(120000,'天津市'),array(130000,'河北省'),
				array(140000,'山西省'),array(150000,'内蒙古'),
				array(210000,'辽宁省'),array(220000,'吉林省'),
				array(230000,'黑龙江'),array(310000,'上海市'),
				array(320000,'江苏省'),array(330000,'浙江省'),
				array(340000,'安徽省'),array(350000,'福建省'),
				array(360000,'江西省'),array(370000,'山东省'),
				array(410000,'河南省'),array(420000,'湖北省'),
				array(430000,'湖南省'),array(440000,'广东省'),
				array(450000,'广  西'),array(460000,'海南省'),
				array(500000,'重庆市'),array(510000,'四川省'),
				array(520000,'贵州省'),array(530000,'云南省'),
				array(540000,'西  藏'),array(610000,'陕西省'),
				array(620000,'甘肃省'),array(630000,'青海省'),
				array(640000,'宁  夏'),array(650000,'新  疆'),
				array(710000,'台湾省'),array(810000,'香  港'),
				array(820000,'澳  门'),array(110000,'北京市')
				);
			    $model_field[$key]['form']="
					<script>
						function select_province( elm){
							var parent_select=  jQuery(elm).parents('form').find('#province_code');
							var id = parent_select.val();
							url='/qt_ajax/city?id='+id;
						  $.ajax({
							 url: url,
							 type: 'get',
							 success: function(data){
								$('#city_code').html(data);
							 }
						 });
						}
					</script>
					<select class='sl' name='province_code' id='province_code' onchange='select_province(this)'>
					 ";
			if(!empty($data_res[$v['field']])){
			    $p=$this->p->get_city_name($data_res[$v['field']],1);
				$c=$this->p->get_city_name($data_res[$v['field']]);
				foreach($data_city as $k){
				   $selected= ($p['id']==$k[0])?"selected='selected'":'';//判断是否为选中状态
				   $model_field[$key]['form'].="<option value='".$k[0]."' {$selected} >".$k[1]."</option>";
			    }
				$city_list=$this->p->get_city_list($p['id']);
				$model_field[$key]['form'].=" </select><select class='sl' name='info[{$v['field']}]' id='city_code'>";
				foreach($city_list as $k){
				   $selected= ($c['id']==$k['id'])?"selected='selected'":'';//判断是否为选中状态
				   $model_field[$key]['form'].="<option value='".$k['id']."' {$selected} >".$k['name']."</option>";
			    }
				
			    $model_field[$key]['form'].="</select>";
				
			}else{
			     $model_field[$key]['form'].="<option value='' selected>请选择</option>";
			     foreach($data_city as $k){
				   $model_field[$key]['form'].="<option value='".$k[0]."' >".$k[1]."</option>";
				 }
				 $model_field[$key]['form'].=" </select><select class='sl' name='info[{$v['field']}]' id='city_code'><option value='' selected>请选择</option></select>";
				 
				 $model_field[$key]['form'].="
			
<script type='text/javascript'>
//这里可以通过IP自动获取地区信息，不要这个功能可以取消
$.ajax({
    url: '/qt_ajax/city?ip=1',
    type: 'get',
	 dataType: 'json', 
    success: function(data){
	
		if(data.p!=''){
			$('#province_code').val(data.p);
			$('#province_code').change();
			if(data.c!=''){
				$('#city_code').val(data.c);
			}
		}    
    }
});
</script>
			 ";	
			}
			 	  
              break;
			  
			    case "number"://数字
			        $model_field[$key]['form']="<input type='text' name='info[{$v['field']}]' id='{$v['field']}' class='input-text' size='20' value='{$v['setting']['defaultvalue']}'>&nbsp; ".$v['tips'];
                break;  
			 case "image"://图片
			     $model_field[$key]['form']='';
				 //获取图片地址
				 if(isset($data_res[$v['field']])){
				    $up_img=$data_res[$v['field']];
				    if(substr($up_img,0,4)=='http' || substr($up_img,0,1)=='/'){
				        $up_img1=$up_img2=$data_res[$v['field']];
					  }elseif($up_img==''){
					     $up_img1=base_url().'views/skin/images/upload-pic.png';
				         $up_img2='';
					  }else{
				        $up_img1=base_url().'../'.$up_img;
				        $up_img2=$up_img;
				      }
				
				 }else{
				   $up_img1=base_url().'views/skin/images/upload-pic.png';
				   $up_img2='';
				 }
				 $model_field[$key]['form'].="<img src='{$up_img1}' id='{$v['field']}_img' style=' cursor:pointer' width='135' height='133' onclick=".'"'."file_upload('{$v['field']}');this.blur();".'"'."/>
		<input id='{$v['field']}' type='hidden' value='{$up_img2}' name='info[{$v['field']}]'>".' <input type="button" class="caij" value="裁剪图片" onclick="file_corp('."'{$v['field']}'".');this.blur();" />'.$v['tips'];
              break;
			    case "duo_img"://多图展示
			     $model_field[$key]['form']="<div class='duo_img'><div class='ad_img'><a class='bnt_duo bnt_duo2' onclick=".'"'."ad_img('".$v['field']."'".")".'"'." href='javascript:void(0)'><img src='".base_url()."views/skin/images/increase.png' /> 增加图片</a></div> <div class='insertimg' id='insertimg_".$v['field']."'>";
				 //获取图片地址
				 if(isset($data_res[$v['field']])){
				 
				 $duo_img=string2array($data_res[$v['field']]);
				   $x=1;
				   $str='';
				  foreach($duo_img as $vv){
				        $up_img=$vv;
						if(substr($up_img,0,4)=='http' || substr($up_img,0,1)=='/'){
							$up_img1=$up_img2=$data_res[$v['field']];
						  }elseif($up_img==''){
							 $up_img1=base_url().'views/skin/images/upload-pic.png';
							 $up_img2='';
						  }else{
							$up_img1=base_url().'../'.$up_img;
							$up_img2=$up_img;
						  }
						  
						   $str.="<div class='list' id='list_".$v['field'].$x."'><div class='img'>
            <img src='".$up_img1."' id='".$v['field'].$x."_img' style='cursor:pointer' onclick=".'"'."file_upload('".$v['field'].$x."');this.blur();".'"'." >
		    <input id='".$v['field'].$x."' value='".$up_img2."' name='info[".$v['field']."][".$x."]' type='hidden'> 
             </div>
        <a class='bnt_duo bnt_duo1' onclick=".'"'."file_corp('".$v['field'].$x."');this.blur()".'"'." href='javascript:void(0)'><img src='".base_url()."views/skin/images/textfield_key.png'/> 裁剪</a>
        <a class='bnt_duo' onclick=".'"'."del_img('"."#list_".$v['field'].$x."')".'"'." href='javascript:void(0)'><img src='".base_url()."views/skin/images/cross.png' /> 删除</a>
        </div>";
				  $x++;
				  
				  }
				 }else{
				   $up_img1=base_url().'views/skin/images/upload-pic.png';
				   $up_img2='';
				   $str="";
				   for ($x=1; $x<=$v['setting']['upload_st'];$x++) {
                        $str.="<div class='list' id='list_".$v['field'].$x."'>
          <div class='img'>
            <img src='".base_url()."views/skin/images/upload-pic.png' id='".$v['field'].$x."_img' style='cursor:pointer' onclick=".'"'."file_upload('".$v['field'].$x."');this.blur();".'"'." >
		    <input id='".$v['field'].$x."' value='' name='info[".$v['field']."][".$x."]' type='hidden'> 
          </div>
        <a class='bnt_duo bnt_duo1' onclick=".'"'."file_corp('".$v['field'].$x."');this.blur()".'"'." href='javascript:void(0)'><img src='".base_url()."views/skin/images/textfield_key.png'/> 裁剪</a>
        <a class='bnt_duo' onclick=".'"'."del_img('"."#list_".$v['field'].$x."')".'"'." href='javascript:void(0)'><img src='".base_url()."views/skin/images/cross.png' /> 删除</a>
        </div>";
                     } 
				 }
				 $model_field[$key]['form'].=$str;
				 $model_field[$key]['form'].='</div></div>';
              break;
			case "position"://推荐位
			        $model_field[$key]['form']='';
					$data['position']=$this->p->get_position($this->modelid);//当前模型所有推荐位
					
					$data_p='';
					if(isset($data_res[$v['field']])){
					   $data_res[$v['field']]=str_replace("][",",",$data_res[$v['field']]);
					   $data_res[$v['field']]=str_replace("]",",",$data_res[$v['field']]);
					   $data_res[$v['field']]=str_replace("[",",",$data_res[$v['field']]);
					   $data_p = explode(',',$data_res[$v['field']]);
					 }
					foreach ($data['position'] as $k){
						 $selected=(isset($data_res[$v['field']]) && in_array($k['id'],$data_p))?"checked='checked'":'';//判断是否为选中状态
						 $model_field[$key]['form'].="<input name='info[{$v['field']}][]'  value='{$k['id']}' type='checkbox' {$selected}> {$k['name']}";
										  
					} 
					$model_field[$key]['form'].="</select>&nbsp; ".$v['tips'];
              break;
			 case "editor"://编辑器
                $model_field[$key]['form']="<textarea id='editor_id_{$key}' name='info[{$v['field']}]'   style='width:{$v['setting']['width']}px;height:{$v['setting']['height']}px'>{$v['setting']['defaultvalue']}</textarea>&nbsp; ".$v['tips']."<script>KindEditor.ready(function(K) {window.editor = K.create('#editor_id_{$key}',{  
        cssPath: '/admin/views/skin/kindeditor/plugins/code/prettify.css',filterMode : false});});</script>";
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
 
 
}


?>
<?php $this->load->view('head');?>

<script type="text/javascript">
<!--

$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform"});
	
	$("#name").formValidator({onshow:"请输入别名",onfocus:"字段别名不能为空",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"请输入别名"});
});

//-->
</script>

<form name="myform" id="myform" action="<?=base_url();?>index.php/sitemodel/edit_field" method="post">
<div class="pad-10">

	<div class="cate_top" style="    padding: 0;margin: 10px 0;border-bottom: none;">
		<a href="<?=base_url();?>index.php/sitemodel/add_field/<?=$data['res']['modelid']?>" class="on add_to"><i></i>添加字段</a>
		<span>|</span><a href="<?=base_url();?>index.php/sitemodel/field_list/<?=$data['res']['modelid']?>" class="on text"><i></i>管理模型字段</a>
	</div>
  
	<ul class="tabBut cu-li"> 
	  <li id="tab_setting_1" class="on">新增模型</li>
	</ul>
	<div class="col-tab">

	<div class="contentList pad-10">
		<table width="100%" class="table_form">

		<tr> 
			  <th><strong>字段类型</strong><br /></th>
			  <td>
		<select name="info[formtype]" id="formtype"  disabled=""><option value='' >请选择字段类型</option>
		<option value="text" <?php if($data['res']['formtype']=='text') echo 'selected';?>>单行文本</option>
		<option value="textarea"  <?php if($data['res']['formtype']=='textarea') echo 'selected';?>>多行文本</option>
		<option value="editor"  <?php if($data['res']['formtype']=='editor') echo 'selected';?>>编辑器</option>
		<option value="image" <?php if($data['res']['formtype']=='image') echo 'selected';?>>图片</option>
		<option value="number" <?php if($data['res']['formtype']=='number') echo 'selected';?>>数字</option>
		<option value="datetime" <?php if($data['res']['formtype']=='datetime') echo 'selected';?>>日期和时间</option>
		<option value="downfile" <?php if($data['res']['formtype']=='downfile') echo 'selected';?>>文件下载</option></select>	  </td>
			</tr>

			<tr> 
			  <th width="25%"><font color="red">*</font> <strong>字段名</strong><br />
			  只能由英文字母、数字和下划线组成，并且仅能字母开头，不以下划线结尾	  </th>
			  <td><input type="text" name="info[field]" id="field" size="20" class="input-text" value="<?=$data['res']['field']?>" disabled=""></td>
			</tr>
			<tr> 
			  <th><font color="red">*</font> <strong>字段别名</strong><br />例如：文章标题</th>
			  <td><input type="text" name="info[name]" id="name" size="30" class="input-text" value="<?=$data['res']['name']?>"></td>
			</tr>
			<tr> 
			  <th><strong>字段提示</strong><br />显示在字段别名下方作为表单输入提示</th>
			  <td><textarea name="info[tips]" rows="2" cols="20" id="tips" style="height:40px; width:80%" ><?=$data['res']['tips']?></textarea></td>
			</tr>
			<tr> 
			  <th><strong>相关参数</strong><br />设置表单相关属性</th>
			  <td><div id="setting">
				<?php $this->load->view('sitemodel/fields/'.$data['res']['formtype'].'/field_edit_form');?>
			  </div></td>
			</tr>


			<tr> 
			  <th><strong>字符长度取值范围</strong><br />系统将在表单提交时检测数据长度范围是否符合要求，如果不想限制长度请留空</th>
			  <td>最小值：<input type="text" name="info[minlength]" id="field_minlength" value="<?=$data['res']['minlength']?>" size="5" class="input-text"> 最大值：<input type="text" name="info[maxlength]" id="field_maxlength" value="<?=$data['res']['maxlength']?>" size="5" class="input-text"></td>
			</tr>
			<tr> 
			  <th><strong>数据校验正则</strong><br />系统将通过此正则校验表单提交的数据合法性，如果不想校验数据请留空</th>
			  <td><input type="text" name="info[pattern]" id="pattern" value="<?=$data['res']['pattern']?>" size="40" class="input-text"> 
		<select name="pattern_select" onchange="javascript:$('#pattern').val(this.value)">
		<option value="">常用正则</option>
		<option value="/^[0-9.-]+$/">数字</option>
		<option value="/^[0-9-]+$/">整数</option>
		<option value="/^[a-z]+$/i">字母</option>
		<option value="/^[0-9a-z]+$/i">数字+字母</option>
		<option value="/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/">E-mail</option>
		<option value="/^[0-9]{5,20}$/">QQ</option>
		<option value="/^http:\/\//">超级链接</option>
		<option value="/^(1)[0-9]{10}$/">手机号码</option>
		<option value="/^[0-9-]{6,13}$/">电话号码</option>
		<option value="/^[0-9]{6}$/">邮政编码</option>
		</select>
			  </td>
			</tr>
			<tr> 
			  <th><strong>数据校验未通过的提示信息</strong></th>
			  <td><input type="text" name="info[errortips]"  size="50" class="input-text"  value="<?=$data['res']['errortips']?>" ></td>
			</tr>
		<tr> 
			  <th><strong>在前台投稿中显示</strong></th>
			  <td><input name="info[isadd]" value="1" <?php if($data['res']['isadd']==1){ echo "checked";} ?> type="radio"> 是 <input name="info[isadd]" value="0" type="radio" <?php if($data['res']['isadd']==0){ echo "checked";} ?>> 否</td>
			</tr>




		</table>

	</div>

	<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
		<input name="info[modelid]" type="hidden" value="<?=$data['res']['modelid']?>">
		<input name="info[id]" type="hidden" value="<?=$data['res']['id']?>">
		<a class="button submit"><i></i><input name="dosubmit" id="dosubmit" type="submit" value="提交"></a>
	</div>
</div>
</div>
</form>

<script type="text/javascript">
	<!--
	function field_setting(fieldtype) {
		
			var data="sdfsdfsdf";
			
		
           $.get("<?=base_url();?>index.php/sitemodel/get_field_type?fieldtype="+fieldtype,function(data,status){
              $('#setting').html(data);
         });

	
		
	}

//-->
</script>


</body>
</html>






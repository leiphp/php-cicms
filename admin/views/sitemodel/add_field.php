<?php $this->load->view('head');?>

<script type="text/javascript">
<!--

$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform"});
	$("#field").formValidator({onshow:"请输入字段名",onfocus:"字段名长度必须为1-20位"}).regexValidator({regexp:"^[a-zA-Z]{1}([a-zA-Z0-9]|[_]){0,19}$",onerror:"字段名称不正确"}).inputValidator({min:1,max:20,onerror:"字段名长度必须为1-20位"}).ajaxValidator({
     dataType : "html",
		async : true,
		url : "<?=base_url();?>index.php/sitemodel/ajax_check_field?modelid=<?=$data['res']['id']?>",
       type : "get",
		success : function(data){
            if( data == "1" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "字段名已存在,请重新输入",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	$("#formtype").formValidator({onshow:"请选择字段类型",onfocus:"请选择字段类型",oncorrect:"输入正确",defaultvalue:""}).inputValidator({min:1,onerror: "请选择字段类型"});
	$("#name").formValidator({onshow:"请输入别名",onfocus:"字段别名不能为空",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"请输入别名"});
});

//-->
</script>

<form name="myform" id="myform" action="<?=base_url();?>index.php/sitemodel/add_field" method="post">
	<div class="pad-10">

		<div class="cate_top">
			<a href="<?=base_url();?>index.php/sitemodel/add_field/<?=$data['res']['id']?>" class="on add_to"><i></i>添加字段</a>
			<span>|</span><a href="<?=base_url();?>index.php/sitemodel/field_list/<?=$data['res']['id']?>" class="on text"><i></i>管理模型字段</a>
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
				<select name="info[formtype]" id="formtype" onchange="javascript:field_setting(this.value);"><option value='' selected>请选择字段类型</option><option value="text" >单行文本</option><option value="textarea" >多行文本</option><option value="editor" >编辑器</option><option value="image" >图片</option><option value="duo_img" >多图展示</option><option value="number" >数字</option><option value="datetime" >日期和时间</option><option value="downfile" >文件下载</option>
				<option value="options" >单选下拉框</option><option value="citycode" >二级联动地区</option>
				</select>	  </td>
					</tr>

					<tr> 
					  <th width="25%"><font color="red">*</font> <strong>字段名</strong><br />
					  只能由英文字母、数字和下划线组成，并且仅能字母开头，不以下划线结尾	  </th>
					  <td><input type="text" name="info[field]" id="field" size="20" class="input-text"></td>
					</tr>
					<tr> 
					  <th><font color="red">*</font> <strong>字段别名</strong><br />例如：文章标题</th>
					  <td><input type="text" name="info[name]" id="name" size="30" class="input-text"></td>
					</tr>
					<tr> 
					  <th><strong>字段提示</strong><br />显示在字段别名下方作为表单输入提示</th>
					  <td><textarea name="info[tips]" rows="2" cols="20" id="tips" style="height:40px; width:80%"></textarea></td>
					</tr>
					<tr> 
					  <th><strong>相关参数</strong><br />设置表单相关属性</th>
					  <td><div id="setting"></div></td>
					</tr>


					<tr> 
					  <th><strong>字符长度取值范围</strong><br />系统将在表单提交时检测数据长度范围是否符合要求，如果不想限制长度请留空</th>
					  <td>最小值：<input type="text" name="info[minlength]" id="field_minlength" value="0" size="5" class="input-text"> 最大值：<input type="text" name="info[maxlength]" id="field_maxlength" value="" size="5" class="input-text"></td>
					</tr>
					<tr> 
					  <th><strong>数据校验正则</strong><br />系统将通过此正则校验表单提交的数据合法性，如果不想校验数据请留空</th>
					  <td><input type="text" name="info[pattern]" id="pattern" value="" size="40" class="input-text"> 
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
					  <td><input type="text" name="info[errortips]" value="" size="50" class="input-text"></td>
					</tr>
				<tr> 
					  <th><strong>在前台投稿中显示</strong></th>
					  <td><input name="info[isadd]" value="1"  type="radio" checked> 是 <input name="info[isadd]" value="0" type="radio"> 否</td>
					</tr>





				</table>

			</div>

			<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
			<input name="info[modelid]" type="hidden" value="<?=$data['res']['id']?>">
			<input name="info[tablename]" type="hidden" value="<?=$data['res']['tablename']?>">
				<a class="button submit"><i></i><input name="dosubmit" id="dosubmit" type="submit" value="提交"></a>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	<!--
	function field_setting(fieldtype) {
		
           $.get("<?=base_url();?>index.php/sitemodel/get_field_type?fieldtype="+fieldtype,function(data,status){
              $('#setting').html(data);
         });

	
		
	}

//-->
</script>


</body>
</html>






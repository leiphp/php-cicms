<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	
		$("#title").formValidator({onshow:"请输入字段名称",onfocus:"请输入字段名称"}).inputValidator({min:4,max:30,onerror:"4-30个字符之间"});
		
	$("#size").formValidator({onshow:"请输入大小(纯数字)",onfocus:"请输入大小(纯数字)"}).inputValidator({min:1,max:3,onerror:"999以下的数字"}).regexValidator({regexp:"num1",datatype:"enum",onerror:"格式不正确(只能为数字)"});

	
});
//-->
</script>


<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/setting/edit" method="post">
	<ul class="tabBut cu-li"> 
	  <li id="tab_setting_1" class="on">新增自定义标签</li>
	</ul>
	<div class="pad-10" style="padding-top: 0;">
		<div class="col-tab">

			<div class="contentList pad-10">
				<table width="100%" class="table_form">
				<tr>
						<th>字段名称：</th>
						<td><input type="text" name="info[title]" id="title" class="input-text" size="20" value="<?=$data['res']['title']?>" /> </td>
					  </tr>
				   <tr>

					  <tr>
						<th width="100">标签key：</th>
						<td>
					   <input type="text" name="info[key]" id="key" class="input-text" size="20" value="<?=$data['res']['key']?>" disabled=""/>
						</td>
					  </tr>
					<tr>
						<th>字段类型：</th>
						<td>
						  <select name="info[style]" id="style" >
						  <option value="text"<?php if($data['res']['style']=='text'){ echo 'selected';}?>>文本字段</option>
						  <option value="textarea" <?php if($data['res']['style']=='textarea'){ echo 'selected';}?>>多行文本</option>
						  <option value="image" <?php if($data['res']['style']=='image'){ echo 'selected';}?>>图片类型</option>
					 </select>
						</td>
					  </tr>
						<tr>
						<th>编辑区域尺寸：</th>
						<td><input type="text" name="info[size]" id="size" class="input-text" size="10" value="<?=$data['res']['size']?>" /> </td>
					  </tr>
				   <tr>

					  <tr>
						<th>提醒文字：</th>
						<td>
						  <input type="text" name="info[beizhu]" id="beizhu" class="input-text" size="40" value="<?=$data['res']['beizhu']?>" /></td>
					 </tr>

				</table>

			</div>

			<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
				<input name="info[id]" type="hidden" value="<?=$data['res']['id']?>">
				<a class="button submit"><i></i><input name="dosubmit" id="dosubmit" type="submit" value="提交"></a>
			</div>
		</div>
	</div>
</form>
</body>
</html>






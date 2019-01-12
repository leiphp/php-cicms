<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入广告位名称",onfocus:"请输入广告位名称"}).inputValidator({min:1,max:50,onerror:"请输入广告位名称"});
	

	 
	
});
//-->
</script>
<div class="pad-10">
<div class="cate_top">
     <a href="<?=base_url();?>index.php/poster/list_type" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/poster/add_type" class="on add_to"><i></i>添加广告位</a> 
  </div>
<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/poster/edit_type" method="post" enctype="multipart/form-data" />
	<ul class="tabBut cu-li"> 
	<li id="tab_setting_1" class="on" onclick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">添加内容</li>
</ul>
	<div class="pad-10" style="padding-top: 0;">
		<div class="col-tab">
		<div id="div_setting_1" class="contentList pad-10">

		<table width="100%" class="table_form ">  
		  <tr>
			<th>广告位名称：</th>
			<td>
		   <input type="text" name="info[name]" id="name" class="input-text" size="40" value="<?=$data['res']['name']?>">
			</td>
		  </tr>


			<tr>
			<th>描述：</th>
			<td><textarea name="info[des]" id="des" style="width:50%;height:46px;"><?=$data['res']['des']?></textarea>
			</td>
		  </tr>
	</table>

	</div>

		<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
		  <input name="info[id]" type="hidden" value="<?=$data['res']['id']?>">
		  <a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
		</div>
	</div>
	</div>
</form>
</body>
</html>






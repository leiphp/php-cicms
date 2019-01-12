<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});

$("#title").formValidator({onshow:"请输入标题",onfocus:"标题长度应该为2-50个字符"}).inputValidator({min:2,max:50,onerror:"标题长度应该为6-50个字符"});

	
});
//-->
</script>
<div class="pad-10">
<div class="cate_top">
     <a href="<?=base_url();?>index.php/search/" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/search/add" class="on add_to"><i></i>添加关键词</a> 
	  <span>|</span> <a href="javascript:void(0)"  onclick="javascript:$('#searchid').css('display','block');" class="on search"><i></i>搜索</a>
  </div>
  
  <div id="searchid" <?php if(!isset($data['search'])){?>style="display:none;"<?php }?>>
<form name="searchform" action="<?=base_url();?>index.php/search/sear" method="get" >

<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td>
		<div class="explain-col">
		关键字：
			<input name="q" type="text" value="" class="input-text" />
			<a class="button"><i></i><input type="submit" name="search"  value="搜索" /></a>
	</div>
		</td>
		</tr>
    </tbody>
</table>
</form>
</div>
<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/search/edit" method="post" enctype="multipart/form-data" />
	<ul class="tabBut cu-li">  
		<li id="tab_setting_1" class="on" onclick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">添加内容</li>
	</ul>	
<div class="pad-10" style="padding-top: 0;">
	<div class="col-tab">
		<div id="div_setting_1" class="contentList pad-10">

			<table width="100%" class="table_form ">
			 <tr>
					<th>关键字：</th>
					<td>
				   <input type="text" name="info[title]" id="title" class="input-text" size="30" value="<?=$data['res']['title']?>">
					</td>
				  </tr>
			 <tr>
					<th>点击次数：</th>
					<td><input type="text" name="info[hits]" id="hits" class="input-text" size="20" value="<?=$data['res']['hits']?>"></td>
				  </tr>     
			<tr>
					<th>发布时间：</th>
					<td><input type="text" name="info[uptime]" id="uptime"  size="25" value="<?=date('Y-m-d H:i:s',$data['res']['uptime'])?>" class="date"></td>
				  </tr>



				   <link rel="stylesheet" type="text/css" href="<?=base_url();?>index.php/views/skin/js/jscal2.css"/> 
					  <link rel="stylesheet" type="text/css" href="<?=base_url();?>index.php/views/skin/js/win2k.css"/> 
							<script type="text/javascript" src="<?=base_url();?>index.php/views/skin/js/calendar.js"></script> 
							<script type="text/javascript" src="<?=base_url();?>index.php/views/skin/js/en.js"></script> 
							 <script type="text/javascript"> 
							Calendar.setup({ 
							weekNumbers: true, 
							inputField : "uptime", 
							trigger    : "uptime", 
							 dateFormat: "%Y-%m-%d %H:%M:%S",//改成这个%Y-%m-%d，就不显示时间
							showTime: true, //是否显示时间
							minuteStep: 1, 
							onSelect   : function() {this.hide();} 
							}); 
						   </script>  



			<script charset="utf-8" src="<?=base_url();?>index.php/views/skin/kindeditor/kindeditor.js"></script>
			<script charset="utf-8" src="<?=base_url();?>index.php/views/skin/kindeditor/lang/zh_CN.js"></script>
			<script>
					KindEditor.ready(function(K) {
							window.editor = K.create('#editor_id');
					});
			</script>
			</table>

		</div>

		<div class="col_tab_box" style=" position: relative;background: none;box-shadow: none;">
			<input name="info[id]" type="hidden" value="<?=$data['res']['id']?>">
			<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
		</div>
	</div>
</div>
</form>
</div>
</body>
</html>






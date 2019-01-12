<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入链接名称",onfocus:"请输入链接名称"}).inputValidator({min:1,max:50,onerror:"请输入链接名称"});
	
	$("#url").formValidator({onshow:"请输入网站网址",onfocus:"请输入网站网址"}).inputValidator({min:1,onerror:"请输入网站网址"}).regexValidator({regexp:"^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&]*([^<>])*$",onerror:"格式应该为http://www.xxx.com/"})
	 
	
});
//-->
</script>
<div class="pad-10">
<div class="cate_top">
     <a href="<?=base_url();?>index.php/links/" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/links/add" class="on add_to"><i></i>添加链接</a> 
	 <span>|</span> <a href="<?=base_url();?>index.php/links/status"  class="a">审核链接</a>
	 
	 <span>|</span> <a href="<?=base_url();?>index.php/links/add_type"  class="a">添加类别</a>
	  <span>|</span> <a href="<?=base_url();?>index.php/links/list_type"  class="cur">分类管理</a>
</div>
<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/links/edit" method="post" enctype="multipart/form-data" />
	<ul class="tabBut cu-li">    
		<li id="tab_setting_1" class="on" onclick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">添加内容</li>
	</ul>
	<div class="pad-10" style="padding-top: 0;">
		<div class="col-tab">
			<div id="div_setting_1" class="contentList pad-10">
	<table width="100%" class="table_form ">  
		  <tr>
			<th>链接名称：</th>
			<td>
		   <input type="text" name="info[name]" id="name" class="input-text" size="40" value="<?=$data['res']['name']?>">
			</td>
		  </tr>
		<tr>
			<th>链接URL：</th>
			<td><input type="text" name="info[url]" id="url" class="input-text" size="40" value="<?=$data['res']['url']?>"></td>
		  </tr>

		<tr>
			<th>链接类型：</th>
			<td>
		<select name="info[type]" id="type">
	<?php foreach ($data['list'] as $v){
				if($data['res']['type']==$v['id']){
					echo "<option value='".$v['id']."' selected='selected'>".$v['name']."</option>";
				}else{
					echo "<option value='".$v['id']."'>".$v['name']."</option>";
				}
	 } ?>  
		</select>		
			</td>
		  </tr>

		  <tr>
			<th>图片：</th>
			<td>
					<?php if($data['res']['image']==''){
					 echo "<img src='".base_url()."views/skin/images/noimg.jpg' width='120' height='100' />";
			   }else{
					echo "<img src='".base_url()."../upload/".$data['res']['image']."' width='120' height='100' />";
			   }?>   
			  <input type="file" name="image" id="image" value="" size="50" class="input-text"  style="border:none; background:none; height:25px;"/>  
			  文字链接不用上传图片
			</td>
		  </tr>

			<tr>
			<th>备注：</th>
			<td><textarea name="info[beizhu]" id="des" style="width:70%;height:46px;"><?=$data['res']['beizhu']?></textarea>
			</td>
		  </tr>
		  <tr>
			<th>审核通过：</th>
			<td>
			<input name="info[status]" type="checkbox" id="status" value="1" <?php if($data['res']['status']==1){echo "checked='checked'"; }?>/>
			</td>
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

	</table>
	</div>

			<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
				<input name="info[id]" type="hidden" value="<?=$data['res']['id']?>">
				<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
			</div>
		</div>
	</div>
</form>
</div>
</body>
</html>






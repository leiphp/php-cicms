<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入链接名称",onfocus:"请输入链接名称"}).inputValidator({min:1,max:50,onerror:"请输入链接名称"});
	$("#url").formValidator({onshow:"请输入链接URL",onfocus:"请输入链接URL"}).inputValidator({min:1,max:50,onerror:"请输入链接URL"});
	 
	
});
//-->
</script>
<div class="pad-10">
<div class="cate_top">
     <a href="<?=base_url();?>index.php/poster/list_type" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/poster/add_type" class="on add_to"><i></i>添加广告位</a> 
  </div>
<div class="nav10" ></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/poster/add" method="post" enctype="multipart/form-data" />
	<ul class="tabBut cu-li">   
		<li id="tab_setting_1" class="on" onclick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">添加内容</li>
	</ul>
	<div class="pad-10" style="padding-top: 0;">
		<div class="col-tab">

			<div id="div_setting_1" class="contentList pad-10">

			<table width="100%" class="table_form ">
			  <tr>
				<th>广告名称：</th>
				<td>
			   <input type="text" name="info[name]" id="name" class="input-text" size="40" value="">
				</td>
			  </tr>
			<tr>
				<th>链接URL：</th>
				<td><input type="text" name="info[url]" id="url" class="input-text" size="40" value="javascript:void(0)"></td>
			  </tr>

			<tr>
				<th>广告版块类型：</th>
				<td>
			<select name="info[type]" id="type">
		<?php foreach ($data['list'] as $v){
					if($data['type']==$v['id']){
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
		<img id="image_img" width="135" height="133" onclick="file_upload('image');this.blur();" style=" cursor:pointer" src="http://www.cicms.qq/admin/views/skin/images/upload-pic.png"></img>
		<input id="image" type="hidden" name="info[image]" value=""></input>

				</td>
			  </tr>

				<tr>
				<th>备注：</th>
				<td><textarea name="info[beizhu]" id="des" style="width:70%;height:46px;"></textarea>
				</td>
			  </tr>
			  <tr>
				<th>审核通过：</th>
				<td>
				<input name="info[status]" type="checkbox" id="status" value="1" checked="checked" />
				</td>
			  </tr> 

		</table>

		</div>

			<div class="col_tab_box" style=" position: relative;background: none;box-shadow: none;">
				<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a> 
			</div>
		</div>
	</div>
</form>
<script>
  function file_upload(imgid) {
      layer.open({
      type: 2,
	  title:'附件上传',
      area: ['380px', '280px'],
      skin: 'layui-layer-rim', //加上边框
	   content: ['<?=base_url();?>index.php/layer/?imgid='+imgid, 'no']
	   
     });
 }
  
</script>
</body>
</html>






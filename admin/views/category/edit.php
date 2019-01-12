<?php $this->load->view('head');?>
<script language="javascript">
  function switchmodTag(modtag,modcontent,modk) {
    for(i=1; i <4; i++) {
      if (i==modk) {
        document.getElementById(modtag+i).className="on";document.getElementById(modcontent+i).className="contentList pad-10";}
      else {
        document.getElementById(modtag+i).className="";document.getElementById(modcontent+i).className="contentList pad-10 hidden";}
    }
  }
  $(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#catname").formValidator({onshow:"请输入栏目名称",onfocus:"长度应该为4-20位之间"}).inputValidator({min:4,max:20,onerror:"栏目名称为4-20位之间"});
	

	
});  
</script>
<body>
 <div class="cate_top" style="border-bottom:none;">
     <a href="<?=base_url();?>index.php/category/lists" class="on"><i></i>管理栏目</a>
     <span>|</span><a class="button" href="<?=base_url();?>index.php/category/add" id='test1'><i></i>添加栏目</a> 
  </div>
<div class="nav0"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/category/edit" method="post"  enctype="multipart/form-data" />
	<ul class="tabBut cu-li">
		<li id="tab_setting_1" class="on" onClick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">基本选项</li>
		<li id="tab_setting_2" onClick="switchmodTag('tab_setting_','div_setting_','2');this.blur();">SEO 设置</li>
	</ul>
<div class="pad-10" style="padding-top: 0;">
<div class="col-tab">
	<div id="div_setting_1" class="contentList pad-10">

	<table width="100%" class="table_form ">

			<tr>
			<th width="200">请选择模型：</th>
			<td>
			 <select name="info[modelid]" id="modelid" disabled><option value='' selected>请选择模型</option>
		<?php foreach ($data['model'] as $v){ ?>
	<option value="<?=$v['id']?>" <?php if($data['res']['modelid']==$v['id'])echo 'selected';?>><?=$v['name']?></option>
	<?php }?>
			 </select>		</td>
		  </tr>
		  <tr>
			<th width="200">上级栏目：</th>
			<td>
			<select name="info[pid]" id="pid">
			<option value='0'>≡ 作为一级栏目 ≡</option>
	<?php foreach ($data['list'] as $v){
			 $m=substr_count($v['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
			 $strpad=str_pad('',$m*13,'|&nbsp;&nbsp;');
	?>			
			<option value='<?=$v['id']?>' <?php if($data['res']['pid']==$v['id'])echo 'selected';?>><?=$strpad?><?=$v['catname']?></option>
	<?php } ?>  
	</select>
			</td>
		  </tr>

		  <tr>
			<th>栏目名称</th>
			<td>
			<span id="normal_add"><input type="text" name="info[catname]" id="catname" class="input-text" value="<?=$data['res']['catname']?>"></span>
			</td>
		  </tr> 
		<tr>
			<th>英文目录：</th>
			<td><input type="text" name="info[catdir]" id="catdir" class="input-text" value="<?=$data['res']['catdir']?>"></td>
		  </tr>
		<tr>
			<tr>
			<th>栏目描述：</th>
			<td> <textarea name="info[content]" maxlength="255" style="width:300px;height:60px;"><?=$data['res']['content']?></textarea></td>
		  </tr>
		<tr>
			<th>栏目图片：</th>
			<td>
			<input type="file" name="image" id="image" value="" size="50" class="input-text"  style="border:none; background:none; height:25px;"/> <?=$data['res']['image']?> 
			</td>
		  </tr>
	<tr>
			<th>外部链接：</th>
			<td><input type="text" name="info[url]" id="url" class="input-text" value="<?=$data['res']['url']?>" size="50"><span style="color: #fff;background: #d76161;padding: 5px 10px;border-radius: 4px;">只针对外部链接模型有效</span></td>
		  </tr>
		   <tr>
			<th>是否在导航显示：</th>
			<td><input name="info[ismenu]" value="1"  type="radio" <?php if($data['res']['ismenu']==1){echo "checked";}?>> 是&nbsp;&nbsp;&nbsp;&nbsp;
		  <input name="info[ismenu]" value="0" type="radio" <?php if($data['res']['ismenu']==0){echo "checked";}?>> 否</td></td>
		  </tr>

	</table>

	</div>


<div id="div_setting_2" class="contentList pad-10 hidden">
<table width="100%" class="table_form ">
	<tr>
      <th width="200"><strong>META Title（栏目标题）</strong><br/>针对搜索引擎设置的标题</th>
      <td><input name='info[seotitle]' type='text' class="input-text" value='<?=$data['res']['seotitle']?>' size='60' maxlength='60'></td>
    </tr>
    <tr>
      <th ><strong>META Keywords（栏目关键词）</strong><br/>关键字中间用半角逗号隔开</th>
      <td><textarea name='info[seokeyword]' id='meta_keywords' style="width:90%;height:40px"><?=$data['res']['seokeyword']?></textarea></td>
    </tr>
    <tr>
      <th ><strong>META Description（栏目描述）</strong><br/>针对搜索引擎设置的网页描述</th>
      <td><textarea name='info[seodescription]' id='meta_description' style="width:90%;height:50px"><?=$data['res']['seodescription']?></textarea></td>
    </tr>
</table>
</div>

<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
	<input name="info[id]" type="hidden" value="<?=$data['id']?>">
	<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
</div>
</form>


</body>
</html>
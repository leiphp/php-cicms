<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
    $("#title").formValidator({onshow:"请输入标题",onfocus:"标题长度应该为2-50个字符"}).inputValidator({min:2,max:100,onerror:"标题长度应该为2-50个字符"});

});
//-->
</script>
<!--编辑器JS-->
<script charset="utf-8" src="<?=base_url();?>views/skin/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?=base_url();?>views/skin/kindeditor/lang/zh_CN.js"></script>

<!--时间相关附件-->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>views/skin/js/jscal2.css"/> 
<link rel="stylesheet" type="text/css" href="<?=base_url();?>views/skin/js/win2k.css"/> 
 <script type="text/javascript" src="<?=base_url();?>views/skin/js/calendar.js"></script> 
<script type="text/javascript" src="<?=base_url();?>views/skin/js/en.js"></script> 

<div class="pad-10">
<div class="cate_top">
     <a href="<?=base_url();?>index.php/lkl/" class="on"><em>内容管理</em></a>
     <span>|</span><a href="<?=base_url();?>index.php/lkl/add" class="on"><em>添加内容</em></a> 
       <span>|</span> <a href="javascript:void(0)"  class="a" onclick="javascript:$('#searchid').css('display','block');">搜索</a>
        <span>|</span> <a href="<?=base_url();?>index.php/lkl/status?status=0"  class="a">待审核</a>
		<span>|</span> <a href="<?=base_url();?>index.php/lkl/status?status=2"  class="a">已退稿</a>
  </div>
<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/lkl/edit" method="post" enctype="multipart/form-data" />
<div class="pad-10">
<div class="col-tab">
<ul class="tabBut cu-li">

    
<li id="tab_setting_1" class="on" onclick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">添加内容</li>
</ul>
<div id="div_setting_1" class="contentList pad-10">

<table width="100%" class="table_form ">

<?php foreach ($data['form_info'] as $v){?>
 <tr>
        <th width="100"><?=$v['name']?>：</th>
        <td><?=$v['form']?></td>
      </tr>

<?php } ?> 



</table>

</div>

 <div class="nav10"></div>
 <input name="info[id]" type="hidden" value="<?=$data['res']['id']?>">
    <input name="dosubmit" type="submit" value="提交" class="button">
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
  
  
 function file_corp(imgid) {
      imgurl=$('#'+imgid).val();
      if(imgurl.indexOf("ttp:") > 0 ){
         alert('网络图片不能裁剪');return false;
      }
      if (imgurl=='') { alert('请先上传图片');return false;}else{
		  layer.open({
          type: 2,
	      title:'裁剪图片',
          area: ['800px', '480px'],
          skin: 'layui-layer-rim', //加上边框
          content: ['<?=base_url();?>index.php/layer/img_select?imgid='+imgid+'&img_url='+imgurl, 'no']
          });
	  }
 } 
 //增加图片			
function ad_img(){
   count=$('#insertimg').children().length+1;
   var str=' <div class="list" id="list_'+count+'"><div class="img"><img src="<?=base_url();?>views/skin/images/upload-pic.png" id="'+"duo_img"+count+'_img" style=" cursor:pointer" onclick="file_upload('+"'duo_img"+count+"'"+');this.blur();"><input id="'+"duo_img"+count+'" value="" name="info[duo_img]['+count+']" type="hidden"></div><a class="bnt_duo bnt_duo1" onclick="file_corp('+"'duo_img"+count+"'"+');this.blur()" href="javascript:void(0)"><img src="<?=base_url();?>views/skin/images/textfield_key.png" alt=""/> 裁剪</a> <a class="bnt_duo" onclick="del_img('+"'#list_"+count+"'"+')" href="javascript:void(0)"><img src="<?=base_url();?>views/skin/images/cross.png" alt=""/> 删除</a></div>';
	  $("#insertimg").append(str);
}  
//删除图片
function del_img(id){
    $(id).remove();
} 
</script>
</div>
</body>
</html>






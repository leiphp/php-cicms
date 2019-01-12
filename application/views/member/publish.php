<?php $this->load->view('member/head');?>   
<body>
<?php $this->load->view('member/top');?>
<div class="member_body">
 <div class="member_body_left" id='member_body_left'>
     <?php $this->load->view('member/left_menu');?>     
  </div>
    <div class="member_body_right" id='member_body_right'>
       <?php $this->load->view('member/sys_notice');?>     
<div class="pad-10">
<div class="col-tab">
<ul class="tabBut cu-li"> 
   <li id="tab_setting_1" class="on">信息发布</li>
   
</ul>

<div id="div_setting_1" class="contentList pad-10">
<form name="myform" id="myform" action="<?=base_url();?>member/publish/?model=<?=@$get['model']?>&modelid=<?=@$get['modelid']?>" method="post" enctype="multipart/form-data">
<table width="100%" class="table_form ">
<?php foreach ($data['form_info'] as $v){?>
 <tr>
        <th width="100"><?=$v['name']?>：</th>
        <td><?=$v['form']?></td>
      </tr>
<?php } ?> 
</table>
 <div class="nav10"></div>
    <input name="dosubmit" id="dosubmit" type="submit" value="提交" class="btn">
</form>    
    
</div>
</div>
</div>
    </div>        
</div>

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
  
</script>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#title").formValidator({onshow:"请输入标题",onfocus:"标题长度应该为4-50个字符"}).inputValidator({min:4,max:50,onerror:"标题长度应该为4-30个字符"});
	$("#editor_id_6").formValidator({onshow:"请输入文章内容",onfocus:"请输入文章内容"}).inputValidator({min:10,max:50000,onerror:"文章内容不能为空"});

	
	
});
</script>

</body>
</html>
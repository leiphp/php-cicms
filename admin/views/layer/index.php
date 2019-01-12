<?php $this->load->view('head');?>

<style>
/*整体布局样式*/
body,h1,h2,h3,h4,h5,form,dl{margin:0; padding:0; color:#333;;font: 12px/1.5 Tahoma,Geneva,"宋体";  list-style:none;}
body{ background:#fff;}
div,span,a{overflow:hidden}
ul,li,strong,em{ list-style:none;margin:0; padding:0; overflow:hidden;font-style: normal;}

a:link {color:#386790;text-decoration: none;}
a:visited {text-decoration: none;color: #386790}
a:hover {text-decoration: underline;color:#58C112;}
a:active {text-decoration: none;color: #386790;}
.nav0 {width:100%;height:0px;clear:both;overflow:hidden;}
.nav5 {width:100%;height:5px;clear:both;overflow:hidden;}
.nav10 {width:100%;height:10px;clear:both;overflow:hidden;}

.sub_image h4 {float:left;width:82px;height:30px;line-height:25px;text-align:center;font-size:12px;over-flow:hidden; cursor:pointer; background:#ddd; border:1px solid #ddd; border-bottom:none;}
.sub_image h4.menuNo {font-weight:normal; background:#ddd}
.sub_image h4.menuOn {font-weight:bold; background:#fff; }
.sub_image .box_des{ width:340px; border:1px solid #ddd; padding:10px;}
.sub_image .box_des .list_none {display:none}
.sub_image .box_des .list {margin:0px;padding:5px;height:auto}
.sub_image .box_des .list ul {margin:0px;padding:0px}
.sub_image .box_des .list li {line-height:20px; clear:both}

button {}
button{cursor: pointer;color:#fff;padding: 5px 10px;margin: 0px 10px 10px 0px; background:#318eee; border:none}
button:hover{  background:#60a9f4;}

.sub_image{ margin-top:10px; margin-left:8px;}
.sub_image_1 .sub_image_2{ line-height:22px;}
.sub_image_1 span{ color:#ff0000}

.upload_false{ color:#ff0000; font-size:16px;}

</style>

	<script language="javascript">
  function switchmodTag(modtag,modcontent,modk) {
    for(i=1; i <4; i++) {
      if (i==modk) {
        document.getElementById(modtag+i).className="menuOn";document.getElementById(modcontent+i).className="list";}
      else {
        document.getElementById(modtag+i).className="menuNo";document.getElementById(modcontent+i).className="list_none";}
    }
  }
</script>
   <div class="sub_image">
	<h4 class="menuOn" id="mod1" onclick="switchmodTag('mod','list','1');this.blur();" style=" margin-left:10px;">
	上传附件</h4>
	<h4 class="menuNo" id="mod2" onclick="switchmodTag('mod','list','2');this.blur();">
	网络文件</h4>
	<div class="nav0"></div>
	<div class="box_des">
	  <div class="list" id="list1">
	  <?php
	 
	  $imgid=@$_GET['imgid'];//获取上传图片的class id值
	  
	     if(isset($res)){
		     if($res=='false'){
			   echo "<div class='upload_false'>上传失败！</div>";
			 }else{
			   echo "<div><img src='".base_url()."../".$res."' width=100 height=100 /></div>";
			 }
		 }else{
	  ?>   
	   <form action="<?=base_url();?>index.php/layer/upload_file?imgid=<?=$imgid?>" method="post" enctype="multipart/form-data"  id="upload_img" >
		    <input name="userfile" type="file" onchange="return upload_file()"/>
			<div class="sub_image_1">单文件最大 <span><?=$this->max_file_size?> KB</span></div>
			<div class="sub_image_2">支持 <?=$this->file_allowed_types?> 格式。</div>
<!--<input type="checkbox" id="watermark_enable" value="1" checked="checked" >
			</input>
             是否添加水印
!-->
			<div class="nav10"></div>
			<input name="dosubmit" type="submit" value="上传到服务器" />
		  </form>
	  
	  <?php }?>
		 
		  
	   </div>
	  <div class="list_none" id="list2">
		  <form action="<?=base_url();?>index.php/layer/upload_file?imgid=<?=$imgid?>" method="post" id="upload_img_w">
		   请输入网络地址
			<div class="nav10"></div>
			 <input name="wimage" type="text"  size="40" id="wimage" value=""/>
		  </form>
	  </div>
	</div>
	<div class="nav10"></div>
	<button id="queren">确定</button> <button id="close">取消</button>
</div>
<?php
//返回的图片值
if(isset($res) && $res!='false'){
   $re_img1=$res;//保存图标地址，存储到数据库的值
   $re_img2=base_url().'../'.$res;//显示图片的地址
}
?>
<script>
var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
$('#close').click(function(){
    parent.layer.close(index);
});
$('#queren').on('click', function(){
    if($("#wimage").val()!=''){
	  parent.$('#<?=$imgid?>_img').attr('src',$("#wimage").val()); 
	  parent.$('#<?=$imgid?>').val($("#wimage").val());
	}
	<?php 
	if(isset($re_img1)){
	   echo "parent.$('#{$imgid}_img').attr('src','".$re_img2."'); ";
	   echo "parent.$('#{$imgid}').val('".$re_img1."');";
	}
	?>
     parent.layer.close(index);  
});

//自动上传
function upload_file(){
   $('#upload_img').submit();
}

</script>
</body>
</html>






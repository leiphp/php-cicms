<?php $this->load->view('head');?>
<script src="<?=base_url();?>views/skin/js/jquery.imgareaselect.pack.js" type="text/javascript"></script>
<link href="<?=base_url();?>views/skin/css/imgareaselect-default.css" rel="stylesheet" type="text/css" />


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

.sub_image{ margin-top:6px; margin-left:8px;}
.sub_image .box_des{ width:760px; border:1px solid #ddd; padding-top:10px;}
button{cursor: pointer;color:#fff;padding: 5px 10px;margin: 0px 10px 10px 0px; background:#318eee; border:none}
button:hover{  background:#60a9f4;}
.con_l{float: left; width:560px;}
.con_l p{ margin:0px; margin-bottom:4px; color:#ff0000; padding-left:10px;}
.frame{margin: 0 10px; width: 540px; height:330px; overflow:scroll}
.frame  img{ max-width:520px;}

.con_r{float: left; width:200px;}
.con_r .con_r_t{ font-weight:bold; color:#ff0000}
.con_r .con_r_input{ margin:3px 0px;}
.con_r input{ width:80px; margin-left:10px;}
.con_r_t p{ margin:5px 0px;}
</style>
<?php 
 $imgid=@$_GET['imgid'];//获取上传图片的class id值


//如果图片已经裁剪成功了。则关闭此窗口，并且将新的图片地址赋值到页面
if(!empty($data)){

    $re_img1=$data['res'];//保存图标地址，存储到数据库的值
    $re_img2=base_url()."./../".$data['res'];//显示图片的地址
?> 
 <script>
var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
   <?php
       echo "parent.$('#{$data['imgid']}_img').attr('src','".$re_img2."'); ";
	   echo "parent.$('#{$data['imgid']}').val('".$re_img1."');";
	 ?>  
    parent.layer.close(index);
 </script>
<?php }?>


<?php
//获取原图信息,如果原图宽度超过了520px,则进行等比压缩，将压缩比例$w_k传到图片裁剪控制器
$img_url=$_GET['img_url'];
$data_img=getimagesize("./../".$img_url);
$img_w=$data_img["0"];////获取图片的宽
$img_h=$data_img["1"];///获取图片的高
if($img_w<=300){
  $c_img_w=floor($img_w*0.8);
}else{
   $c_img_w=300;
}
//如果图片宽度大于520px，则记录伸缩比
$w_k=1;
if($img_w>520){
  $w_k=$img_w/520;
}
if($img_h<=200){
  $c_img_h=floor($img_h*0.8);
}else{
     $c_img_h=200; 
}
?>

   <div class="sub_image">
   <button id="queren">确定</button> <button id="close">取消</button>
	<div class="box_des">

<div class="container">
  <div class="con_l">
    <p>点击并拖动图像以选择一个区域 </p>
    <div class="frame">
       <div><img id="photo" src="" ></div>
    </div>
  </div>
  <div class="con_r">
  <form action="<?=base_url();?>index.php/layer/img_select/" method="post"  id="img_select">
  <div class="con_r_t">原图信息</div>
   <p><b>Width:</b><?=$data_img["0"]?>px&nbsp;&nbsp;&nbsp;<b>Height:</b><?=$data_img["1"]?>px</p>
   <div class="con_r_t">当前坐标</div>
    <div class="con_r_input"><b>X<sub>1</sub>:</b><input id="x1" value="0" type="text" name="x1" ></div>
    <div class="con_r_input"><b>Y<sub>1</sub>:</b><input id="y1" value="0" type="text" name="y1" ></div>
    <div class="con_r_input"><b>X<sub>2</sub>:</b><input id="x2" value="<?=$c_img_w?>" type="text" name="x2"></div>
    <div class="con_r_input"><b>Y<sub>2</sub>:</b><input id="y2" value="<?=$c_img_h?>" type="text" name="y2"></div>
    <div class="con_r_t">当前尺寸</div>
    <div class="con_r_input"><b>Width:</b><input value="<?=$c_img_w?>" id="w" type="text" name="w" ></div>
    <div class="con_r_input"><b>Height:</b><input id="h" value="<?=$c_img_h?>" type="text" name="h" ></div>
    
       <input name="y_image" type="hidden" value="" id="y_image"/>
       <input name="imgid" type="hidden" value="<?=@$_GET['imgid']?>" id="imgid"/>
       <input name="w_k" type="hidden" value="<?=$w_k?>" />
    </form>
  </div>
</div>

<script>
//加载图片
$('#photo').attr('src','<?=base_url()?>./../'+parent.$('#<?=$imgid?>').val()); 
//赋值图片
$("#y_image").val(parent.$('#<?=$imgid?>').val());
</script>

<script type="text/javascript">
function preview(img, selection) {
    if (!selection.width || !selection.height)
        return;
    $('#x1').val(selection.x1);
    $('#y1').val(selection.y1);
    $('#x2').val(selection.x2);
    $('#y2').val(selection.y2);
    $('#w').val(selection.width);
    $('#h').val(selection.height);    
}
$(function () {
    $('#photo').imgAreaSelect({  x1: 0, y1: 0, x2: <?=$c_img_w?>, y2: <?=$c_img_h?>, handles: true,
        fadeSpeed: 200, onSelectChange: preview,show:true });
});

</script>
	  
	</div>
	<div class="nav10"></div>
	
</div>
<?php
//返回的图片值
if(isset($res) && $res!='false'){
   $re_img1=$res;//保存图标地址，存储到数据库的值
   $re_img2=base_url().$res;//显示图片的地址
}
?>
<script>
var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
$('#close').click(function(){
    parent.layer.close(index);
});
$('#queren').on('click', function(){
  $("#queren").attr("disabled", true);
  $('#img_select').submit(); 
});
</script>
</body>
</html>






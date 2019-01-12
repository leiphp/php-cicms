<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->seotitle?></title>
<base href="<?=base_url();?>" />
<link type="text/css"  href="skin/member/css/user.css?t=1" rel="stylesheet">
<link type="text/css"  href="skin/member/css/table.css" rel="stylesheet">
<script src="skin/member/js/wl.js" type="text/javascript"></script>
<script src="<?=base_url();?>admin/views/skin/js/jquery.js" type="text/javascript"></script>

<!--layer弹出层-->
<script src="<?=base_url();?>admin/views/skin/layer/layer.js" type="text/javascript"></script>

<!--编辑器JS-->
<script charset="utf-8" src="<?=base_url();?>admin/views/skin/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?=base_url();?>admin/views/skin/kindeditor/lang/zh_CN.js"></script>

<!--formValidator插件相关-->
<script src="<?=base_url();?>/admin/views/skin/js/formValidatorRegex.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="<?=base_url();?>admin/views/skin/js/formvalidator.js" charset="UTF-8"></script>


<script type="text/javascript"> //procat4的js代码
   function _MP(cid) {
       jQuery("#cont_" + cid).slideToggle("slow"); 
	    //判断右侧加号的状态
	   if($("#ico_" + cid).hasClass("fa ico21")==true){

           jQuery("#ico_" + cid).removeClass("fa ico21")
		   jQuery("#ico_" + cid).addClass("fa ico22")
         }else{
	
           jQuery("#ico_" + cid).removeClass("fa ico22")
		   jQuery("#ico_" + cid).addClass("fa ico21")
    }	 
   }
</script>

<script type="text/javascript">
//左右框架高度一致
$(function(){
if($("#member_body_left").height() > $("#member_body_right").height()){
     $("#member_body_right").css("member_body_left",$("#left").height()) 
   }else{
   $("#member_body_left").css("height",$("#member_body_right").height()) 
  }
})
</script>
</head>
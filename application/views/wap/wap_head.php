<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta http-equiv="Cache-Control" content="no-cache">
<meta content="telephone=no" name="format-detection">
<?php $this->load->view('wap/wap_sys_seo');?>
<base href="<?=base_url();?>">
<link href="skin/wap/css/style.css?t=2" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="skin/wap/js/jquery.js"></script>
<script type="text/javascript" src="skin/wap/js/jquery.min.js"></script>
<script type="text/javascript" src="skin/wap/js/t6_main.js"></script>
<script type="text/javascript" src="skin/wap/js/modernizr.custom.js"></script>
<script type="text/javascript" src="skin/wap/js/jquery.dlmenu.js"></script>
<script type="text/javascript" src="skin/wap/js/slider.js"></script> 
<script type="text/javascript" src="skin/wap/js/wl_function.js"></script> 
</head>
<body>
<!--wap头部样式-->
<div class="wap_head6">
  <div class="logo move to-top0">
    <div class="mobile-btn"><span class="iconfont icon-caidan"></span></div>
    <a href="<?=base_url();?>"><img src="upload/<?=$setting['logo']?>" alt="<?=$setting['title']?>"></a>
  </div>
  <nav class="nav to-top0">
    <ul>
      <li><a href="<?=base_url();?>">网站首页</a></li>
      <?php foreach ($cat as $v){?>
      <li><a href="<?=$v['url']?>"><?=$v['catname']?></a></li>
      <?php }?>
    </ul>
  </nav>
</div>
<div class="bg"></div>
<div class="height-78"></div>

  <script type="text/javascript">
  $(function(){
  $( '#dl-menu' ).dlmenu();
  });
  </script> 
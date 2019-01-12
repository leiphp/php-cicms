<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="skin/images/favicon.ico" type="image/x-icon" />
    <?php $this->load->view('sys_seo');?>
    <base href="<?=base_url();?>" />
  <link rel="stylesheet" type="text/css" href="skin/css/style.css" />
  <link rel="stylesheet" type="text/css" href="skin/css/common.css" />
  
  <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
  <script type="text/javascript" src="skin/js/jqueryV173.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
  <script type="text/javascript" src="skin/js/Public.js"></script>  
  <script type="text/javascript" src="skin/js/swfobject_modified.js"></script>
  <script type="text/javascript" src="skin/js/swfobject.js"></script>

  <script type="text/javascript" src="skin/js/jquery.SuperSlide.js"></script>
  <script  type="text/javascript" src="skin/js/SuperSlide_app.js"></script>
  <script type="text/javascript" src="skin/js/jia_index.js"></script>
  <script  src="skin/js/script.js"></script>
   <!--End  top-->

</head>
<body class="index_body">

<div id="ea_h">
  <div class="top">
    <div class="t_t">

      <div id="t_logo" class="t_logo"> 
        <div id="ea_l"><a href="<?=base_url()?>" target="_self"><img alt="<?=$setting['title']?>" src="upload/<?=$setting['logo']?>" /></a></div>
      </div>
      <!--End t_logo-->
      
      <div class="navBar">
        <ul class="nav">
          <li id="m1" class="m <?php if(empty($top_category['tablename'])){echo "cur";}?>" >
            <h2><a href="<?=base_url()?>">首页</a></h2>
          </li>
          <?php $nn=2; foreach($cat as $v){?>
          <li id="m<?=$nn?>" class="m <?php if(isset($top_category['id']) && $top_category['id']==$v['id']){echo 'cur';}?>">
            <h2><a href="<?=$v['url']?>"><?=$v['catname']?></a></h2>
            <?php if(!empty($v['child'])){?>
            <ul class="sub">
            <?php foreach($v['child'] as $k){?>
              <li><a href="<?=$k['url']?>"><?=$k['catname']?></a></li>
            <?php }?>
            </ul>
            <?php }?>
          </li>
          <?php $nn++;}?>
        </ul>
      </div>
      <!--End navBar-->
    </div>
  </div>
</div>
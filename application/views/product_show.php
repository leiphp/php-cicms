<?php $this->load->view('head')?>
<!--End  头部-->
<div class="page_banner_wrap">
    <div class="page_banner">
    <div class=" page_map">
      <div class="main">
        <span class="crumbs floatL">
          <?php $this->load->view('sys_nav')?>
        </span>
      </div>
      <!-- end page-title -->
    </div>
    <img src="upload/<?=$top_category['image']?>"/>
    </div>
</div>
<!--End banner-->

<div class="page_nav main">
  <div class="tits"><?=$top_category['catname']?></div>
  <div class="tabs">
  <?php foreach ($cat[$top_category['id']]['child'] as $v){?>
  <a class="<?php if($v['id']==$category['id']){echo 'cur';}?>" href="<?=$v['url']?>"><?=$v['catname']?></a>
  <?php }?> 
  </div>
</div>
<div class="clear"></div>
<div class=" main">
  <div class="pro_list_box mt30 mb30">
    <div class="pro_de_l grid_60 floatL">
      <div class="focusBox" style="margin:0 auto">
        <ul class="pic">
        <?php $pro_img=string2array($data['res']['duo_img']);
        foreach ($pro_img as $v){ ?>
          <li><a href="javascript:void(0)"><img class="grid_60" src="<?=$v?>"/></a></li>
        <?php }?>
        </ul>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
        <ul class="hd">
        <?php foreach ($pro_img as $v){ ?>
          <li></li>
        <?php }?>
        </ul>
      </div>
      <script type="text/javascript">
        jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:300});
      </script>
      
    </div>
    <!--End  pro_de_l-->
    
    <div class="pro_de_r grid_50 floatR">
      
      <div class="pro_de_l grid_50 floatL">
        <h3 class="mt30 mb20 pb30 pro_id text_24 name" style="border-bottom: 1px solid #ddd;"><?=$data['res']['title']?></h3>
        <div class="pro_content">
          <div class="grid_10 floatL title">产品简介：</div><div class="grid_36 floatR text"><?=$data['res']['des']?></div>
      
        </div>
      </div>
      
    </div>
    <!--End  pro_de_r-->
    
    <div class="clear"></div>
    <!--产品详情介绍-->
    <div class="page_text pro_text">
      <div class="pro_title">产品详情</div>
      <?=$data['res']['content']?>
    </div>
  </div>
  <!--End  pro_list_box-->
</div>  
<!--End  产品展示-->  
  <div class="clear"></div>
<div id="ea_b">
<?php $this->load->view('foot')?>

  
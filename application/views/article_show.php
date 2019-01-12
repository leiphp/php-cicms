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
  <div class="page_text about_box mt30 mb30">
  <?=$data['res']['content']?>
  </div>
</div>  
  <div class="clear"></div>
<div id="ea_b">
<?php $this->load->view('foot')?>

  
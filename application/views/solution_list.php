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
  <div class="news_list_box mt30 mb30">
    <ul>
    <?php $nn=0; if(!empty($data['list'])){foreach($data['list'] as $v){?>
    <?php if($nn%2==0){echo '<li class="fadeInBottom" data-animation="fadeInBottom" data-timeout="300">';}?>
        <div class="mbox_list recommend_article_list"> 
          <a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank" class="recommend_article_list_pic">
            <img src="<?=$v['image']?>" alt="<?=$v['title']?>">
          </a>
          <div class="recommend_article_list_content">
          <h3 class="list_title"><a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank" style=""><?=$v['title']?></a></h3>
          <div class="recommend_article_list_info">
            <a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank" class="colorlink"><?=$category['catname']?></a>
            <span class="pipe" style="color: #999999;">/</span>
            <span style="font-family: Arial, Helvetica, sans-serif;"><?=date('Y-m-d',$v['uptime'])?></span>
            <a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank" class="icon16link" style="font-family: Arial, Helvetica, sans-serif;"><i class="s_view"></i><?=$v['hits']?></a>
          </div>
          <div class="recommend_article_list_simple"><?=$v['des']?></div>
          </div>
        </div>
    <?php if($nn%2==1){echo '<div class="clear"></div></li>';}?>
    <?php $nn++;}}else{?>
     <div style="padding:10px; color:#FF0000">暂无数据!</div>
     <?php }?>   
    </ul>
    
    <div class="clear"></div>
    <div class="page mt50 mb50">
     <?=$pages?>
    </div>
    <!--End page-->
  </div>
  <!--End  pro_list_box-->
</div>  
<!--End  产品展示-->  
  <div class="clear"></div>
<div id="ea_b">
<?php $this->load->view('foot')?>
  
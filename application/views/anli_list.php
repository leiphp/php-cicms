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
  <div class="case_list_box mt30 mb30">
    <ul>
    <?php if(!empty($data['list'])){foreach($data['list'] as $v){?>
      <li class="fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
        <div class="pic">
          <a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank">
            <img src="<?=$v['image']?>" alt="<?=$v['title']?>">
          </a>
        </div>                            
        <div class="case_text_box">
          <a class="title" href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank">
            <h3><?=$v['title']?></h3>
            <p class="time"><?=date("Y-m-d",$v['uptime'])?></p>
            <p class="text_p"><?=$v['des']?></p>
          </a>
        </div>  
        <div class="clear"></div>                                   
      </li>
    <?php }}else{?>
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
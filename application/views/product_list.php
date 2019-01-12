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
    <ul class="xn_c_index_275_cMain">
    <?php if(!empty($data['list'])){foreach($data['list'] as $v){?>
      <li class="xn_c_index_275_items fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
        <div class="xn_c_index_275_cImg">
          <a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank">
            <img src="<?=$v['image']?>" alt="<?=$v['title']?>">
          </a>
        </div>                            
        <div class="xn_c_index_275_cCont">
          <a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_blank">
            <span class="xn_c_index_275_cTitle">
              <?=$v['title']?>
            </span>
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
</body>
</html>

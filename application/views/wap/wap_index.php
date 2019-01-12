<?php $this->load->view('wap/wap_head')?>
<!--wap头部样式结束-->
<div class="content move">  
  <!--banner-->
  <section class="w_wap_banner1">
    <div id="w_banner_01" class="w_banner" >
      <ul class="slides">
      <?php foreach($this->p->get_poster(30) as $v){?>
        <li>
          <div class="img"><img src="<?=$v['image']?>"  style="width:100%" alt="<?=$v['name']?>" /></div>
        </li>
      <?php }?>
      </ul>
    </div>
    <script type="text/javascript">
  $(function(){
  $('#w_banner_01').flexslider({
    animation: "slide",
    direction:"horizontal",
    easing:"swing"
  });
  });
  </script> 
  </section>
  
  <!--扁平图标功能区域-->
  <section class="y_wap_index-nav">
    <ul>
      <li><a href="<?=base_url()?>product/" ><img class="" src="skin/wap/images/btn1.png"><span>产品中心</span></a></li>
      <li><a href="<?=base_url()?>news/" ><img class="" src="skin/wap/images/btn2.png"><span>新闻资讯</span></a></li>
      <li><a href="<?=base_url()?>article/71.html" ><img class="" src="skin/wap/images/btn3.png"><span>关于我们</span></a></li>
      <li><a href="<?=base_url()?>article/80.html" ><img class="" src="skin/wap/images/btn4.png"><span>联系我们</span></a></li>
    </ul>
  </section>
  <section class="y_wap_aboutus">
    <div class="title">
    <div class="header-position">
      <div class="header-line"></div>
      <div class="header-text"><span class="text">企业简介</span></div>
    </div>
  </div>
    <div class="y_wap_aboutus_div"><p><?=str_cut($cat[71]['child'][82]['content'],500)?></p>
    </div>
  </section>
  
  
  <div class="nav0"></div>
  
  <!--产品列表-->
  <section class="yd_wap_news3 li_wap_news2">
    <h2><i></i><em><a href="<?=base_url()?>product" title="产品展示">更多</a></em>产品展示</h2>
  <ul>
  <?php foreach($this->p->get_list(6,'product') as $v){ ?>
    <li><a href="product/show/<?=$v['id']?>.html" target="_self"><img src="<?=$v['image']?>" alt="<?=$v['title']?>" class="yl_auto" style="width: 145.5px; height: 111.923px;"><span><?=$v['title']?></span></a></li>
  <?php }?> 
  </ul>
    <script>
    var all_pm=$(".yd_wap_news3").width();
    width=all_pm*0.48;
    height=width*0.631;
    w=width.toString();
    w=w + "px";
    h=height.toString();
    h=h + "px";
    $(".yl_auto").css("width",w);
    $(".yl_auto").css("height",h);
  </script> 
     
  </section>
  
  <section class="li_wap_news2">
  <h2><i></i><em><a href="<?=base_url()?>news" title="最新资讯">更多</a></em>最新资讯</h2>
  <?php $nn=1; foreach($this->p->get_list(10,'news') as $v){ ?>
    <a href="news/show/<?=$v['id']?>.html" class="w_wap_news_a" target="_self"> <i class="<?php if($nn<4){echo 'ys';}?>"><?=$nn?></i><?=$v['title']?></a>
  <?php $nn++;}?>
   
   <a class="w_wap_news1_more" href="<?=base_url()?>news">更多新闻&gt;&gt;</a> 
</section>
<?php $this->load->view('wap/wap_foot')?>
    
  
  
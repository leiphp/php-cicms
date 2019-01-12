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
<!--End page_nav-->

<div class="page_main">
  <div class="main">
      <div class="news_de_left grid_90 floatL mb30">
        <h1 class="Slim"><?=$data['res']['title']?></h1>
        <div class="text_info textL mt10 pb05 assist text_14">
          <span class="pr30"><img class="floatL mr05" src="skin/images/icon6.jpg"><?=date('Y/m/d',$data['res']['uptime'])?></span> <span><img class="mr05" src="skin/images/icon7.jpg"><a class="color_1" href="<?=base_url()?>">爱搜客</a></span>
        </div>
        <div class="clear"></div>
        <div class="page_text">
        <?=$data['res']['content']?>
        </div>
        <!--End page_news_text-->
        <div class="clear"></div>
        <div class="share">
          <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1516075131201"><span class="floatL mt05">分享到：</span><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
  <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        </div>

        <div class="Paging mt10">
          <div class="assist mb05">下一篇:<a title="<?=$data_page['next_title']?>" class="pl10" href="<?=$data_page['next_url']?>"><?=$data_page['next_title']?></a></div>
          <div class="assist">上一篇:<a title="<?=$data_page['pre_title']?>" class="pl10" href="<?=$data_page['pre_url']?>"><?=$data_page['pre_title']?></a></div>
        </div>
        <!--End paging-->
      </div>
      <!--End news_de_left-->
      
      <div class="news_de_r floatR grid_24">
        <h2 class="Slim mb15 text_18" style=" margin-bottom: 20px; padding-bottom: 10px;">方案推荐</h2>
        <ul>
         <?php foreach($this->p->get_list(6,$top_category['tablename']) as $v){ ?>
          <li>
            <div class="box grid_11 floatL"><a href="solution/show/<?=$v['id']?>.html"><img class="img" src="<?=$v['image']?>"></a></div>
            <div class="text floatR"><a href="solution/show/<?=$v['id']?>.html"><?=$v['title']?></a><span><?=date('Y-m-d',$v['uptime'])?></span></div>
          </li>
        <?php }?> 
        </ul>
      </div>
      <!--End news_de_r-->
  </div>
</div>  
<!--End page_main-->
  
<div class="clear"></div>
<div id="ea_b">
 <?php $this->load->view('foot')?>
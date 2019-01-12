<?php $this->load->view('wap/wap_head')?>
<!--wap头部样式结束-->
  
<div class="move">    
  <!--内页导航-->
  <div class="pro_class2">
    <?php foreach ($cat[$top_category['id']]['child'] as $v){?>
    <a <?php if($v['id']==$category['id']){echo "class='cur'";}?> href="<?=$v['url']?>"><?=$v['catname']?></a>
    <?php }?>
    <div class="nav0"></div>
  </div>

  <!--内页主体装容器-->
  <section class="page_box">
    <div class="font_content">
      <h1 class="h1"><?=$data['res']['title']?></h1>
      <div class="time"><span style="float:right;">栏目：<a style="color:#FF0000"><?=$category['catname']?></a></span><?=date('Y-m-d H:i:s',$data['res']['uptime'])?></div>
    <?=$data['res']['content']?>
    </div>
    <div class="nav0"></div>
    <div class="bdsharebuttonbox bdshare-button-style0-24">
      <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a>
    </div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
    <div class="nav0"></div>
  </section>
  <!--内页主体装容器结束-->
<?php $this->load->view('wap/wap_foot')?>
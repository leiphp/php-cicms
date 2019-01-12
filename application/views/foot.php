<div class="foot">
    <div class="index_foot_box1">
      <div class="index_foot_box1_left">
        <div class="index_foot_box1_pic">
          <a href="<?=base_url()?>" target="_self"><img alt="<?=$setting['title']?>" src="upload/<?=$setting['logo']?>" /></a>
        </div>

        <div id="foot_nav2" class="foot_nav2">
          <ul class="foot_type2Ul foot_type2Ul_n000">
          <li class=""> <a href="<?=base_url()?>" target="_blank">首页</a></li>
          <?php foreach($cat as $v){?>
          <li class=""> <a href="<?=$v['url']?>" target="_blank"><?=$v['catname']?></a></li>
          <?php }?>
          </ul>
        </div>

        <div class="index_foot_box1_right_04">
         <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        </div>

      </div>
      <div class="index_foot_box1_content">
        <div class="index_foot_box1_guan_wei">
          <img alt="<?=$setting['title']?>" src="upload/<?=$setting['erweima']?>" />

          <div class="index_foot_box1_weix">
            <span name="_foot_box1_weix|">公众号【爱搜客】</span>
          </div>

        </div>
        <div class="index_foot_box1_shuo_wei">
          <img alt="<?=$setting['title']?>" src="upload/<?=$setting['pc_phone']?>" />
          <div class="index_foot_box1_shuoji">
            <span name="_foot_box1_shuoji|">移动端网站</span>
          </div>
        </div>
      </div>
      <div class="index_foot_box1_right">
        <div class="index_foot_box1_right_01">

          <span name="_box1_right_01|">联系我们</span>

        </div>
        <div class="index_foot_box1_right_03">
          <span name="_box1_right_03|" >地址：<?=$setting['addr']?><br>全国免费热线：<?=$setting['tel']?><br>业务咨询
<?=$setting['pc_mobile']?></span>
        </div>
      </div>
    </div>

    <div class="foot_c">
      <div class="foot_c_wrap main textC">
       <p> <?=$setting['copy']?> <span>技术支持：<a class="color_666" href="http://www.aisoker.com/" target="_blank">爱搜客</a></span></p>
      </div>
      <script type="text/javascript" charset="utf-8" src="skin/js/20000508/10087894.js"></script>
    </div>
</div>
</div>
 <!--End  底部-->


<input type="hidden" id="pageId" value="1" />
<script id="js__index" type="text/javascript" src="skin/js/CgAGe1nLXXeAOqdaAABN5sIXaks8488.js" ></script>


<div id="top">
  <div id="izl_rmenu" class="izl-rmenu">
    <div class="btn btn-phone">
      <div class="phone" style="display: none;"><?=$setting['tel']?></div>
    </div>
    <div class="btn btn-wx">
      <img class="pic" src="upload/<?=$setting['erweima']?>" onclick="window.location.href='upload/<?=$setting['erweima']?>'" style="display: none;">
    </div>
    <div class="btn btn-top" style="display: block;"></div>
  </div>
</div>
</body>
</html>

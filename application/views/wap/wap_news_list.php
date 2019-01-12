<?php $this->load->view('wap/wap_head')?>
 <div class="move">   
  <!--内页导航-->
  <div class="pro_class2">
    <?php foreach ($cat[$top_category['id']]['child'] as $v){?>
      <div><a <?php if($v['id']==$category['id']){echo "class='cur'";}?> href="<?=$v['url']?>"><?=$v['catname']?></a></div>
    <?php }?> 
    <div class="nav0"></div>
  </div>
  <!--内页主体装容器-->
  <section class="page_box">
    <div class="yd_ind_news1">
    <?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
      <a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" class="w_wap_news_a" target="_self">
        <p class="w_wap_news_img"><img class="yd_ind_news1" src="<?=$v['image']?>" alt="<?=$v['title']?>"></p>
        <p class="w_wap_news_des"> <strong><?=$v['title']?></strong> <div class="news_class"><?=$category['catname']?></div></p>
      </a> 
    <?php }}else{?> 
      <div style="padding:10px; color:#FF0000">暂无数据!</div>        
    <?php } ?>  
      <script>
        var all_pm=$(".yd_ind_news1").width();
        width=all_pm*1;
        height=width/0.55;
        w=width.toString();
        w=w + "px";
        h=height.toString();
        h=h + "px";
        $(".yd_new_auto").css("width",w);
        $(".yd_new_auto").css("height",h);
      </script> 
    </div>

    <div class="nav0"></div>
    <div class="page">
      <?=$pages?>
    </div>
  </section>
<?php $this->load->view('wap/wap_foot')?>  
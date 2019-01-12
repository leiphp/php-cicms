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
    <?=$data['res']['content']?>
  </div>
  </section>
  <!--内页主体装容器结束-->
<?php $this->load->view('wap/wap_foot')?>
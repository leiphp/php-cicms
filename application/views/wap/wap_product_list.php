<?php $this->load->view('wap/wap_head')?>
<!--wap头部样式结束-->
<div class="move"> 
  <!--内页导航-->
    <div class="title">
		<div class="header-position">
			<div class="header-line"></div>
			<div class="header-text"><span class="text"><?=$top_category['catname']?></span></div>
		</div>
	</div>
	<div class="pro_class2">
		<?php foreach ($cat[$top_category['id']]['child'] as $v){?>
		<a <?php if($v['id']==$category['id']){echo "class='cur'";}?> href="<?=$v['url']?>"><?=$v['catname']?></a>
		<?php }?>
		<div class="nav0"></div>
	</div>
  <!--内页导航结束-->

  <!--内页主体装容器-->
	<section class="page_box">
	  <div class="yd_wap_news3 w_wap_news2">
		<ul>
		<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
		  <li><a href="<?=$category['tablename']?>/show/<?=$v['id']?>.html" target="_self"><img src="<?=$v['image']?>" alt="<?=$v['title']?>" class="yl_auto" style="width: 145.5px; height: 111.923px;"><span><?=$v['title']?></span></a></li>
		<?php }}else{?> 
        <div style="padding:10px; color:#FF0000">暂无数据!</div>        
   		<?php } ?> 	
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

	  </div>
	  <div class="nav0"></div>

	  <div class="page">
		<?=$pages?>
	  </div>

	</section>
  <!--内页主体装容器结束-->
 <?php $this->load->view('wap/wap_foot')?>
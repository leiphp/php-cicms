<?php $this->load->view('wap/wap_head')?>
<!--wap头部样式结束-->
<div class="move">   
  <!--内页导航-->
	<div class="pro_class2">
		<?php foreach($cat[$top_category['id']]['child'] as $v){?>
		<a class="<?php if($v['id']==$category['id']){echo 'cur';}?>" href="<?=$v['url']?>"><?=$v['catname']?></a>
		<?php }?>
		<div class="nav0"></div>
	</div>
	  
	<!--内页主体装容器-->
	<section class="page_box pro">
		<h1 class="pro_name"><?=$data['res']['title']?></h1>
	  <!--pro_banner-->
	  <section class="w_wap_banner1">
		<div id="w_banner_01" class="w_banner" >
		  <ul class="slides">
		  <?php $pro_img=string2array($data['res']['duo_img']); foreach($pro_img as $v){?>
			<li>
			  <div class="img"><img src="<?=$v?>"  style="width:100%" /></div>
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
	  <div class="nav0"></div>
		<div class="pro_title">详情内容</div>
		<div class="font_content">
		<?=$data['res']['content']?>
		</div>
	</section>
	<!--内页主体装容器结束-->
 <?php $this->load->view('wap/wap_foot')?>
	
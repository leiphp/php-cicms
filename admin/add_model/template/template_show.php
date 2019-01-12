<?php $this->load->view('head');?>
<div class="nbanner">
 <div><img src="upload/<?=$top_category['image']?>" /></div>
</div>
<div class="nav10"></div>
<div class="ncontent">
  <div class="left">
 <div class="lmdh">
       <div class="lm_top">栏目导航</div>
       <div class="lm_mid">
          <ul>
		  <?php foreach ($cat[$top_category['id']]['child'] as $v){?>
		    <li><a href="<?=$category['tablename']?>/lists/<?=$v['id']?>/" <?php if($v['id']==$category['id']){echo "class='cur'";}?>><?=$v['catname']?></a></li>
		  <?php }?>
          </ul>
       </div>
  </div>
    
       <div class="nav10"></div>
  <div class="lmdh">
       <div class="lm_top">联系我们</div>
       <div class="contact_x contact_x_n">
           <?php if(isset($setting['tel'])){echo $setting['tel'];}?>
       </div>
  </div>     
       
  </div>
  <div class="right">
    <div class="cattitle"><span><?php $this->load->view('sys_nav');?></span><img src="skin/images/ico4.jpg" /> <?=$top_category['catname']?></div>
    <div class="nav10"></div>
     <div class="font_content_bg" style="border:1px solid #ccc; background:#fff">
 <div class="font_content">
           <h1><?=$data['res']['title']?></h1>
          <div class="newsbanner">发布时间：<?=date('Y-m-d',$data['res']['uptime'])?> 阅读次数：<?=$data['res']['hits']?>次</div>
              <?=$data['res']['content']?>
     </div> 


        </div>

  </div>
</div>
<?php $this->load->view('foot');?>
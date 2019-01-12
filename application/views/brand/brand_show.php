
<?php $this->load->view('head');?>
<div class="nbanner">
 <div><img src="skin/images/nbanner.jpg" /></div>
</div>>
<div class="nav10"></div>

<div class="ncontent">
  <div class="left">
 <div class="lmdh">
 <div class="lm_top">产品展示</div>
<div class="procat">

<?php foreach ($cat[14]['child'] as $v){?>
      <div class="big">
            <h3><a href="javascript:void(0);" onclick="_MP('<?=$v['id']?>');" class="img"><img src="skin/images/sideUnfold.gif"  /></a>&nbsp;&nbsp;<a href="product/lists/<?=$v['id']?>/" class="link"><?=$v['catname']?></a></h3>
       <?php if(!empty($v['child'])){ ?>
                <div class="second" id="cont_<?=$v['id']?>">
                     <?php foreach ($v['child'] as $k){?>
                               <a href="product/lists/<?=$k['id']?>/" >·<?=$k['catname']?></a> 
                                 <?php if(!empty($k['child'])){ ?>
                                      <div class="third">
                                            <?php foreach ($k['child'] as $t){?>
                                                   <a href="product/lists/<?=$t['id']?>/" >·<?=$t['catname']?></a> 
                                             <?php }?>  
                                      </div>
                                  <?php }?> 
                     <?php }?> 
                </div>
       <?php }?>      
       </div>
<?php }?>

          <div class="nav10"></div>
        </div>

  
       
  </div>
    
       <div class="nav10"></div>
  <div class="lmdh">
       <div class="lm_top">联系我们</div>
           <div class="contact_x contact_x_n">
       <?=$setting['tel']?>
         
       </div>
  </div>     
       
       
  </div>
  <div class="right">
   
    <div class="cattitle"><span><?php $this->load->view('sys_nav');?></span><img src="skin/images/ico4.jpg" /> 品牌中心</div>
    <div class="nav10"></div>
     <div class="font_content_bg" style="border:1px solid #ccc; background:#fff">
  <div class="images785x"><?=$data['res']['name']?></a></div>
  <div  style=" padding:20px; width:690px; margin:10px 10px; background:#F5F5F5; border:1px solid #ccc;"><?=$data['res']['content']?></div>
  
  <div class="prolist2" >
   <ul class="n">
   <?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
   
     <li ><a href="product/show/<?=$v['id']?>.html" target="_blank" title="<?=$v['title']?>"><img src="upload/<?=$v['image']?>" /></a><h2><a href="product/show/<?=$v['id']?>.html" target="_blank"><?=$v['title']?></a></h2></li>

<?php }}else{?>
				
	<div style="padding:10px; color:#FF0000">暂无数据!</div>
				
<?php } ?> 
          
   </ul>
  </div> 
<div class="page"><?=$pages?></div>




        </div>

  </div>
</div>

<?php $this->load->view('foot');?>
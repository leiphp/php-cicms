
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
 
 <?php foreach($data['brand_type'] as $v){
         $this->load->model("Brandm");//加载品牌模型

 ?>
    <div class="images785x"><a href="brand/lists/<?=$v['id']?>/"><?=$v['name']?></a></div>
     <div class="brand_list">
  <?php foreach($this->Brandm->lists(20,1,'type='.$v['id']) as $k){  ?>
      <div>
               <a title="<?=$k['name']?>" href="brand/show/<?=$k['id']?>.html" class="brandimg"><img  src="upload/<?=$k['image']?>" alt="<?=$k['name']?>"></a>
                <a title="<?=$k['name']?>" href="brand/show/<?=$k['id']?>.html" class="brandlink"><?=$k['name']?></a>
       </div>
      
  
  <?php }?>    
     
     </div>
<?php }?>


        </div>

  </div>
</div>

<?php $this->load->view('foot');?>
<?php $this->load->view('head');?>
<div class="cate_top">
	<a href="<?=base_url();?>index.php/page/lists" class="on"><i></i>管理栏目</a>
  </div>
<div class="nav10"></div>
<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%" cellspacing="0" >
        <thead>
            <tr>
            <th width="40">catid</th>
            <th width="400">栏目名称</th>
			<th width="200">管理操作</th>
            </tr>
        </thead>
    <tbody>

  
    
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){


	     $m=substr_count($v['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
	    $strpad=str_pad('',$m*25,'|&nbsp;&nbsp;&nbsp;&nbsp;');
		if($m==0){$font="font-weight:bold";}elseif($m==2){$font="color:#008ED2";}else{$font="";}
        $page_id=$this->m->get_one($v['id']);
?>	

    <tr>
			<td align='center'><?=$v['id']?></td>
			<td   style="<?=$font?>"><?=$strpad?>|- <?=$v['catname']?></td>
			<td align='center' ><?php if(empty($v['child'])){?><a class="button" href="<?=base_url();?>index.php/page/edit/<?=$v['id']?>"><i></i>编辑</a><?php }?></td>
	</tr>
                
       <?php if(!empty($v['child'])){ foreach ($v['child'] as $v){
	      $m=substr_count($v['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
	    $strpad=str_pad('',$m*25,'|&nbsp;&nbsp;&nbsp;&nbsp;');
		if($m==0){$font="font-weight:bold";}elseif($m==2){$font="color:#008ED2";}else{$font="";}
		 $page_id=$this->m->get_one($v['id']);
	?>
    
     <tr>	
			<td align='center'><?=$v['id']?></td>
			<td   style="<?=$font?>"><?=$strpad?>|- <?=$v['catname']?></td>
			<td align='center' ><?php if(empty($v['child'])){?><a class="button" href="<?=base_url();?>index.php/page/edit/<?=$v['id']?>"><i></i>编辑</a><?php }?></td>
	</tr>
                   <?php if(!empty($v['child'])){ foreach ($v['child'] as $v){
	      $m=substr_count($v['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
	    $strpad=str_pad('',$m*25,'|&nbsp;&nbsp;&nbsp;&nbsp;');
		if($m==0){$font="font-weight:bold";}elseif($m==2){$font="color:#008ED2";}else{$font="";}
		$page_id=$this->m->get_one($v['id']);
	?>
    
     <tr>
				
				<td align='center'><?=$v['id']?></td>
				<td   style="<?=$font?>"><?=$strpad?>|- <?=$v['catname']?></td>
				<td align='center' ><?php if(empty($v['child'])){?><a class="button" href="<?=base_url();?>index.php/page/edit/<?=$v['id']?>"><i></i>编辑</a><?php }?></td>
		</tr>
           
                   <?php if(!empty($v['id'])){ foreach ($v['child'] as $v){
	      $m=substr_count($v['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
	    $strpad=str_pad('',$m*25,'|&nbsp;&nbsp;&nbsp;&nbsp;');
		if($m==0){$font="font-weight:bold";}elseif($m==2){$font="color:#008ED2";}else{$font="";}
		$page_id=$this->m->get_one($v['id']);
	?>
    
     <tr>
				<td align='center'><?=$v['id']?></td>
				<td  style="<?=$font?>"><?=$strpad?>|- <?=$v['catname']?></td>
		 <td align='center' ><?php if(empty($v['child'])){?><a class="button" href="<?=base_url();?>index.php/page/edit/<?=$v['id']?>"><i></i>编辑</a><?php }?></td>
				</tr>
                
    
    <?php }} ?>      
    
    
    <?php }} ?> 

    <?php }} ?> 	
	      
                
                
 <?php }}else{?>
				<tr>
					<td colspan="5">暂无数据！</td>
				</tr>	
	<?php } ?>   				
				
                   </tbody>
    </table>
    <div class="btn">
	
	</div>  </div>
</form>
</body>
</html>

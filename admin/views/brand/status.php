<?php $this->load->view('head');?>
<div class="pad-10">

<div class="cate_top">
     <a href="<?=base_url();?>index.php/brand/" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/brand/add" class="on add_to"><i></i>添加品牌</a> 
	 <span>|</span> <a href="<?=base_url();?>index.php/brand/status"  class="a">审核品牌</a>
	 <span>|</span> <a href="<?=base_url();?>index.php/brand/add_type"  class="a">添加分类</a>
	  <span>|</span> <a href="<?=base_url();?>index.php/brand/list_type"  class="a">分类管理</a>
  </div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
			   <th width="20"><input type="checkbox" value=""  id="chkAll" onclick="CheckAll(this.form)"></th>
               <th width="37">ID</th>
			   <th width="150">链接名称</th>
               <th width="150">链接URL</th>
			   <th width="150">图片LOGO</th>
               <th width="150">添加时间</th>
               <th>备注</th>
			<th width="72">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
		<td align="left"><input class="inputcheckbox " name="id[]" value="<?=$v['id']?>" type="checkbox" /> </td>
         <td align='center' ><?=$v['id']?></td>
		<td align='center' ><?=$v['name']?></td>
		<td align='center'><?=$v['url']?></td>
		
		 <td align='center'> <?php if($v['image']==''){
		         echo "<img src='".base_url()."views/skin/images/noimg.jpg' width='100' height='50' />";
		   }else{
		        echo "<img src='".base_url()."../upload/".$v['image']."' width='100' height='50' />";
		   }?>  
		  </td> 
		<td align='center'><?=date('Y-m-d H:i:s',$v['uptime'])?></td>
        <td align='left'><?=$v['beizhu']?></td>
		<td align='center'><a href="<?=base_url();?>index.php/brand/edit/<?=$v['id']?>">修改</a> | <a onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/brand/del/<?=$v['id']?>">删除</a></td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="8">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>
     <div class="btn">
		 <a class="button by"><i></i><input type="button" value="通过审核" onclick="myform.action='<?=base_url();?>index.php/brand/status_ok';myform.submit();"/></a>
		<a class="button delete"><i></i><input type="button"  value="删除" onclick="javascript:if(ConfirmDel()){myform.action='<?=base_url();?>index.php/brand/del';myform.submit();}"/></a>
	</div>
            
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>

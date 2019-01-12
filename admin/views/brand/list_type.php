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
			   <th width="50">排序</th>
               <th width="70">分类ID</th>
			   <th width="150">分类名称</th>
			  <th width="100">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
     <td align="center"><input name="listorder[<?=$v['id']?>]" size="3" value="<?=$v['listorder']?>" class="input-text-c" type="text"></td>
         <td align='center' ><?=$v['id']?></td>
		<td align='center' ><?=$v['name']?></td>
		<td align='center'><a href="<?=base_url();?>index.php/brand/edit_type/<?=$v['id']?>">修改</a> | <a onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/brand/del_type/<?=$v['id']?>">删除</a></td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="3">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>
     <div class="btn">
		 <a class="button sorting"><i></i><input type="button" value="排序" onclick="myform.action='<?=base_url();?>index.php/brand/order_list_type';myform.submit();"/></a>
	</div>
            
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>

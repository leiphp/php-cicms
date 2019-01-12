<?php $this->load->view('head');?>
<div class="pad-10">

<div class="cate_top">
     <a href="<?=base_url();?>index.php/links/" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/links/add" class="on add_to"><i></i>添加链接</a> 
	 <span>|</span> <a href="<?=base_url();?>index.php/links/status"  class="a">审核链接</a>
	 
	 <span>|</span> <a href="<?=base_url();?>index.php/links/add_type"  class="a">添加类别</a>
	  <span>|</span> <a href="<?=base_url();?>index.php/links/list_type"  class="cur">分类管理</a>
</div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
			  
               <th width="70">分类ID</th>
			   <th width="150">分类名称</th>
			  <th width="100">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
         <td align='center' ><?=$v['id']?></td>
		<td align='center' ><?=$v['name']?></td>
		<td align='center' class="icon">
			<a class="modify" href="<?=base_url();?>index.php/links/edit_type/<?=$v['id']?>"><i></i>修改</a>
			<a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/links/del_type/<?=$v['id']?>"><i></i>删除</a>
		</td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="3">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>
     <div class="btn">

	</div>
            
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>

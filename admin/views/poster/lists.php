<?php $this->load->view('head');?>
<div class="pad-10">

<div class="cate_top">
     <a href="<?=base_url();?>index.php/poster/list_type" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/poster/add_type" class="on add_to"><i></i>添加广告位</a> 
</div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
			   <th width="20"><input type="checkbox" value=""  id="chkAll" onclick="CheckAll(this.form)"></th>
               <th width="50">排序</th>
               <th width="37">ID</th>
			   <th width="110">广告标题</th>
			   <th width="100">所属版块</th>
               <th width="70">状态</th>
               <th width="150">添加时间</th>
			<th width="100">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
		<td align="left"><input class="inputcheckbox " name="id[]" value="<?=$v['id']?>" type="checkbox" /> </td>
         <td align="center"><input name="listorder[<?=$v['id']?>]" size="3" value="<?=$v['listorder']?>" class="input-text-c" type="text"></td>
         <td align='center' ><?=$v['id']?></td>
		<td align='center' ><?=$v['name']?></td>
		<td align='center'><?=$v['typename']?></td>
		<td align='center' class="status">
			<?php if($v['status']==1){echo '<a class="by"><i></i>通过</a>';}else{echo '<a class="wait"><span style="color:red"><i></i>待审核</span></a>';}?>
		</td>
		<td align='center'><?=date('Y-m-d H:i:s',$v['uptime'])?></td>
		<td align='center' class="icon">
			<a class="modify" href="<?=base_url();?>index.php/poster/edit/<?=$v['id']?>"><i></i>修改</a>
			<a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/poster/del/<?=$v['id']?>"><i></i>删除</a>
		</td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="7">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>
     <div class="btn">
    	<a class="button sorting"><i></i><input type="button" value="排序" onclick="myform.action='<?=base_url();?>index.php/poster/order';myform.submit();"/></a>
		<a class="button delete"><i></i><input type="button" value="删除" onclick="javascript:if(ConfirmDel()){myform.action='<?=base_url();?>index.php/poster/del';myform.submit();}"/></a>
	</div>
            
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>

<?php $this->load->view('head');?>
<div class="pad-10">

<div class="cate_top">
     <a href="<?=base_url();?>index.php/member/group_add" class="on add_to"><i></i>增加会员组</a>
     <span>|</span><a href="<?=base_url();?>index.php/member/group_lists" class="on text"><i></i>会员组管理</a> 

  </div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
			  
               <th width="50" align="left">排序</th>
               <th width="100" align="left">会员组ID</th>
			   <th width="200" align="left">会员组名称</th>
			<th width="100" align="left">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
		
         <td align="left"><input name="listorder[<?=$v['id']?>]" size="3" value="<?=$v['listorder']?>" class="input-text-c" type="text"></td>
         <td align='left' ><?=$v['id']?></td>
		<td align='left' ><?=$v['name']?></td>
		<td align='left'  class="icon">
        <a class="modify" href="<?=base_url();?>index.php/member/group_edit/<?=$v['id']?>"><i></i>修改</a>
         <?php if($v['issystem']==1){
		?>
		删除
		<?php }else{?>
		   <a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/member/group_del/<?=$v['id']?>"><i></i>删除</a>
		<?php }?>
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
		 <a class="button sorting"><i></i><input type="button" value="排序" onclick="myform.action='<?=base_url();?>index.php/member/group_order';myform.submit();"/></a>
	</div>
            

</div>
</form>
</div>
</body>
</html>

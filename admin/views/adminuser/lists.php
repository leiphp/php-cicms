<?php $this->load->view('head');?>
<div class="pad-10">
<div class="cate_top">
     <a href="<?=base_url();?>index.php/adminuser/add" class="on add_to"><i></i>增加管理员</a>
  </div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
			 <th width="20"><input type="checkbox" value=""  id="chkAll" onclick="CheckAll(this.form)"></th>
             <th width="50">排序</th>
            <th width="50">用户ID</th>
			<th width="120">用户名</th>
            <th width="150">邮箱</th>
            <th width="200">最后登录时间</th>
            <th width="200">最后登录IP</th>
            <th width="50">登录次数</th>
			<th>管理操作</th>
            </tr>
        </thead>
<tbody>
<?php if(!empty($list)){ foreach ($list as $v){?>
    <tr>
		<td align="left"><input class="inputcheckbox " name="id[]" value="<?=$v['id']?>" type="checkbox" /></td>
        <td align="center"><input name="listorder[<?=$v['id']?>]" size="3" value="<?=$v['listorder']?>" class="input-text-c" type="text"></td>
		<td align='center' ><?=$v['id']?></td>
		<td><?=$v['name']?></td>
        <td><?=$v['email']?></td>
		<td align='center'><?php if($v['logintime']==''){echo date('Y-m-d H:i:s',$v['regtime']);}else{echo date('Y-m-d H:i:s',$v['logintime']);}?></td>
		<td align='center'><?php if($v['loginip']==''){echo $v['regip'];}else{$v['loginip'];}?></td>
         <td align='center'><?=$v['hits']?></td>
		<td align='center' class="icon">
			<a class="modify" href="<?=base_url();?>index.php/adminuser/edit/<?=$v['id']?>"><i></i>修改</a>
			<a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/adminuser/del/<?=$v['id']?>"><i></i>删除</a>
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
		<a class="button sorting"><i></i><input type="button" value="排序" onclick="myform.action='<?=base_url();?>index.php/adminuser/order';myform.submit();"/></a>
		<a class="button delete"><i></i><input type="button" value="删除" onclick="javascript:if(ConfirmDel()){myform.action='<?=base_url();?>index.php/adminuser/del';myform.submit();}"/></a>
	</div>
    <div class="pages"><?=$pages?></div>
    
</div>
</form>
</div>

</body>
</html>

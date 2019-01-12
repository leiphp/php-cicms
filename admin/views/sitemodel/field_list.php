<?php $this->load->view('head');?>
<div class="pad-10">
 <h2 style="color:#049; font-size:14px; line-height:25px; font-weight:bold; border-bottom:1px solid #eee;">模型管理--<?=$data['res']['name']?>字段管理</h2>
<div class="cate_top">
	<a href="<?=base_url();?>index.php/sitemodel/add_field/<?=$data['res']['id']?>" class="on add_to"><i></i>添加字段</a>
	<span>|</span><a href="<?=base_url();?>index.php/sitemodel/field_list/<?=$data['res']['id']?>" class="on text"><i></i>管理模型字段</a>
</div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
            <th width="50">排序</th>
            <th width="80">字段名</th>
			<th width="120">别名</th>
            <th width="120">类型</th>
            <th width="100">系统</th>
            <th width="100">必填</th>
			<th width="100">前台会员显示</th>
			<th width="">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
        <td align="center"><input name="listorder[<?=$v['id']?>]" size="3" value="<?=$v['listorder']?>" class="input-text-c" type="text"></td>
		<td align='center' ><?=$v['field']?></td>
		<td align='center'><?=$v['name']?></td>
        <td align='center'><?=$v['formtype']?></td>
        <td align='center'><?php if($v['issystem']==1){echo "<font color='red'>√</font>";}else{echo "<font color='blue'>×</font>";}?></td>
        <td align='center'><?php if($v['isunique']==1){echo "<font color='red'>√</font>";}else{echo "<font color='blue'>×</font>";}?></td>
		 <td align='center'><?php if($v['isadd']==1){echo "<font color='red'>√</font>";}else{echo "<font color='blue'>×</font>";}?></td>
		<td align='center' style=" color:#999999" class="status icon">
        <a class="modify" href="<?=base_url();?>index.php/sitemodel/edit_field/<?=$v['id']?>"><i></i>修改</a> | 
        <?php if($v['isunique']==0){?>
                  <?php if($v['status']==0){?>
                       <a class="retreat" style="background: #faa732;border: 1px solid #df8d1a;" href="<?=base_url();?>index.php/sitemodel/edit_status/<?=$v['id']?>?modelid=<?=$data['res']['id']?>&status=off"><i></i>禁用</a> | 
                  
				  <?php }else{?>
					   <a class="by" href="<?=base_url();?>index.php/sitemodel/edit_status/<?=$v['id']?>?modelid=<?=$data['res']['id']?>&status=on" style="color:#ff0000"><i></i>启用</a> | 
					<?php }?>
           
        <?php }else{?>
		  禁用  | 
		<?php }?>
        <?php if($v['issystem']==0){?>
            <a class="delete" onclick="return ConfirmDel();" href="<?=base_url();?>index.php/sitemodel/del_field/<?=$v['id']?>?modelid=<?=$data['res']['id']?>"><i></i>删除</a>
        <?php }else{?>
		  删除
		<?php }?>
        </td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="8">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>

       <div class="btn">
		   <a class="button sorting"><i></i><input type="button" value="排序" onclick="myform.action='<?=base_url();?>index.php/sitemodel/order/<?=$data['res']['id']?>';myform.submit();"/></a>
	</div>          
      
</div>
</form>
</div>
</body>
</html>

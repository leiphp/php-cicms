<?php $this->load->view('head');?>
<div class="pad-10">

<style>
.title-2{text-align: left;height: 20px;font: 18px/20px "MicroSoft YaHei","SimHei";color: #333;margin: 0px;padding: 3px 0px  5px 3px;}
.table-list tbody td input{ color: #3333;}
</style>

<div class="cate_top">
     <h1 class="title-2">默认模板 - 列表显示</h1>
  </div>


<form name="myform" id="myform" action="<?=base_url();?>index.php/template/file_update_info" method="post" >
<div class="table-list css" id="template">
    <table width="100%">
       <thead>
		<tr>
		<th align="left" >目录列表</th>
		<th align="left" >说明</th>
		<th align="left" >操作</th>
		</tr>
        </thead>
<tbody>
<tr>
<td align="left" colspan="3"><a href="<?=base_url()?>template/"><img src="<?=base_url()?>views/skin/images/folder-closed.gif" />上一层目录</a></td>
</tr>

<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>

<tr>
   <td align="left"><img src="<?=base_url()?>views/skin/images/file.gif" /> <a href="<?=base_url();?>index.php/template/edit/?style=<?=$data['style']?>&file=<?=$v[0]?>"><b><?=$v[1]?></b></a></td>
   <td align="left"><input type="text" name="file_info[<?=$v[1]?>]" value="<?php echo isset($file_name[$v[1]]) ? $file_name[$v[1]] : ""?>"></td>
   <td class="icon">
    <a class="modify"  href="<?=base_url();?>index.php/template/edit/?style=<?=$data['style']?>&file=<?=$v[0]?>"><i></i>修改</a> | 
    <a class="delete"  onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/template/del/?style=<?=$data['style']?>&file=<?=$v[0]?>"><i></i>删除</a>
   </td>
</tr>



 <?php }}else{?>
				<tr>
					<td colspan="2">暂无数据！</td>
				</tr>	
	<?php } ?> 
    

     </tbody>
     </table>
  <div class="btn">
         <input name="info[style]" type="hidden" value="<?=$data['style']?>">
     <a class="button back"><i></i><input type="button" onclick="location.href='<?=base_url()?>template/'" name="dosubmit" value="返回风格类型" /></a>
     <a class="button new"><i></i><input type="button" name="dosubmit" value="新建"  onclick="location.href='<?=base_url()?>template/add_file?style=<?=$data['style']?>'"/></a> 
     <a class="button update"><i></i><input type="submit" name="dosubmit" value="更新" ></a>
  </div> 
            
      
</div>
</form>
</div>
</body>
</html>

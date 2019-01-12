<?php $this->load->view('head');?>
<div class="pad-10">
  <div class="cate_top">
	<a href="<?=base_url();?>index.php/<$tablename>/" class="on text"><i></i>内容管理</a>
	<span>|</span><a href="<?=base_url();?>index.php/<$tablename>/add" class="on add_to"><i></i>添加内容</a> 
	<span>|</span> <a href="javascript:void(0)"  class="a" onclick="javascript:$('#searchid').css('display','block');">搜索</a>
	<span>|</span> <a href="<?=base_url();?>index.php/<$tablename>/status?status=0"  class="a">待审核</a>
	<span>|</span> <a href="<?=base_url();?>index.php/<$tablename>/status?status=2"  class="a">已退稿</a>
</div>


<div id="searchid" <?php if(!isset($data['get']['search'])){?>style="display:none;"<?php }?>>
<form name="searchform" action="<?=base_url();?>index.php/<$tablename>/search" method="get" >

<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td>
		<div class="explain-col">
        分类：<select name="catid" id="catid">

<?php foreach ($data['category'] as $v){
	     $m=substr_count($v['path'],',')-1;//统计路径的层次，判断分隔符出现的次数
	     $strpad=str_pad('',$m*13,'|&nbsp;&nbsp;');
?>			
		<option value='<?=$v['id']?>' <?php if(!empty($data['get']['catid']) && $data['get']['catid']==$v['id'])echo 'selected';?>><?=$strpad?><?=$v['catname']?></option>
<?php } ?>  
        </select>
        
				关键字：
				<input name="q" type="text" value="" class="input-text" />
                <a class="button"><i></i><input type="submit" name="search" value="搜索" /></a>
	</div>
		</td>
		</tr>
    </tbody>
</table>
</form>
</div>
<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
			 <th width="20"><input type="checkbox" value=""  id="chkAll" onclick="CheckAll(this.form)"></th>
              <th width="50">排序</th>
            <th width="37">ID</th>
			<th>标题</th>
                        <th width="80">分类</th>
			<th width="100">状态</th>
            <th width="40">点击量</th>
            <th width="70">发布人</th>
            <th width="138">发布时间</th>
			<th width="120">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
		<td align="left"><input class="inputcheckbox " name="id[]" value="<?=$v['id']?>" type="checkbox" /> </td>
          <td align="center"><input name="listorder[<?=$v['id']?>]" size="3" value="<?=$v['listorder']?>" class="input-text-c" type="text"></td>
		<td align='center' ><?=$v['id']?></td>
		<td>
		<a href="<?=base_url().'../<$tablename>/show/'.$v['id'].'.html'?>" target="_blank"><?=$v['title']?></a>
		<?php if(!empty($v['image'])){ ?> <img src="<?=base_url();?>views/skin/images/small_img.gif"><?php }?> <?php if($v['position']!='0'){ ?> <img src="<?=base_url();?>views/skin/images/small_elite.gif"><?php }?>
        
        </td>
        <td align='center' ><?php foreach ($data['category'] as $k){if($k['id']==$v['catid']){ echo $k['catname']; } }?>  </td>
		<td align='center'>
		  <?php if($v['status']==0){echo "<div class='red'>待审核</div>";}?>
		  <?php if($v['status']==1){echo "审核通过";}?>
		  <?php if($v['status']==2){echo "<div class='red'>退稿</div>";}?>
		</td>
		<td align='center'><?=$v['hits']?></td>
		<td align='center'><?=$v['username']?></td>
		<td align='center'><?=date('Y-m-d H:i:s',$v['uptime'])?></td>
        
        <td align='center' class="icon">
			<a class="modify" href="<?=base_url();?>index.php/<$tablename>/edit/<?=$v['id']?>"><i></i>修改</a>
			<a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/<$tablename>/del/<?=$v['id']?>"><i></i>删除</a>
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
		 <a class="button ulr"><i></i><input type="button" class="" value="百度url提交" onclick="myform.action='<?=base_url();?>index.php/common/baidu_url/<$tablename>/';myform.submit();"/></a>
		 <a class="button sorting"><i></i><input type="button" class="" value="排序" onclick="myform.action='<?=base_url();?>index.php/<$tablename>/order';myform.submit();"/></a>
		 <a class="button delete"><i></i><input type="button" class="" value="删除" onclick="javascript:if(ConfirmDel()){myform.action='<?=base_url();?>index.php/<$tablename>/del';myform.submit();}"/></a>
	</div>
  
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>

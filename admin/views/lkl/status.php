<?php $this->load->view('head');?>
<div class="pad-10">

<div class="cate_top">
     <a href="<?=base_url();?>index.php/lkl/" class="on"><em>内容管理</em></a>
     <span>|</span><a href="<?=base_url();?>index.php/lkl/add" class="on"><em>添加内容</em></a> 
       <span>|</span> <a href="javascript:void(0)"  class="a" onclick="javascript:$('#searchid').css('display','block');">搜索</a>
        <span>|</span> <a href="<?=base_url();?>index.php/lkl/status?status=0"  class="a">待审核</a>
		<span>|</span> <a href="<?=base_url();?>index.php/lkl/status?status=2"  class="a">已退稿</a>
  </div>


<div id="searchid" <?php if(!isset($data['search'])){?>style="display:none;"<?php }?>>
<form name="searchform" action="<?=base_url();?>index.php/lkl/search" method="get" >

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
		<option value='<?=$v['id']?>'><?=$strpad?><?=$v['catname']?></option>
<?php } ?>  
        </select>
        
				关键字：
				<input name="q" type="text" value="" class="input-text" />
				<input type="submit" name="search" class="button" value="搜索" />
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
            <th width="37">ID</th>
			<th>标题</th>
			<th width="100">状态</th>
            <th width="40">点击量</th>
            <th width="70">发布人</th>
            <th width="118">发布时间</th>
			<th width="72">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
		<td align="left"><input class="inputcheckbox " name="id[]" value="<?=$v['id']?>" type="checkbox" /> </td>
      
		<td align='center' ><?=$v['id']?></td>
		<td>
        <a href="<?=base_url().'../lkl/show/'.$v['id'].'.html?st=shenhe'?>" target="_blank"><?=$v['title']?></a>
		<?php if(!empty($v['image'])){ ?> <img src="<?=base_url();?>views/skin/images/small_img.gif"><?php }?>
          </td>
		<td align='center'>
		  <?php if($v['status']==0){echo "<div class='red'>待审核</div>";}?>
		  <?php if($v['status']==1){echo "审核通过";}?>
		  <?php if($v['status']==2){echo "<div class='red'>退稿</div>";}?>
		</td>
		<td align='center'><?=$v['hits']?></td>
		<td align='center'><?=$v['username']?></td>
		<td align='center'><?=date('Y-m-d H:i:s',$v['uptime'])?></td>
		<td align='center'><a href="<?=base_url();?>index.php/lkl/edit/<?=$v['id']?>">修改</a> | <a onclick="return ConfirmDel();"  href="<?=base_url();?>index.phplkl/del/<?=$v['id']?>">删除</a></td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="7">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>
     <div class="btn">
       <input type="button" class="button" value="通过审核" onclick="myform.action='<?=base_url();?>index.php/lkl/status_ok?status=1';myform.submit();"/>
	 <input type="button" class="button" value="退稿" onclick="myform.action='<?=base_url();?>index.php/lkl/status_ok?status=2';myform.submit();"/>
		<input type="button" class="button" value="删除" onclick="javascript:if(ConfirmDel()){myform.action='<?=base_url();?>index.php/lkl/del';myform.submit();}"/>
	</div>
            
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>

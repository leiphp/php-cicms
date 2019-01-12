<?php $this->load->view('head');?>
<div class="pad-10">

<div class="cate_top">
     <a href="<?=base_url();?>index.php/message/" class="a text"><i></i>内容管理</a>

	 <span>|</span> <a href="<?=base_url();?>index.php/message/status"  class="on review"><i></i>审核留言</a>

  </div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
              <th width="20"><input type="checkbox" value=""  id="chkAll" onclick="CheckAll(this.form)"></th>
               <th width="37">ID</th>
               <th width="180">标题</th>
                <th width="250">内容</th>
			   <th width="100">联系人</th>
               <th width="90">电话</th>
			   <th width="100">邮箱</th>
              
               <th width="60">状态</th>
                <th width="60">回复</th>
               <th width="150">留言时间</th>
			<th width="160">管理操作</th>
            </tr>
        </thead>
<tbody>
     
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
        <td align="left"><input class="inputcheckbox " name="id[]" value="<?=$v['id']?>" type="checkbox" /> </td>
        <td align='center' ><?=$v['id']?></td>
        <td align='center'><?=$v['title']?></td>
        <td align='center'><?=$v['content']?></td>
        
		<td align='center' ><?=$v['name']?></td>
		<td align='center'><?=$v['tel']?></td>
		<td align='center'><?=$v['email']?></td>
		<td align='center' class="status"><?php if($v['status']==1){echo '<a class="by"><i></i>通过</a>';}else{echo "<a class='wait'><span style='color:red'><i></i>待审核</span></a>";}?></td>
		 
		<td align='center' class="status"><?php if(!empty($v['ask'])){echo '<a class="already"><i></i>已回复</a>';}else{echo "<a class='wait2'><span style='color:red'><i></i>待回复</span></a>";}?></td>
		<td align='center'><?=date('Y-m-d H:i:s',$v['uptime'])?></td>
		<td align='center' class="status icon">
			<a class="see" href="<?=base_url();?>index.php/message/edit/<?=$v['id']?>"><i></i>查看并回复</a>
			<a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/message/del/<?=$v['id']?>"><i></i>删除</a>
		</td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="9">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>
     <div class="btn status">
		 <a class="button by"><i></i><input type="button" value="通过审核" onclick="myform.action='<?=base_url();?>index.php/message/status_ok';myform.submit();"/></a>
		 <a class="button delete"><i></i><input type="button" value="删除" onclick="javascript:if(ConfirmDel()){myform.action='<?=base_url();?>index.php/message/del';myform.submit();}"/></a>
	</div>
            
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>

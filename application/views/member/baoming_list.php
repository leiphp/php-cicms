<?php $this->load->view('member/head');?>   
<body>
<?php $this->load->view('member/top');?>
<div class="member_body">
 <div class="member_body_left" id='member_body_left'>
     <?php $this->load->view('member/left_menu');?>     
  </div>
    <div class="member_body_right" id='member_body_right'>
       <?php $this->load->view('member/sys_notice');?>     
<div class="pad-10">
<div class="col-tab">
<ul class="tabBut cu-li"> 
   <li id="tab_setting_1" class="on">我的报名</li>
   
</ul>

<div id="div_setting_1" class="contentList pad-10">
<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
            <th width="37">ID</th>
			<th>标题</th>
            <th width="150">报名时间</th>
			<th width="100">报名手机</th>
			<th width="100">报名qq</th>
			
			<th width="100">管理操作</th>
            </tr>
        </thead>
<tbody>
 <?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
		<td align='center' ><?=$v['id']?></td>
		<td><a href="<?=base_url().$v['model'].'/show/'.$v['id'].'.html'?>" target="_blank"><?=$v['title']?></a></td>
		<td align='center'><?=date('Y-m-d H:i:s',$v['uptime'])?></td>
		<td align='center' ><?=$v['tel']?></td>
		<td align='center' ><?=$v['qq']?></td>
		<td align='center'><a onClick="return ConfirmDel();"  href="<?=base_url();?>member/del_baoming?id=<?=$v['id']?>">删除</a></td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="8">暂无数据！</td>
				</tr>	
	<?php } ?> 
	

     </tbody>
     </table>
        <div class="page"><?=$pages?></div>
</div>
</form> 
    
</div>
</div>
</div>
    </div>        
</div>

<script>
 function file_upload(id) {
      layer.open({
      type: 2,
	  title:'附件上传',
      area: ['380px', '330px'],
      skin: 'layui-layer-rim', //加上边框
      content: ['<?=base_url();?>layer/?id='+id, 'no']
     });
 }
  
</script>
</body>
</html>
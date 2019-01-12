<?php $this->load->view('head');?>
<div class="pad-10">
<div class="cate_top">
     <a href="<?=base_url();?>index.php/member/add" class="on add_to"><i></i>增加会员</a>
       <span>|</span><a href="<?=base_url();?>index.php/member/lists/" class="on text"><i></i>会员管理</a> 
  </div>
<div id="searchid" >
<form name="searchform" action="<?=base_url();?>index.php/member/search" method="get" >
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td>
		<div class="explain-col">
				注册时间：
<!--时间相关附件-->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>views/skin/js/jscal2.css"/> 
<link rel="stylesheet" type="text/css" href="<?=base_url();?>views/skin/js/win2k.css"/> 
<script type="text/javascript" src="<?=base_url();?>views/skin/js/calendar.js"></script> 
<script type="text/javascript" src="<?=base_url();?>views/skin/js/en.js"></script> 
            <input type="text" name="regdate" id="regdate" value="<?php if(!empty($data['get']['regdate']))echo $data['get']['regdate'];?>" size="10" class="date" readonly>&nbsp;<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "regdate",
		    trigger    : "regdate",
		    dateFormat: "%Y-%m-%d",
		    showTime: false,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script>-
				<input type="text" name="regdate_end" id="regdate_end" value="<?php if(!empty($data['get']['regdate_end'])){echo $data['get']['regdate_end'];}else{echo date('Y-m-d',time());}?>" size="10" class="date" readonly>&nbsp;<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "regdate_end",
		    trigger    : "regdate_end",
		    dateFormat: "%Y-%m-%d",
		    showTime: false,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script>															
				
<select name="groupid">
   <option value='' selected>会员组</option>
<?php foreach ($data['category'] as $v){?>			
		<option value='<?=$v['id']?>' <?php if(!empty($data['get']['groupid']) && $v['id']==$data['get']['groupid'])echo 'selected';?>><?=$v['name']?></option>
<?php } ?>  
 </select>				
	<select name="type">
					<option value='username' >用户名</option>
					<option value='m.id' >用户ID</option>
                    <option value='nickname' >昵称</option>
					<option value='email' >邮箱</option>
					<option value='regip' >注册ip</option>
					<option value='regadds' >注册地址</option>
	</select>
               	
				<input name="keyword" type="text" value="<?php if(!empty($data['get']['keyword']))echo $data['get']['keyword'];?>" class="input-text" />
      排序：
		<select name="order">
                     <option value='m.id'  <?php if(!empty($data['get']['order']) && $data['get']['order']=='m.id')echo 'selected';?>>用户ID</option>
					<option value='regdate'  <?php if(!empty($data['get']['order']) && $data['get']['order']=='regdate')echo 'selected';?>>注册时间</option>
					<option value='lastdate' <?php if(!empty($data['get']['order']) && $data['get']['order']=='lastdate')echo 'selected';?>>最后登录时间</option>
					<option value='loginnum' <?php if(!empty($data['get']['order']) && $data['get']['order']=='loginnum')echo 'selected';?>>登录次数</option>
					<option value='overdate' <?php if(!empty($data['get']['order']) && $data['get']['order']=='overdate')echo 'selected';?>>会员过期时间</option>
                    <option value='groupid' <?php if(!empty($data['get']['order']) && $data['get']['order']=='groupid')echo 'selected';?>>会员组</option>
				</select>	           
                
			<span class="explain-col" style="border:none;"><a class="button"><i></i><input type="submit" name="search" value="搜索" /></a></span>
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
            <th align="left">用户ID</th>
			<th align="left">用户名</th>
			<th align="left">昵称</th>
			<th align="left">邮箱</th>
			<th align="left">会员组</th>
			<th align="left">注册地址</th>
            <th align="left">注册时间</th>
			<th align="left">最后登录</th>
            <th align="left">过期时间</th>
            <th align="left">登录次数</th>
			<th align="left">操作</th>
          </tr>
        </thead>
<tbody>
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
		<td align="left"><input class="inputcheckbox " name="id[]" value="<?=$v['id']?>" type="checkbox" /></td>
		<td align='left' ><?=$v['id']?></td>
		<td align="left"><?=$v['username']?></td>
        <td align="left"><?=$v['nickname']?></td>
        <td align="left"><?=$v['email']?></td>
        <td align="left"><?=$v['gname']?></td>
        <td align="left"><?=$v['regadds']?></td>
        <td align='left'><?=date('Y-m-d H:i:s',$v['regdate'])?></td>
		<td align='left'><?php if($v['lastdate']==''){echo date('Y-m-d H:i:s',$v['regtime']);}else{echo date('Y-m-d H:i:s',$v['lastdate']);}?></td>
        <td align='left'><?php if($v['overdate']=='0'){echo '永不过期';}else{echo date('Y-m-d',$v['overdate']);}?></td>
         <td align="left"><?=$v['loginnum']?></td>
		<td align='left' class="icon">
			<a class="modify" href="<?=base_url();?>index.php/member/edit/<?=$v['id']?>"><i></i>修改</a>
			<a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/member/del/<?=$v['id']?>"><i></i>删除</a>
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
		<a class="button delete"><i></i><input type="button" value="删除" onclick="javascript:if(ConfirmDel()){myform.action='<?=base_url();?>index.php/member/del';myform.submit();}"/></a>
	</div>
    <div class="pages"><?=$pages?></div>
    
</div>
</form>
</div>

</body>
</html>

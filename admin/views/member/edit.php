<?php $this->load->view('head');?>
 <script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"密码应该为6-20位之间",empty:true}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
	$("#ppwd").formValidator({onshow:"请输入确认密码",onfocus:"请输入两次密码不同。",oncorrect:"密码输入一致",empty:true}).compareValidator({desid:"password",operateor:"=",onerror:"请输入两次密码不同。"});
	
	$("#email").formValidator({onshow:"请输入邮箱(选填)",onfocus:"邮箱格式错误",oncorrect:"邮箱格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮箱格式错误"});
	
});
//-->
</script> 
<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/member/edit" method="post">
	<ul class="tabBut cu-li"> 
	  <li id="tab_setting_1" class="on">修改管理员</li>
	</ul>
	<div class="pad-10" style="padding-top: 0;">
		<div class="col-tab">

			<div id="div_setting_1" class="contentList pad-10">
			<table width="100%" class="table_form ">

				  <tr>
					<th width="100">用户名：</th>
					<td>
				   <input type="text" name="info[username]" id="username" class="input-text" size="20" value="<?=$data['username']?>" disabled>
					</td>
				  </tr>
				<tr>
					<th>新密码：</th>
					<td><input type="password" name="info[password]" id="password" class="input-text" size="30" value="" ></td>
				  </tr>
			   <tr>
					<th>重复密码：</th>
				   <td><input type="password" name="ppwd" id="ppwd" class="input-text" size="30" value="">
			   </td>
				  </tr>
				   <tr>
					<th>昵称：</th>
					<td>
					  <input type="text" name="info[nickname]" id="nickname" class="input-text" size="20" value="<?=$data['nickname']?>">
					</td>
				 </tr>

				  <tr>
					<th>邮箱：</th>
					<td>
					  <input type="text" name="info[email]" id="email" class="input-text" size="20" value="<?=$data['email']?>">
					</td>
				 </tr>
				  <tr>
					<th>真实姓名：</th>
					<td>
					  <input type="text" name="info[name]" id="name" class="input-text" size="20" value="<?=$data['name']?>">
					</td>
				 </tr>
				  <tr>
					<th>手机：</th>
					<td>
					  <input type="text" name="info[tel]" id="tel" class="input-text" size="20" value="<?=$data['tel']?>">
					</td>
				 </tr>
				  <tr>
					<th>QQ：</th>
					<td>
					  <input type="text" name="info[qq]" id="qq" class="input-text" size="20" value="<?=$data['qq']?>">
					</td>
				 </tr>

					  <tr>
					<th>注册ip：</th>
					<td>
					  <input type="text" name="info[regip]" id="regip" class="input-text" size="20" value="<?=$data['regip']?>">
					</td>
				 </tr>

					  <tr>
					<th>注册地址：</th>
					<td>
					  <input type="text" name="info[regadds]" id="regadds" class="input-text" size="20" value="<?=$data['regadds']?>">
					</td>
				 </tr>

						  <tr>
					<th>注册时间：</th>
					<td>
					  <input type="text" name="info[regdate]" id="regdate" class="input-text" size="25" value="<?=date('Y-m-d h:i:s',$data['regdate'])?>">
					</td>
				 </tr>

					  <tr>
					<th>最后登录时间：</th>
					<td>
					  <input type="text" name="info[lastdate]" id="lastdate" class="input-text" size="25" value="<?=date('Y-m-d h:i:s',$data['lastdate'])?>">
					</td>
				 </tr>
				 <tr>
					<th width="100">会员组：</th>
					<td>
					   <select name="info[groupid]" id="groupid">

			<?php foreach ($data['category'] as $v){?>			
					<option value='<?=$v['id']?>' <?php if($data['groupid']==$v['id']){echo 'selected';}?>><?=$v['name']?></option>
			<?php } ?>  
			 </select>
					</td>
				  </tr>

				   <tr>
					<th>过期时间：</th>
					<td>
					   <!--时间相关附件-->
			<link rel="stylesheet" type="text/css" href="<?=base_url();?>index.php/views/skin/js/jscal2.css"/> 
			<link rel="stylesheet" type="text/css" href="<?=base_url();?>index.php/views/skin/js/win2k.css"/> 
			 <script type="text/javascript" src="<?=base_url();?>index.php/views/skin/js/calendar.js"></script> 
			<script type="text/javascript" src="<?=base_url();?>index.php/views/skin/js/en.js"></script> 
					 <input type="text" name="info[overdate]" id="overdate" value="<?=date('Y-m-d h:i:s',$data['overdate'])?>" size="25" class="date">
					 <script type='text/javascript'>
			  Calendar.setup({
				weekNumbers: true, 
				inputField : 'overdate', 
				trigger    : 'overdate', 
				dateFormat: '%Y-%m-%d %H:%M:%S',
				showTime: true,
				minuteStep: 1, 
				onSelect   : function() {this.hide();} }); </script>
					</td>
				 </tr>  


			</table>

			</div>

			 <div class="col_tab_box" style=" position: relative;background: none;box-shadow: none;">
			   <input name="info[id]" type="hidden" value="<?=$data['id']?>">
				<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
			</div>
		</div>
	</div>
</form>


</body>
</html>

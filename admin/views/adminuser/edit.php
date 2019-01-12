<?php $this->load->view('head');?>
 <script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#userpwd").formValidator({onshow:"请输入密码",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
	$("#ppwd").formValidator({onshow:"请输入确认密码",onfocus:"请输入两次密码不同。",oncorrect:"密码输入一致"}).compareValidator({desid:"userpwd",operateor:"=",onerror:"请输入两次密码不同。"});
	
	$("#email").formValidator({onshow:"请输入邮箱(选填)",onfocus:"邮箱格式错误",oncorrect:"邮箱格式正确",empty:true}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮箱格式错误"});
	
});
//-->
</script> 
<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/adminuser/edit" method="post">
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
					   <input type="text" name="info[name]" id="name" class="input-text" size="20" value="<?=$data['name']?>" disabled>
						</td>
					  </tr>
					<tr>
						<th>新密码：</th>
						<td><input type="password" name="info[userpwd]" id="userpwd" class="input-text" size="30" value="" ></td>
					  </tr>
				   <tr>
						<th>重复密码：</th>
					   <td><input type="password" name="ppwd" id="ppwd" class="input-text" size="30" value="">
				   </td>
					  </tr>
					  <tr>
						<th>邮箱：</th>
						<td>
						  <input type="text" name="info[email]" id="email" class="input-text" size="20" value="<?=$data['email']?>">
						</td>
					 </tr>

				</table>

			</div>

			<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
				<input name="info[id]" type="hidden" value="<?=$data['id']?>">
				<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
			</div>
		</div>
	</div>
</form>


</body>
</html>

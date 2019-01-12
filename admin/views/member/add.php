<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#username").formValidator({onshow:"请输入用户名",onfocus:"用户名应该为4-30位之间"}).inputValidator({min:4,max:20,onerror:"用户名应该为4-20位之间"}).  ajaxValidator({
	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>index.php/member_ajax/ajax_check_username",
 type : "get",
		success : function(data){
            if( data == "1" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "禁止注册或用户已存在。",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
	$("#ppwd").formValidator({onshow:"请输入确认密码",onfocus:"请输入两次密码不同。",oncorrect:"密码输入一致"}).compareValidator({desid:"password",operateor:"=",onerror:"请输入两次密码不同。"});
	$("#nickname").formValidator({onshow:"请输入昵称",onfocus:"昵称应该为2-25位之间"}).inputValidator({min:2,max:25,onerror:"昵称应该为2-25位之间"}).  ajaxValidator({
	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>index.php/member_ajax/ajax_check_nickname",
 type : "get",
		success : function(data){
            if( data == "1" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "该昵称已经存在，请更换一个",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	$("#email").formValidator({onshow:"请输入邮箱",onfocus:"邮箱格式错误",oncorrect:"邮箱格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮箱格式错误"}).ajaxValidator({
	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>index.php/member_ajax/ajax_check_email",
 type : "get",
		success : function(data){
            if( data == "1" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "该邮箱已经存在，请重新输入",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	
});
//-->
</script>


<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/member/add" method="post">
	<ul class="tabBut cu-li"> 
	  <li id="tab_setting_1" class="on">新增会员</li>
	</ul>
	<div class="pad-10" style="padding-top: 0;">

		<div class="col-tab">

			<div id="div_setting_1" class="contentList pad-10">
				<table width="100%" class="table_form ">

					  <tr>
						<th width="100">用户名：</th>
						<td>
					   <input type="text" name="info[username]" id="username" class="input-text" size="20" value="" />
						</td>
					  </tr>
					<tr>
						<th>密码：</th>
						<td><input type="password" name="info[password]" id="password" class="input-text" size="30" value="" /> </td>
					  </tr>
				   <tr>
						<th>重复密码：</th>
						<td><input type="password" name="ppwd" id="ppwd" class="input-text" size="30" value="" />
				   </td>
					  </tr>
				  <tr>
						<th width="100">昵称：</th>
						<td>
					   <input type="text" name="info[nickname]" id="nickname" class="input-text" size="20" value="" />
						</td>
					  </tr>   
					  <tr>
						<th>邮箱：</th>
						<td>
						  <input type="text" name="info[email]" id="email" class="input-text" size="20" value="" />
						</td>
					 </tr>
					<tr>
						<th width="100">会员组：</th>
						<td>
						   <select name="info[groupid]" id="groupid">

				<?php foreach ($data['category'] as $v){?>			
						<option value='<?=$v['id']?>'><?=$v['name']?></option>
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
						 <input type="text" name="info[overdate]" id="overdate" value="" size="25" class="date">
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

            

				

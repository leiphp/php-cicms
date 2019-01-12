<?php $this->load->view('member/head');?>
     
<body>
<?php $this->load->view('member/top');?>
<script type="text/javascript">
function get_captcha() {
    $.get("<?=base_url();?>get_info/code/ajax", function(data){
        $('#captcha-image').html(data);
    });
};
$(function(){
    get_captcha();
    $('#captcha-image').click(get_captcha);
})
</script>

<!--formValidator插件相关-->
<script src="skin/member/js/formValidatorRegex.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="skin/member/js/formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#username").formValidator({onshow:"请输入用户名",onfocus:"用户名应该为4-30位之间"}).inputValidator({min:4,max:20,onerror:"用户名应该为4-20位之间"}).  ajaxValidator({
	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>admin/member_ajax/ajax_check_username",
 type : "get",
		success : function(data){
            if( data == "0" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "用户名不存在",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});
	$("#ppwd").formValidator({onshow:"请输入确认密码",onfocus:"请输入两次密码不同。",oncorrect:"密码输入一致"}).compareValidator({desid:"password",operateor:"=",onerror:"请输入两次密码不同。"});
	$("#code").formValidator({onshow:"请输入验证码",onfocus:"请输入验证码",oncorrect:"输入完成"}).inputValidator({min:4,max:4,onerror:"验证码为4个字符"});
	
	$("#email").formValidator({onshow:"请输入邮箱",onfocus:"此邮箱未注册会员，请重新输入",oncorrect:"邮箱格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮箱格式错误"}).  ajaxValidator({
	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>admin/member_ajax/ajax_check_email",
 type : "get",
		success : function(data){
            if( data == "0" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "此邮箱未注册会员，请重新输入",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	
});
//-->
</script>


  <div class="form_register">
   
<?php if(empty($data['type'])){?> 
 <h2>选择找回密码方式</h2>
    <div class="nav0" style="height:20px;"></div>
<!--选择找回密码方式-->   
    <a href="member/get_password/mibao/" class="bnt_reg" style=" float:left; color:#fff">通过密保问题找回</a>
    <a href="member/get_password/email/" class="bnt_reg" style="float:left; margin-left:20px;color:#fff">通过邮箱找回</a>
<?php }?>    
 
 <?php if($data['type']=='mibao_user'){?> 
  <h2>通过密保问题找回 </h2>
    <div class="nav0" style="height:20px;"></div>
 <!--密保问题，验证用户名-->     
 <form method="post" action="member/get_password/mibao/" id="myform">
    	<div class="input"><label>用户名：</label><input type="text" id="username" name="info[username]" value=""  class="form-control"></div>
        <div class="input"><label>验证码：</label><input type="text" id="code" name="code" class="form-control" style="width:182px;">
		<div class="code_img" id="captcha-image"></div>
		</div>
        	<div class="reg">
            <input name="action" type="hidden" value="sub_user">
            <input name="" type="submit" value="下一步" class="bnt_reg"/>
            </div>
       
</form> 
<?php }?>  

 <?php if($data['type']=='mibao_check_false'){?> 
   <h2>通过密保问题找回</h2>
    <div class="nav0" style="height:20px;"></div> 
 <!--该用户未设置密保-->     
  <div class="alert_danger">抱歉，该用户未设置密保</div>
  <p></p>
    <a href="member/logo/" class="bnt_reg" style="color:#fff;">返回登陆</a>
</form> 
<?php }?>  


 <?php if($data['type']=='mibao_check'){?>
  <h2>验证密保问题</h2>
    <div class="nav0" style="height:20px;"></div> 
 <!--验证密保问题-->     
 <form method="post" action="member/get_password/mibao/" id="myform">
    	<div class="input"><label>问题一：</label><?=$data['user_mibao']['mibao_ques']['ques1']?></div>
        <div class="input"><label>答案一：</label><input type="text" id="ans1" name="info[ans1]" class="form-control" >
        <div class="input"><label>问题二：</label><?=$data['user_mibao']['mibao_ques']['ques2']?></div>
        <div class="input"><label>答案二：</label><input type="text" id="ans2" name="info[ans2]" class="form-control" >
          <div class="input"><label>验证码：</label><input type="text" id="code" name="code" class="form-control" style="width:182px;">
		<div class="code_img" id="captcha-image"></div>
		</div>
        	<div class="reg">
            <input name="action" type="hidden" value="sub_check">
            <input name="" type="submit" value="下一步" class="bnt_reg"/>
            </div>
       
</form> 
<?php }?>  
  <?php if($data['type']=='mibao_reset'){?> 
    <h2>重置密码</h2>
    <div class="nav0" style="height:20px;"></div> 
 <!--重置密码-->   
 <div style="margin-top:20px; margin-left:50px; width:200px;color: #A94442;background-color: #F2DEDE;border-color: #EBCCD1;" class="sys_notice">
    请设置您的新密码
</div>
  
 <form method="post" action="member/get_password/mibao/" id="myform">
    	 <div class="input"><label>密码：</label><input type="password" id="password" name="info[password]"  class="form-control"></div>
        <div class="input"><label>确认密码：</label><input type="password" name="ppwd" id="ppwd"  class="form-control"></div>
          
        	<div class="reg">
            <input name="action" type="hidden" value="sub_reset">
            <input name="" type="submit" value="确定" class="bnt_reg"/>
            </div>
       
</form>   
<?php }?>

 <?php if($data['type']=='email_user'){?> 
  <h2>通过邮箱找回密码 </h2>
    <div class="nav0" style="height:20px;"></div>
 <!--密保问题，验证用户名-->     
 <form method="post" action="member/get_password/email/" id="myform">
    	<div class="input"><label>邮箱：</label><input type="text" id="email" name="info[email]" value=""  class="form-control"></div>
        <div class="input"><label>验证码：</label><input type="text" id="code" name="code" class="form-control" style="width:182px;">
		<div class="code_img" id="captcha-image"></div>
		</div>
        	<div class="reg">
            <input name="action" type="hidden" value="sub_email">
            <input name="" type="submit" value="下一步" class="bnt_reg"/>
            </div>
       
</form> 
<?php }?>

 <?php if($data['type']=='email_send_ok'){?> 
  <h2>通过邮箱找回密码 </h2>
    <div class="nav0" style="height:20px;"></div>
 <!--邮件发送成功-->
   <div class="email_sendok">
    <div class="email_sendok_left"></div>
    <div class="email_sendok_righ">
        <h3>验证邮件已发送成功！</h3>
         验证邮件24小时内有效，请尽快登录您的邮箱点击验证链接完成验证
        </div>
   </div>  

<?php }?> 

 <?php if($data['type']=='email_send_false'){?> 
  <h2>通过邮箱找回密码 </h2>
    <div class="nav0" style="height:20px;"></div>
 <!--邮件发送失败-->
   <div class="email_sendok">
    <div class="email_sendok_left eamil_send_false"></div>
    <div class="email_sendok_righ">
        <h3 style="color:#ff0000">验证邮件发送失败！</h3>
            邮件服务器没有设置，请联系管理员
        </div>
   </div>  

<?php }?>

  <?php if($data['type']=='email_reset'){?> 
    <h2>重置密码</h2>
    <div class="nav0" style="height:20px;"></div> 
 <!--通过邮件重置密码-->   
 <div style="margin-top:20px; margin-left:50px; width:400px;color: #A94442;background-color: #F2DEDE;border-color: #EBCCD1;" class="sys_notice">
    会员名:<span style=" color:#ff0000"><?=$data['member']['username']?></span> 请设置您的新密码
</div>
  
 <form method="post" action="member/get_password/mibao/" id="myform">
    	 <div class="input"><label>密码：</label><input type="password" id="password" name="info[password]"  class="form-control"></div>
        <div class="input"><label>确认密码：</label><input type="password" name="ppwd" id="ppwd"  class="form-control"></div>
          
        	<div class="reg">
            <input name="action" type="hidden" value="sub_reset">
            <input name="" type="submit" value="确定" class="bnt_reg"/>
            </div>
       
</form>   
<?php }?> 
 <?php if($data['type']=='email_reset_false'){?> 
    <h2>重置密码</h2>
    <div class="nav0" style="height:20px;"></div> 
 <!--通过邮件重置密码失败-->   
 <div class="email_sendok">
    <div class="email_sendok_left eamil_send_false"></div>
    <div class="email_sendok_righ">
        <h3 style="color:#ff0000">链接已失效！</h3>
           请重新登陆，<a href="member/login/">点击这里</a>
        </div>
   </div>  
  
  
<?php }?>    

  </div>



</body>
</html>
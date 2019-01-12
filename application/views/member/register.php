<?php $this->load->view('member/head');?>
     
<body>
<?php $this->load->view('member/top');?>

<script type="text/javascript">
function get_captcha() {
    $.get("<?=base_url();?>/get_info/code/ajax", function(data){
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
		url : "<?=base_url();?>admin/member_ajax/ajax_check_nickname",
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
	$("#email").formValidator({onshow:"请输入邮箱",onfocus:"邮箱格式错误",oncorrect:"邮箱格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮箱格式错误"}).  ajaxValidator({
	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>admin/member_ajax/ajax_check_email",
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
	$("#code").formValidator({onshow:"请输入验证码",onfocus:"请输入验证码",oncorrect:"输入完成"}).inputValidator({min:4,max:4,onerror:"验证码为4个字符"});
	
	
});
//-->
</script>


  <div class="form_register">
    <h2>用户注册</h2>
<?php
//判断是否从第三方登陆过来的
$this->load->library("session");
$data=$this->session->userdata('qqsession');
 if(!empty($data)){
 ?>
	<div style="width:400px; background:#FFFCED;border: 1px solid #FFBF7A; margin:10px; padding:10px;">
	登录成功！完善一下信息，立即开始浏览
	<br>已有账号，<a href="member/login" style="color:#ff0000">点击此处，直接绑定</a>
	</div>

<?php }else{  
$data['nickname']=$data['connectid']='';
?> 
  <div style="margin-bottom:20px; margin-left:20px;"><a href="/member/qq_login" target="_blank"><img src="skin/member/images/qq.jpg"></a></div>
<?php }?>	

	<form method="post" action="member/register/" id="myform">
    	<div class="input"><label>用户名：</label><input type="text" id="username" name="info[username]"  class="form-control" value="<?=$data['nickname']?>"></div>
        <div class="input"><label>密码：</label><input type="password" id="password" name="info[password]"  class="form-control"></div>
        <div class="input"><label>确认密码：</label><input type="password" name="ppwd" id="ppwd"  class="form-control"></div>
        <div class="input"><label>邮箱：</label><input type="text" id="email" name="info[email]"  class="form-control"></div>
		<div class="input"><label>昵称：</label><input type="text" id="nickname" name="info[nickname]" class="form-control"  value="<?=$data['nickname']?>"></div>
		<div class="input"><label>验证码：</label><input type="text" id="code" name="code" class="form-control" style="width:182px;">
		<div class="code_img" id="captcha-image"></div>	
		</div>
		
        	<div class="reg">
			<input name="info[connectid]" type="hidden" value="<?=$data['connectid']?>">
                  <input name="" type="submit" value="注册" class="bnt_reg"/>
            </div>
       
</form>
  </div>



</body>
</html>
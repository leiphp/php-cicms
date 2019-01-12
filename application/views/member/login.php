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
	$("#username").formValidator({onshow:"请输入用户名",onfocus:"用户名不能为空",oncorrect:"输入正确"}).inputValidator({min:2,max:50,onerror:"用户名不能为空"});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"密码不能为空",oncorrect:"输入正确"}).inputValidator({min:2,max:50,onerror:"密码不能为空"});
	$("#code").formValidator({onshow:"请输入验证码",onfocus:"请输入验证码",oncorrect:"输入完成"}).inputValidator({min:4,max:4,onerror:"验证码为4个字符"});
	
});
//-->
</script>



<?php
//读取客户cookies信息
$this->load->helper('cookie');
if(get_cookie('member_username')){
    $username=get_cookie('member_username');
    $password=get_cookie('member_password');
}else{
    $username="";
    $password="";
}

?>
  <div class="form_register">
    <h2>用户登陆</h2>
<?php
//判断是否为绑定QQ
$this->load->library("session");
$data=$this->session->userdata('qqsession');
 if(!empty($data)){
 ?>
	<div style="width:400px; background:#FFFCED;border: 1px solid #FFBF7A; margin:10px; padding:10px;">完成登陆后,自动绑定，下次直接用QQ等即可</div>
<?php }else{ ?>
    <div style="margin-bottom:20px; margin-left:20px;"><a href="/member/qq_login" target="_blank"><img src="skin/member/images/qq.jpg"></a></div>
      <div style="width:400px; background:#FFFCED;border: 1px solid #FFBF7A; margin:5px; padding:5px;">还没有帐号,<a href="member/register/" style="color:#ff0000">立即注册</a></div>
<?php }?>			
	<form method="post" action="member/login/" id="myform">
    	<div class="input"><label>用户名：</label><input type="text" id="username" name="info[username]" value="<?=$username?>"  class="form-control"></div>
        <div class="input"><label>密码：</label><input type="password" id="password" name="info[password]" value="<?=$password?>" class="form-control"></div>
        <div class="input"><label>验证码：</label><input type="text" id="code" name="code" class="form-control" style="width:182px;">
		<div class="code_img" id="captcha-image"></div>
		</div>
        <div class="input"><label>记住登录:</label> <input name="info[remember]" checked="" value="1" type="checkbox" class="form-control_remember">  <a href="member/get_password/" style="color:#FF0000">忘记密码？</a></div>
       
        	<div class="reg">
                      <input name="" type="submit" value="登陆" class="bnt_reg"/>
            </div>
       
</form>
  </div>



</body>
</html>
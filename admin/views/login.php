<?php $this->load->view('head');?>
<style>
body{
	background: url(<?=base_url();?>views/skin/images/bg1.jpg) no-repeat 0px 0px;
	font-family: 'Open Sans', sans-serif;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	min-height:820px;
}
</style>

<script type="text/javascript">
function get_captcha() {
    $.get("<?php echo site_url('login/code/ajax');?>", function(data){
        $('#captcha-image').html(data);
    });
};
$(function(){
    get_captcha();
    $('#captcha-image').click(get_captcha);
})
</script>



<?php
//读取客户cookies信息
$this->load->helper('cookie');
 $username=get_cookie('username');
if($username){
    $username=get_cookie('username');
    $pwd=get_cookie('pwd');
}else{
    $username="Username";
    $pwd="password";
}   
?>
 <h1 class="login">后台管理</h1>
<div class="login-form">
		<div class="head-top"></div>

	<div class="avtar"><img src="<?=base_url();?>views/skin/images/avtar.png" /></div>
		<form name="myform" id="myform" action="<?=base_url();?>index.php/login/check_login" method="post">
            <div class="login_input_body">
					<input type="text" class="text" name="info[name]" value="<?=$username?>" onFocus="if(this.value=='<?=$username?>')this.value='';" onBlur="if (this.value == '') {this.value = '<?=$username?>';}" >
					<input type="password" value="<?=$pwd?>" name="info[userpwd]" onFocus="if(this.value=='<?=$pwd?>')this.value='';" onBlur="if (this.value == '') {this.value = '<?=$pwd?>';}">
			<input type="text" value="" name="info[code]" class="code" style="width:100px;">	
			<div class="code_img" id="captcha-image"></div>	
                    <div class="nav0"></div>
                <input name="info[remember]" id="remember-me" type="checkbox" value="1" checked="checked" ><label>Remember me</label>
			</div>
	
    		
	<div class="signin">
		<input type="submit" value="登录"  value="提交">
	</div>
    </form>
    </div>

<div class="copy-rights">
					<p>Copyright &copy; <?=date('Y',time());?> 爱搜客高端建站系统(CICMS)</p>
       	</div>
</body>
</html>
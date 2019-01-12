<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 
 //备注：服务器必须开启  extension=php_openssl.dll
class Mailer {
 
    var $mail;
 
    public function __construct()
    {
        require_once('PHPMailer_5.2.2/class.phpmailer.php');
 
        // the true param means it will throw exceptions on errors, which we need to catch
        $this->mail = new PHPMailer(true);
 
        $this->mail->IsSMTP(); // telling the class to use SMTP
 
        $this->mail->CharSet = "utf-8";                  // 一定要設定 CharSet 才能正確處理中文
        $this->mail->SMTPDebug  = 0;                     // 邮件调试功能  1:开启 0：关闭
        $this->mail->SMTPAuth   = true;                   // 启用 SMTP 验证功能
        $this->mail->SMTPSecure = "ssl";                  // 安全协议，可以注释掉
        $this->mail->Host       = "smtp.qq.com";        // 服务器地址
        $this->mail->Port       = 465;                   //  ssl协议方式端口号
       // $this->mail->Username   = "329255343@qq.com";   // 发送方的邮箱用户名
        $this->mail->Password   = "xxxxx";       // 邮箱密码，一般现在填写授权密码了
       // $this->mail->SetFrom('329255343@qq.com', '系统消息');//设置发件人信息
    }
 //sendmail 参数依次是，收件人，邮件标题，邮件内容，服务器地址，服务器邮箱用户名，邮箱密码，ssl端口号
    public function sendmail($config=array()){
	       
             $this->mail->Host        =$config['smtp_host'];  // 服务器地址
			 $this->mail->Username    =$config['smtp_user'];  // 发送方的邮箱用户名
			 $this->mail->Password    =$config['smtp_pass'];  // 邮箱密码，一般现在填写授权密码了
			 $this->mail->Port        =$config['smtp_port'];  //  ssl协议方式端口号
			 $this->mail->Subject     = $config['title'];      //邮件标题
             $this->mail->Body        =  $config['body'];     //邮件内容
			
		     $this->mail->SetFrom($config['smtp_user'],'系统消息'); //设置发件人信息
             $this->mail->AddAddress($config['test_email'],'');    //设置收件人信息
 

            if(!$this->mail->Send()) {
			    return false;
               // echo 'Mailer Error: ' . $this->mail->ErrorInfo;
            } else {
              // echo "Message sent!恭喜，邮件发送成功！"
			   return true;
            }
			
			
			
      
    }
}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CICMS网站安装程序</title>
<base href="<?=base_url();?>" />
<link href="skin/install/css/setup.css" rel="stylesheet" type="text/css" />

</head>
<body>

<?php
error_reporting(0);
$step=$_GET['step'];
if(!$step){$step=0;}

?>
<div id="header">
	<div id="head">
    	<a href="http://web.aisoker.com" target="_blank"><img src="skin/install/images/logo.png"  height="51" align="left" /></a>
        <a href="http://web.aisoker.com" target="_blank" class="doctitle">爱搜客建站系统(CICMS)网站安装程序</a>
		<div id="link">
		  <ul>
				<li><a href="http://web.aisoker.com" target="_blank"><img src="skin/install/images/index_icon.gif" width="30" height="30" alt="官方网站" /></a></li>
				<li class="nobg"><a href="javascript:void(0)" target="_blank"><img src="skin/install/images/bbs_icon.gif" width="30" height="30" alt="官方论坛" /></a></li>
			</ul>
		</div>
	</div>
</div>

<?php
if($step==0){
?>
<div id="content">
	<div id="cright">
		<div id="install">
			<h2>爱搜客建站（CiCms）  免费开源软件使用许可协议</h2><hr />
			<div id="crs">
				<textarea name="summary" cols="70" rows="10" class="txtArea" id="summary">
  CiCms X 1.0 [译：爱搜客高端建站系统] Php Cms系统免费开源协议声明：

一、版权所有 (c) 2006-2020, aisoker.com  web.aisoker.com 爱搜客建站 保留所有权力.

二、CiCms 由 爱搜客建站 独立开发,全部核心技术归属 广州爱搜客网络科技有限公司（在中国国家版权局著作权登记号为:2016R11L260924）
官方网站为 http://www.aisoker.com ;官方cicms为web.aisoker.com
本授权协议适用于 CiCms 任何版本， 爱搜客建站  拥有对本授权协议的最终解释权和修改权。

三、CiCms企业高端建站系统
     1 、CiCms 著作权已在中华人民共和国国家版权局注册，2016R11L260924 并受到法律和国际公约保护。如果您需要采用CiCms系统的部分程序构架其他程序系统，请务必取得我们的同意和授权，否则我们将追究责任并索赔相关损失！修改后的代码，未经书面许可，严禁公开发布，更不得利用其从事盈利业务；
     2 、所有用户均可查看CiCms 的全部源代码,也可以根据自己的需要对其进行修改!但无论如何，既无论用途如何、是否经过修改或美化、修改程度如何，只要您使用 CiCms 的任何整体或部分程序算法，都必须保留技术支持和 http://www.aisoker.com 的链接地址；
     3 、未经商业授权，不得以除CiCms以外其它任何品牌将本软件用于商业用途(企业网站或以盈利为目的经营性网站)，否则我们将保留
     注：对于违反以上条款，或以任何目的复制或发行 CiCms 的组织或个人，我们将依法追究其法律责任。

四、本授权协议适用于CiCms所有版本，CiCms开发团队拥有对本授权协议的最终解释权，以下为协议许可的权利和约束： 
  I 协议许可的权利 
    1. 您可以在完全遵守本最终用户授权协议的基础上，按官方免费开源协议将本软件合法的应用于商业用途，而不必支付软件版权授权费用； 
    2. 您可以在协议规定的约束和限制范围内修改CiCms源代码(如果被提供的话)或界面风格以适应您的网站要求，但必须将后台界面和源代码信息里保留CiCms官方版权；
    3. 您拥有使用本软件构建的网站中全部网站资料、文章及相关信息的所有权，并独立承担与网站内容的相关法律义务； 
    4. 提交商业应用真实资料备案后，您可以将本软件应用于相应商业用途。

  II 协议规定的约束和限制 
    1. 未提交商业应用真实资料备案之前，不得以除CiCms以外其它任何品牌将本软件用于商业用途（包括但不限于以赚取佣金为目的的网站制作、风格模板定制、功能定制等. 
    3. 无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用CiCms的整体或任何部分，未经书面许可，都必须保留技术支持和 http://www.aisoker.com 的链接地址，而不能清除或修改，一旦发现，责任必纠； 
    4. 禁止在CiCms的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发，一旦发现，官方必追纠相关方法律责任； 
    5. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。 

  III 有限担保和免责声明 
    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的； 
    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在未购买相应产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任； 
    3. CiCms开发团队不对使用本软件构建的网站中的文章或信息承担责任。
    
五、有关CiCms最终用户授权协议、商业授权与技术服务的详细内容，均由CiCms官方网站独家提供。CiCms开发团队拥有在不事先通知的情况下，修改授权协议和备案规则的权力，修改后的协议或备案规则对自改变之日起的新授权用户生效。 

六、电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装CiCms，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。

七、免责声明:
    1 、利用本软件构建的网站的任何信息内容以及导致的任何版权纠纷和法律争议及后果，官方不承担任何责任。
    2 、损坏包括程序的使用(或无法再使用)中所有一般化,特殊化,偶然性的或必然性的损坏(包括但不限于数据的丢失,自己或第三方所维护数据的不正确修改,和其他程序协作过程中程序的崩溃等),官方不承担任何责任。 
				</textarea>
				<a href="<?=base_url()?>install/?step=1" class="button orange step1next">下一步</a>
			</div>
	  </div>
	</div>
</div>

<?php
}elseif($step==1){
?>
<div id="content">
	<div id="ctop">
    	<h1>1.安装须知</h1>
		<div id="steps">
			<ul>
				<li id="selected"><a href="">1</a><span>安装须知</span></li>
				<li><a href="">2</a><span>运行环境检测</span></li>
				<li><a href="">3</a><span>文件权限设置</span></li>
				<li><a href="">4</a><span>帐号设置</span></li>
				<li class="over"><a href="">5</a><span>安装完成</span></li>
			</ul>
		</div>
	</div>
	<div id="cright">
		<div id="install">
			<div id="crs">
				<h3>（一）运行环境需求</h3>
				<p>* 可用的 httpd 服务器（如 Apache，IIS，Nginx 等）</p>
				<p>* PHP 5.0 及以上 </p>
				<p>* Mysql 使用5.0以上(请使用4.3以下版本的用户，先升级您的数据库到5.x版本)</p>
				<p>&nbsp;</p>
				<h3>（二）程序安装步骤</h3>
				<p>* 第一步：使用ftp工具中的"二进制模式"将本软件包 CiCms 目录内容上传至服务器根目录。</p>
				<p>* 第二步：访问 http://yourwebsite/install 进入安装程序，根据安装向导提示完成安装。</p>
                <a href="<?=base_url()?>install" class="orange button back">上一步</a>
				<a href="<?=base_url()?>install/?step=2" class="orange button next">下一步</a>
			</div>
		</div>
	</div>
</div>


<?php
}elseif($step==2){
$PHP_GD = '';
if(extension_loaded('gd'))
{
	if(function_exists('imagepng')) $PHP_GD .= '.png';
	if(function_exists('imagejpeg')) $PHP_GD .= ' .jpg';
	if(function_exists('imagegif')) $PHP_GD .= ' .gif';
}
?>
<div id="content">
	<div id="ctop">
    	<h1>2.运行环境检测</h1>
		<div id="steps">
			<ul>
				<li><a href="">1</a><span>安装须知</span></li>
				<li id="selected"><a href="">2</a><span>运行环境检测</span></li>
				<li><a href="">3</a><span>文件权限设置</span></li>
				<li><a href="">4</a><span>帐号设置</span></li>
				<li class="over"><a href="">5</a><span>安装完成</span></li>
			</ul>
		</div>
	</div>
	<div id="cright">
		<div id="install">
			<div id="crs">
				<table width="100%" cellpadding="0" cellspacing="0" class="table_list">
                  <tr>
                    <th width="97">检查项目</th>
                    <th width="306">当前环境</th>
                    <th width="194">建议环境</th>
                    <th width="68">功能影响</th>
                  </tr>
                  <tr>
                    <td>操作系统</td>
                    <td><?php echo php_uname();?></td>
                    <td>Windows_NT/Linux/Freebsd</td>
                    <td align="center"><span class="yellow">√</span></td>
                  </tr>
                  <tr>
                    <td>web 服务器</td>
                    <td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
                    <td>Apache/Nginx/IIS</td>
                    <td align="center"><span class="yellow">√</span></td>
                  </tr>
                  <tr>
                    <td>php 版本</td>
                    <td><?php echo phpversion();?></td>
                    <td>php 5.0 及以上</td>
                    <td align="center"><?php if(phpversion() >= '5.0.0'){ ?><span class="yellow">√<?php }else{ ?><span class="red">无法安装</span><?php }?></td>
                  </tr>
                  <tr>
                    <td>mysql 扩展</td>
                    <td><?php if(extension_loaded('mysql')){ ?>√<?php }else{ ?>×<?php }?></td>
                    <td>建议开启</td>
                    <td align="center"><?php if(extension_loaded('mysql')){ ?><span class="yellow">√</span><?php }else{ ?><span class="red">无法安装</span><?php }?></td>
                  </tr>
                  <tr>
                    <td>gd 扩展</td>
                    <td><?php if($PHP_GD){ ?>√ （支持 <?php echo $PHP_GD;?>）<?php }else{ ?>×<?php }?></td>
                    <td>建议开启</td>
                    <td align="center"><?php if($PHP_GD){ ?><span class="yellow">√</span><?php }else{ ?><span class="red">不支持缩略图和水印</span><?php }?></td>
                  </tr>

                </table>
				<a href="<?=base_url()?>install/?step=1" class="orange button back">上一步</a>
				<a href="<?=base_url()?>install/?step=3" class="orange button next">下一步</a>
			</div>
		</div>
	</div>
</div>
<?php 
}elseif($step==3){

?>

<div id="content">
	<div id="ctop">
    	<h1>3.文件权限设置</h1>
		<div id="steps">
			<ul>
				<li><a href="">1</a><span>安装须知</span></li>
				<li><a href="">2</a><span>运行环境检测</span></li>
				<li id="selected"><a href="">3</a><span>文件权限设置</span></li>
				<li><a href="">4</a><span>帐号设置</span></li>
				<li class="over"><a href="">5</a><span>安装完成</span></li>
			</ul>
		</div>
	</div>
	<div id="cright">
		<div id="install">
			<div id="crs">
				<table class="tb"
				<tr><th align="left">目录文件权限检测[需 766 或 777 权限]</th><th align="left">所需状态</th><th align="left">当前状态</th></tr>
				<tr><td>install/</td><td class="right">可写</td><?php echo file_mode_info('install/')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>upload/</td><td class="right">可写</td><?php echo file_mode_info('upload/')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?>
				<tr><td>config.php</td><td class="right">可写</td><?php echo file_mode_info('config.php')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>

				
				</table>
				<p class="orword">*【linux系统 务必 /upload,install/目录设可写权限766或777；】</p>
				<p class="orword">*【如果您需要在后台备份数据库需要对&nbsp;&nbsp;/admin/cache目录设可写权限666或777；】</p>
				<p class="orword">*【linux系统 务必 根目录/config.php文件设可写权限666或777；】</p>
				<p class="orword">*【注：强烈建议您在程序安装后将setup目录删除或移走到虚拟主机以外的目录】</p>
				<a href="<?=base_url()?>install/?step=2" class="orange button back">上一步</a>
				<a href="<?=base_url()?>install/?step=4" class="orange button next">下一步</a>
			</div>
		</div>
	</div>
</div>

<?php

}elseif($step==4){


$rpath=str_replace('/setup/setup.php','',$_SERVER['SCRIPT_NAME']);
?>
<div id="content">
	<div id="ctop">
    	<h1>4.帐号设置</h1>
		<div id="steps">
			<ul>
				<li><a href="">1</a><span>安装须知</span></li>
				<li><a href="">2</a><span>运行环境检测</span></li>
				<li><a href="">3</a><span>文件权限设置</span></li>
				<li id="selected"><a href="">4</a><span>帐号设置</span></li>
				<li class="over"><a href="">5</a><span>安装完成</span></li>
			</ul>
		</div>
	</div>
	<div id="cright">
		<div id="install">
			<div id="crs">
			<form id="form1" name="form1" method="post" action="<?=base_url()?>install/?step=5" onsubmit="return next();">
				<p class="tdtbtitle">1.设置数据库信息：</p>
				 <ul class="tdtb">
					<li><span>主机名称：</span>
                    <div class="tdtbrt"><input name="dbhost" type="text" id="dbhost" value="localhost" />(99%的情况下不需要修改)</div>
                    </li>
					<li><span>用户名：</span>
					  <div class="tdtbrt"><input name="uname" type="text" id="uname" value="root" />
					(空间商分配给你的数据库管理用户名)</div></li>
					<li><span>密&nbsp;&nbsp;&nbsp;&nbsp;码：</span>
					  <div class="tdtbrt"><input name="pwd" type="text" id="pwd" value="root" />
					(空间商分配给你的数据库管理密码)</div></li>
					<li><span>数据库名称 ：</span>
					  <div class="tdtbrt"><input name="dbname" type="text" id="dbname" value="cicms" /> 
					  (空间商分配给你的数据库名称,如果没有请先创建)</div></li>
           
						
	
						<li><span>Mysql 数据库版本 ：</span>
							<div class="tdtbrt">5.x<input name="mysqlver" type="radio" id="mysqlver" value="1" checked="checked" />&nbsp;&nbsp;&nbsp;&nbsp; (如果您的数据库版本是4.x版本,请升级您的数据库到5.x版本)</div>
						</li>
					</ul>
					<p class="tdtbtitle">2.设置站点信息：</p>
					<ul class="tdtb">
						<li><span>创始人邮箱 ：</span>
							<div class="tdtbrt"><input name="mail" type="text" id="mail" value="admin@localhost" /></div></li>
						<li><span>后台用户名 ：</span>
							<div class="tdtbrt"><input name="adminname" type="text" id="adminname" value="admin" /></div>
						 </li>
						
						<li><span>后台初始密码 ：</span>
						 	<div class="tdtbrt"><input name="adminpwd" type="text" id="adminpwd" value="admin" /> (设置后台登陆的密码,请输入20位以内的字母或数字)</div>
						 </li>
					</ul>
                    <p id="idoc" class="dis"></p>
				<input type="button" name="button" onclick="history.back(1)" value="上一步" class="orange button back" />
				<input type="submit" name="Submit" value="下一步" class="orange button next" />
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
}elseif($step==5){

  $n_dbhost=$_POST['dbhost'];
  $n_uname=$_POST['uname'];
  $n_pwd=$_POST['pwd'];
  $n_dbname=$_POST['dbname'];
  
  $a_email=$_POST['mail'];
  $a_admin=$_POST['adminname'];
  $a_pwd=$_POST['adminpwd'];
  
  if(empty($a_email)){echo "邮箱不能为空！";exit;}
  if(empty($a_admin)){echo "初始用户名不能为空！";exit;}
  if(empty($a_pwd)){echo "初始密码不能为空！";exit;}
  

 /******************连接数据源**********************/
	$conn=mysql_connect($n_dbhost,$n_uname,$n_pwd) or die("数据库连接失败".mysql_error());//链接MYsql服务器
    mysql_select_db($n_dbname,$conn) or die ($n_dbname.'数据表不存在。 ');
	mysql_query("set names utf8");//设置数据库编码格式，以屏蔽乱码
/*************************************************/ 
//读写CiCms.lock
if(!string2file('','install/cicms.lock')){
	echo '根目录/install/文件夹未开启写权限。';exit;
}


//读写配置文件
//初始化配置文件
$data["wl_page"]["product"]=6;
$data["wl_page"]["solution"]=6;
$data["wl_page"]["anli"]=6;
$data["wl_page"]["news"]=6;
$data["wl_page"]["brand"]=30;
$data["wl_page"]["message"]=5;
$data["wl_page"]["search"]=6;
//数据库配置
$data["wl_db"]["hostname"]=$n_dbhost;
$data["wl_db"]["username"]=$n_uname;
$data["wl_db"]["password"]=$n_pwd;
$data["wl_db"]["database"]=$n_dbname;
//水印信息配置
$data["wl_water"]["action"]='false';
$data["wl_water"]["min_image_w"]=300;
$data["wl_water"]["min_image_h"]=198;
//编辑器远程图片自动下载
$data["wl_down"]["action"]='true';
$data["wl_down"]["max_image_w"]=600;
//搜索引擎链接提交
$data["wl_url"]["baidu"]="";
//调试信息配置
$data["wl_ts"]["db_debug"]='false';
$data["wl_ts"]["db_debug_file"]='false';
$data["wl_ts"]["error"]='false';
$data["wl_ts"]["cache"]='false';

//循环分页配置
        $res="";
		$res.="//分页配置\r\n";
		foreach($data["wl_page"] as $key=>$v){
		  $res=$res.'$GLOBALS["wl_page"]["'.$key.'"]='.$v.";\r\n";
		  
		}
		
		//循环数据库配置
		$res.="//数据库配置\r\n";
		foreach($data["wl_db"] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_db"]["'.$key.'"]="'.$v.'"'.";\r\n";
		  
		}	
		//循环水印配置
		$res.="//水印信息配置\r\n";
		foreach($data['wl_water'] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_water"]["'.$key.'"]='.$v.";\r\n";
		}
		
	   //编辑器远程图片自动下载
		$res.="//编辑器远程图片自动下载\r\n";
		foreach($data['wl_down'] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_down"]["'.$key.'"]='.$v.";\r\n";
		}
			
	   //搜索引擎链接提交
		$res.="//搜索引擎链接提交\r\n";
		foreach($data['wl_url'] as $key=>$v){
		   $res=$res.'$GLOBALS["wl_url"]["'.$key.'"]="'.$v.'"'.";\r\n";
		}
		
		
		 //循环调试信息配置
		$res.="//调试信息配置\r\n";
		foreach($data['wl_ts'] as $key=>$v){
		  $res=$res.'$GLOBALS["wl_ts"]["'.$key.'"]='.$v.";\r\n";
		}
		
		

		$res="<?php \r\n".$res."\r\n?>";
		//写入信息
		$this->load->helper('file');
		write_file('config.php', $res);
           
//读写配置文件结束		

//运行初始SQL语句
$sqlFile='install/sql.sql';
$sql_setup=file2String($sqlFile);//提取SQL语句

$sql_setup=str_replace("<{@user@}>",$a_admin,$sql_setup);
$sql_setup=str_replace("<{@pwd@}>",md5($a_pwd),$sql_setup);
$sql_setup=str_replace("<{@email@}>",$a_email,$sql_setup);


$sql_arr=explode('@@ww@@',$sql_setup);//转成数组，循环执行SQL语句
foreach ($sql_arr as $sql_o)
{ 
    if(str_replace(" ","",$sql_o)){
				 mysql_query($sql_o);
    }

}
?>
<div id="content">
	<div id="ctop">
    	<h1>5.安装完成</h1>
		<div id="steps">
			<ul>
				<li><a href="">1</a><span>安装须知</span></li>
				<li><a href="">2</a><span>运行环境检测</span></li>
				<li><a href="">3</a><span>文件权限设置</span></li>
				<li><a href="">4</a><span>帐号设置</span></li>
				<li id="selected" class="over"><a href="">5</a><span>安装完成</span></li>
			</ul>
		</div>
	</div>
	<div id="cright">
		<div id="install">
			<div id="crs">
				<ul class="tdtb">
					<li class="orword">* 注：强烈建议您在程序安装后将 install/ 目录删除或移走到虚拟主机以外的目录;</li>
					<li>&nbsp;&nbsp;&nbsp;您网站后台默认登陆用户名：<strong>###</strong></li>
					<li>&nbsp;&nbsp;&nbsp;您网站后台默认登陆密码：<strong>###</strong></li>
					<li>&nbsp;&nbsp;&nbsp;您现在已经可以浏览网站的首页：<a target="_blank" href='<?=base_url()?>'>点击进入网站首页</a></li>
					<li>&nbsp;&nbsp;&nbsp;也可以进入后台管理系统进行管理：<a target="_blank" href='<?=base_url()?>admin/index.php'>进入网站后台/admini/</a></li>
					<li>&nbsp;&nbsp;&nbsp;安全起见，请将 install/ 目录删除。并将根目录下的config.php文件权限设置为 766 或 777。</li>
				</ul>
				<p>	<a href="<?=base_url()?>" class="button orange step1next">完成</a></p>
			</div>
		</div>
	</div>
</div>
<?php
}
?>
<div class="clear"></div>
<div id="foot">
	<div id="bottom">
    	<a href="http://web.aisoker.com" target="_blank" class="btmlogo"><img src="skin/install/images/bottom_logo.png" /></a>
        <span>© 2006-<?=date('Y',time())?> CiCms X. All rights reserved. </span>
        
    </div>
</div>

</body>
</html>
<?php
//想文本文件读取成字符串
function file2String($filePath)
{
	$fp = fopen($filePath,"r");
	$content_= fread($fp, filesize($filePath));
	fclose($fp);
	return $content_;

}

//生成新的文件($str为字符串,$filePath为生成时的文件路径包括文件名)
function string2file($str,$filePath)
{
	$fp=fopen($filePath,'w+');
	if(!$fp)return false;
	if(fwrite($fp,$str)=== false)return false;
	fclose($fp);
	return true;
}
//判断文件是否可写
function file_mode_info($file_path)
{
    /* 如果不存在，则不可读、不可写、不可改 */
    if (!file_exists($file_path))
    {
        return false;
    }
    $mark = 0;
    if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')
    {
        /* 测试文件 */
        $test_file = $file_path . '/cf_test.txt';
        /* 如果是目录 */
        if (is_dir($file_path))
        {
            /* 检查目录是否可读 */
            $dir = @opendir($file_path);
            if ($dir === false)
            {
                return $mark; //如果目录打开失败，直接返回目录不可修改、不可写、不可读
            }
            if (@readdir($dir) !== false)
            {
                $mark ^= 1; //目录可读 001，目录不可读 000
            }
            @closedir($dir);
            /* 检查目录是否可写 */
            $fp = @fopen($test_file, 'wb');
            if ($fp === false)
            {
                return $mark; //如果目录中的文件创建失败，返回不可写。
            }
            if (@fwrite($fp, 'directory access testing.') !== false)
            {
                $mark ^= 2; //目录可写可读011，目录可写不可读 010
            }
            @fclose($fp);
            @unlink($test_file);
            /* 检查目录是否可修改 */
            $fp = @fopen($test_file, 'ab+');
            if ($fp === false)
            {
                return $mark;
            }
            if (@fwrite($fp, "modify test.\r\n") !== false)
            {
                $mark ^= 4;
            }
            @fclose($fp);
            /* 检查目录下是否有执行rename()函数的权限 */
            if (@rename($test_file, $test_file) !== false)
            {
                $mark ^= 8;
            }
            @unlink($test_file);
        }
        /* 如果是文件 */
        elseif (is_file($file_path))
        {
            /* 以读方式打开 */
            $fp = @fopen($file_path, 'rb');
            if ($fp)
            {
                $mark ^= 1; //可读 001
            }
            @fclose($fp);
            /* 试着修改文件 */
            $fp = @fopen($file_path, 'ab+');
            if ($fp && @fwrite($fp, '') !== false)
            {
                $mark ^= 6; //可修改可写可读 111，不可修改可写可读011...
            }
            @fclose($fp);
            /* 检查目录下是否有执行rename()函数的权限 */
            if (@rename($test_file, $test_file) !== false)
            {
                $mark ^= 8;
            }
        }
    }
    else
    {        
        if (@is_writable($file_path))
        {
            $mark ^= 14;
        }
/*		if (@is_readable($file_path))
        {
            $mark ^= 1;
        }*/
    }
    return $mark;
}
?>
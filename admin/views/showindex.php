<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<base href="<?=base_url();?>index.php/views/skin/"/>
<link href="<?=base_url();?>views/skin/css/wl_css.css" rel="stylesheet" type="text/css" />
</head>
<style>
	.title{ line-height: 20px; font-size: 16px; margin-bottom: 10px;}
</style>
<body>
<div>
	<ul class="ind_class_list">
	
		<li><a href="<?=base_url();?>index.php/category/"><img src="<?=base_url();?>views/skin/images/icons/icon2.png"/><p>栏目设置</p><span><?=$data['count_ca']?></span></a></li>
        
<?php if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
<li><a href="<?=base_url();?>index.php/<?=$v['tablename']?>"><img src="<?=base_url();?>views/skin/images/icons/icon3.png"/><p><?=$v['name']?></p><span><?=$v['count']?></span></a></li>
 <?php } }?>

		<div class="clear"></div>
	</ul>
	<div class="clear"></div>
</div>
<div class="admin_avatar">
	<dl class="search_class">
		<span class="bt1"></span>
		<span class="bt2"></span>
		<h3 class='bh'>
			<div class="img"><img src="<?=base_url();?>views/skin/images/avtar.png"/><span></span></div>
			<div class="name">
				<h5><?=$this->user_info['name']?></h5><p>欢迎登录管理后台</p>
				<div class="admin_text">
				上次登录时间：<?php if($this->user_info['logintime']==''){echo date('Y-m-d H:i:s',$this->user_info['regtime']);}else{echo date('Y-m-d H:i:s',$this->user_info['logintime']);}?> <br>
				上次登录IP：<?=$this->user_info['regip']?>  <br>
				登陆次数：<?=$this->user_info['hits']?> 
				</div>
			</div>
			<div class="clear"></div>
		</h3>
		
		<div class="system_message">
			<div class='title'><i></i>系统信息</div>
			<div style='line-height:22px;width:90%;'>                   
			  操作系统：<?=$_SERVER['HTTP_USER_AGENT']?> <br>
			服务器软件：<?=$_SERVER['SERVER_SOFTWARE']?><br>
			MySQL 版本：<?=mysql_get_server_info()?><br>
			当前登录IP：<?=$this->input->ip_address() ?><br>	
			<?php
			  $this->config->load('edition');
			?>
			当前系统版本：<?=$this->config->item('edition');?><br>

						</div>
		</div>
	
		<div class="clear"></div>
	</dl>
</div>

<div class="technology">
	<div class="technology_l">
		<div class='title'><i></i> 技术支持</div>
		<ul>
			<li class="li1">
				<h3><i></i>支持企业</h3>
				<p><a href="http://www.aisoker.com/" target="_blank">广州市爱搜客网络科技有限公司</a></p>
			</li>
			<li class="li2">
				<h3><i></i>联系电话</h3>
				<p>020-29801628&nbsp;&nbsp;&nbsp;</p>
			</li>
			<li class="li3">
				<h3><i></i>客服Q Q</h3>
				<p>QQ:329255343&nbsp;&nbsp;技术交流群：127854510</p>
			</li>
			<li class="li4">
				<h3><i></i>公司网址</h3>
				<p><a href="http://www.aisoker.com/" target="_blank">www.aisoker.com</a></p>
			</li>
		</ul>
		
	</div>
	<!--  technology_l-->
	
	
</div>

</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 网站后台管理系统 </title>
<base href="<?=base_url();?>views/skin/"/>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/util.js" type="text/javascript"></script>

</head>
<body>
<div id="top_data">
    <div id="logo">
       <a href="<?=base_url();?>index.php"><img src="../skin/images/logo.png"/></a>
     
    </div>
    <div class="top-text">
   <a class="clear_cache" href="<?=base_url();?>index.php/my_cache/chearall">清除缓存</a>
       <a class="home" href="<?=base_url().'../'?>" target="_blank">网站主页</a>
        <a href="<?=base_url();?>index.php/login/out_login" class="logout">退出系统</a>
    </div>
</div>
<div class="clear"></div>
<div id="left_panel">
    <ul id="nav_class"></ul>
    <div class="switch-content">
    <a href="javascript:;" class="open" onclick="SidbarControl.ShowSec();">全部展开</a>
    <a href="javascript:;" class="close" onclick="SidbarControl.HideSec();">全部收起</a>
    </div>
    <ul id="nav_list"></ul>
</div>
<div id="main">
    <div id="top_menu">
        <div class="top_menu_box">
            <div class="top_menu_contents" id="js_menu_contents"></div>
        </div>
        <a href="javascript:;" class="btn left disabled" id="js_tab_left_btn">向左</a><a href="javascript:;" class="btn right disabled" id="js_tab_right_btn">向右</a></div>
    <ul id="handle">
        <li class="refresh"><a href="javascript:;" onclick="TopMenuControl.Refresh();">刷新(ctrl+q)</a></li>
        <li class="screen" id="js_screen_li"><a href="javascript:;" onclick="MainAPI.FullScreen();">全屏(ctrl+i)</a></li>
        <li class="undo" id="js_undo_li" style="display:none;"><a href="javascript:;" onclick="MainAPI.UndoScreen();">还原(ctrl+u)</a></li>
        <li class="close-all"><a href="javascript:;" onclick="TopMenuControl.Close();">关闭全部</a></li>
    </ul>
    <div id="main_frame"></div>
</div>
	<div class="link">
		©<?=date('Y',time())?> 广州爱搜客网络科技有限公司&nbsp;&nbsp;<a href="http://www.aisoker.com" target="_blank">www.aisoker.com</a>
	</div>
<script type="text/javascript">
    //加载后台菜单数据
    var MenuData = {
        '1': {Text:'常用'},
   '2':{Text:'内容管理',Parent:'1'},
        <?=$menu?>
      '28':{Text:'单页管理',Parent:'2',url:'<?=base_url();?>index.php/page/'},
	  '29':{Text:'审核文章',Parent:'2',url:'<?=base_url();?>index.php/check_article/'},
   '30':{Text:'相关设置',Parent:'1'},
	  '31':{Text:'网站设置',Parent:'30',url:'<?=base_url();?>index.php/setting/'},
      '32':{Text:'栏目分类',Parent:'30',url:'<?=base_url();?>index.php/category/'},
   '40':{Text:'其他模块管理',Parent:'1'},
      '41':{Text:'友情链接',Parent:'40',url:'<?=base_url();?>index.php/links/'},
      '42':{Text:'广告管理',Parent:'40',url:'<?=base_url();?>index.php/poster/list_type'},
    '43':{Text:'留言管理',Parent:'40',url:'<?=base_url();?>index.php/message/'},
   '50': {Text:'系统'},
   '60':{Text:'帐号管理',Parent:'50'},
       '61':{Text:'系统账号管理',Parent:'60',url:'<?=base_url();?>index.php/adminuser/'},
      '62':{Text:'我的权限',Parent:'60',url:'<?=base_url();?>index.php/welcome/info',Default:true},
   '70':{Text:'网站配置',Parent:'50'},
      '71':{Text:'自定义标签',Parent:'70',url:'<?=base_url();?>index.php/setting/field'},
      '72':{Text:'推荐位管理',Parent:'70',url:'<?=base_url();?>index.php/position/'},
	  '73':{Text:'模型管理',Parent:'70',url:'<?=base_url();?>index.php/sitemodel/'},
   '80':{Text:'系统工具',Parent:'50'},
      '81':{Text:'模板风格',Parent:'80',url:'<?=base_url();?>index.php/template/'},
	  '82':{Text:'数据库工具',Parent:'80',url:'<?=base_url();?>index.php/db/'}
    }
</script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

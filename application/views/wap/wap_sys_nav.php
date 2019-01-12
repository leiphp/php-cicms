<?php
/*
返回网站路径

*/
$nav_p=" > ";//定义分隔符
$nav_start="您当前位置：";//开始字符串

if($category['tablename']=='page'){
//单页面
		//顶级栏目
		$sys_nav=$nav_start.'<a href="">首页</a>'.$nav_p.'<a href="article/'.$top_category['id'].'.html">'.$top_category['catname'].'</a>';
		
		//父栏目
		if($top_category['id']!=$parent_category['id']){
		 $sys_nav.=$nav_p.'<a href="article/'.$top_category['id'].'.html">'.$parent_category['catname'].'</a>';
		}
		
		//当前栏目
		if($category['id']!=$parent_category['id']){
		 $sys_nav.=$nav_p.'<a href="article/'.$category['id'].'.html">'.$category['catname'].'</a>';
		}

}else{
//模型页面

		//顶级栏目
		$sys_nav=$nav_start.'<a href="">首页</a>'.$nav_p.'<a href="'.$top_category['tablename'].'/">'.$top_category['catname'].'</a>';
		
		if(isset($top_category['id'])){
			//父栏目
			if($top_category['id']!=$parent_category['id']){
			 $sys_nav.=$nav_p.'<a href="'.$parent_category['tablename'].'/lists/'.$parent_category['id'].'/" />'.$parent_category['catname'].'</a>';
			}
			
			//当前栏目
			if($category['id']!=$parent_category['id']){
			  $sys_nav.=$nav_p.'<a href="'.$category['tablename'].'/lists/'.$category['id'].'/" />'.$category['catname'].'</a>';
			}
			
			//详情页加标题
			if(isset($data['res']['title'])){
			 $sys_nav.=$nav_p.$data['res']['title'];
			}
       }

}


//输出路径
echo $sys_nav;
?>


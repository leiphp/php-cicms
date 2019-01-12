<?php
/*网站标题原则
列表页：栏目名称+全站标题。 如果栏目seo标题不为空，则取栏目seo

详情页：文章标题+栏目名称+全站标题  如果栏目seo标题不为空，则 文章标题+栏目seo
*/


//获取标题
//获取当前栏目名称
if(!empty($category['catname'])){
  $seo_title=$category['catname']." - ".$setting['title'];
}
//如果当前栏目seo不为空
if(!empty($category['seotitle'])){
  $seo_title=$category['seotitle'];
}

//详情页，不包括单页面
if(!empty($data['res']['title']) &&  $this->uri->segment(1)!='article'){
  $seo_title=$data['res']['title'].' - '.$seo_title;
  
}

if(empty($seo_title)){
    $seo_title=$setting['title'];
}
$w_page=@$_GET['page'];
if(!empty($w_page)){$seo_title=$seo_title.'-第'.$w_page.'页';}


//下面获取关键字

//如果当前栏目seo不为空
if(!empty($category['seokeyword'])){
  $seo_key=$category['seokeyword'];
}

if(empty($seo_key)){
    $seo_key=$setting['keywords'];
}
//详情页
if(!empty($data['res']['keyword'])){
  $seo_key=$data['res']['keyword']; 
}
$seo_key=str_replace(" ",",",$seo_key);//将英文空格替换成逗号
$seo_key=str_replace("　",",",$seo_key);//将中文空格替换成逗号



//下面获取描述

//如果当前栏目seo不为空
if(!empty($category['seodescription'])){
  $seo_description=$category['seodescription'];
}

if(empty($seo_description)){
    $seo_description=$setting['description'];
}
//详情页
if(!empty($data['res']['des'])){
  $seo_description=$data['res']['des']; 
}


?>
<title><?php echo $seo_title;?></title>
<meta name="keywords" content="<?php echo $seo_key;?>">
<meta name="description" content="<?php echo $seo_description;?>">
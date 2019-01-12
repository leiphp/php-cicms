<?php 
$route["default_controller"] = "index"; 
$route["404_override"] = ""; 
//自定义路由 
$route["home/(:any)"] = "home/show/$1/$2"; 
$route["se/(:any)"] = "search/index/$1/"; 


<?php
/*对文件辅助类进行扩展*/

//创建文件夹
function creat_file($file){
    if (file_exists($file))
		{
		   return FALSE;
		}else{
		  return  mkdir($file);
		}
}
//删除单个文件
function del_file($file){
    if (!file_exists($file))
		{
		   return FALSE;
		}else{
		  return  unlink($file);
		}
}
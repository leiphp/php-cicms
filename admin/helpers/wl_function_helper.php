<?php
/*告知浏览器用utf-8解析*/
header("content-type:text/html;charset=utf-8");

/**
 * @uses 分页配置
 * @author jhl
 * int $total：记录的总条数
 * string $url 当前链接：控制器名/方法名/
 * int $perpage 每页显示条数
 * int $part 当前页前后链接数量总和，列：2：总共显示3个链接
 * int $seg获取参数序号，如方法名只有一个参数，则seg = 3，如果有2个参数，分页排在第二，seg=4
 */
function config_page($total,$url,$perpage=10,$part=2,$seg=3){
	$page = & get_instance();
	$page->load->library('MY_page');
	$page_config['perpage']=$perpage; //每页条数
	$page_config['part']=$part;	//当前页前后链接数量
	$page_config['url']=$url;	//url
	$page_config['seg']=$seg;	//参数取 index.php之后的段数，默认为3，即index.php/control/function/18 这种形式
	$noindex = intval($page->uri->segment($seg) ? $page->uri->segment($seg):1);
	$noindex = $noindex?$noindex:1;
	$page_config['nowindex'] = $noindex;	//当前页
	$page_config['total'] = $total; //得到记录总数
	return $page_config;
}



/**
 * @uses 截取字符串--支持中文截取
 * @param unknown $string
 * @param unknown $sublen
 * $param unknown $last 是否显示省略号 1不显示，2显示
 * @param number $start
 * @param string $code
 * @return string
 */
    function str_cut($string, $length, $dot = '...')   
    {   //截字符串函数    GBK,UTF8  
        $charset = 'utf-8';  
          
        if(strlen($string) <= $length)  
        {   //边界条件  
            return $string;  
        }  
      
      $string = str_replace(array(' ','&nbsp;', '&amp;', '&quot;', '&#039;', '&ldquo;', '&rdquo;', '&mdash;', '&lt;', '&gt;', '&middot;', '&hellip;'), array('∵',' ', '&', '"', "'", '“', '”', '—', '<', '>', '·', '…'), $string);
        $strcut = '';  
        if(strtolower($charset) == 'utf-8') {  
            $n = $tn = $noc = 0;  
            while($n < strlen($string)) {  
      
            $t = ord($string[$n]);  
            if($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {  
                $tn = 1; $n++; $noc++;  
            } elseif(194 <= $t && $t <= 223) {  
                $tn = 2; $n += 2; $noc += 2;  
            } elseif(224 <= $t && $t <= 239) {  
                $tn = 3; $n += 3; $noc += 2;  
            } elseif(240 <= $t && $t <= 247) {  
                $tn = 4; $n += 4; $noc += 2;  
            } elseif(248 <= $t && $t <= 251) {  
                $tn = 5; $n += 5; $noc += 2;  
            } elseif($t == 252 || $t == 253) {  
                $tn = 6; $n += 6; $noc += 2;  
            } else {  
                $n++;  
            }  
      
            if($noc >= $length) {  
                break;  
            }  
        }  
        if($noc > $length)   
        {  
            $n -= $tn;  
        }  
      
        $strcut = substr($string, 0, $n);
		$strcut = str_replace(array('∵', '&', '"', "'", '“', '”', '—', '<', '>', '·', '…'), array(' ', '&amp;', '&quot;', '&#039;', '&ldquo;', '&rdquo;', '&mdash;', '&lt;', '&gt;', '&middot;', '&hellip;'), $strcut);  
      
        } else  
        {  
            for($i = 0; $i < $length; $i++)  
            {  
                $strcut .= ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];  
            }  
        } 
        $strcut = str_replace(array('&', '"', '<', '>'), array('&', '"', '<', '>'), $strcut); 
        return $strcut.$dot;  
    }  


/**
* 将字符串转换为数组
*
* @param	string	$data	字符串
* @return	array	返回数组格式，如果，data为空，则返回空数组
*/
function string2array($data) {
	if($data == '') return array();
	@eval("\$array = $data;");
	return $array;
}
/**
* 将数组转换为字符串
*
* @param	array	$data		数组
* @param	bool	$isformdata	如果为0，则不使用new_stripslashes处理，可选参数，默认为1
* @return	string	返回字符串，如果，data为空，则返回空
*/
function array2string($data, $isformdata = 1) {
	if($data == '') return '';
	if($isformdata) $data = new_stripslashes($data);
	return var_export($data, TRUE);
}
/**
 * 返回经stripslashes处理过的字符串或数组
 * @param $string 需要处理的字符串或数组
 * @return mixed
 */
function new_stripslashes($string) {
	if(!is_array($string)) return stripslashes($string);
	foreach($string as $key => $val) $string[$key] = new_stripslashes($val);
	return $string;
}

/*
通过新浪开发API，通过IP获取具体地址
*/
function get_ip_adds($ip=''){
    empty($ip) && $ip = $this->input->ip_address();
    if($ip=="127.0.0.1") return "本机地址";
    $api = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=$ip";
    $json = @file_get_contents($api);//调用新浪IP地址库
    $arr = json_decode($json,true);//解析json
    $country = $arr['country']; //取得国家
    $province = $arr['province'];//获取省份
    $city = $arr['city']; //取得城市
    if((string)$country == "中国"){
    if((string)($province) != (string)$city){
    $_location = $province.$city;
    }else{
    $_location = $country.$city;    
    }
    }else{
    $_location = $country;
    }
    return $_location;
    }
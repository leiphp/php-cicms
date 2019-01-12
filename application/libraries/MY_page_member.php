<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * 前台会员分页基类 (路径传递风格为CI的段式)
 */
class MY_page_member {
	
	public $part = 2;
	public $totalpage = 0; // 总页数
	public $url = '';
	public $total = 0; // 总条数
	public $perpage = 5; // 每页条数
	public $nowindex = 1; // 当前页
	public $seg = 3; // 段式中的数字
	public $next_page = '下一页';
	public $pre_page = '上一页';
	public $first_page = '首页';
	public $last_page = '末页';
	
	/**
	 * 构造函数
	 */
	function __construct($params = array()) {
		if(count($params) > 0) {
			$this->initialize($params);
		}
		
		log_message('debug', "Page Class Initialized");
	}
	
	/**
	 * 初始化函数
	 */
	function initialize($params) {
		
		if(count($params) > 0) {
			$this->total = isset($params['total']) ? intval($params['total']) : 0; // 总条数
			$this->perpage = isset($params['perpage']) ? intval($params['perpage']) : 5; //每页条数
			$this->nowindex = isset($params['nowindex']) ? intval($params['nowindex']) : 1; // 当前页
			$this->url = isset($params['url']) ? $params['url'] : ''; //url地址，不含分页的段
			$this->part = isset($params['part']) ? $params['part'] : 2; //控制数字列表当前页前后链接数量
			$this->seg = isset($params['seg']) ? $params['seg'] : 3; // 页码
			$this->next_page=isset($params['next_page']) ? $params['next_page'] : '下一页';
			$this->pre_page=isset($params['pre_page']) ? $params['pre_page'] : '上一页';
			$this->first_page=isset($params['first_page']) ? $params['first_page'] : '首页';
			$this->last_page=isset($params['last_page']) ? $params['last_page'] : '末页';
		}
		$this->totalpage=ceil( $this->total / $this->perpage);//总页数
		$this->_myset_url($this->url);//设置链接地址
	}
	
	/**
	 * 获取显示'下一页'的代码
	 */
	 function next_page($style='pg_next')
     {
         if($this->nowindex < $this->totalpage){
            return $this->_get_link($this->_get_url($this->nowindex + 1), $this->next_page, $style);
         }
         return '<span class="'.$style.'">'.$this->next_page.'</span>';
     }
     
     /**
      * 获取显示'上一页'的代码
      */
    function pre_page($style='pg_pre')
    {
        if($this->nowindex > 1){
            return $this->_get_link($this->_get_url($this->nowindex-1),$this->pre_page,$style);
        }
        return '<span class="'.$style.'">'.$this->pre_page.'</span>';
    }
    
    /**
     * 获取显示'首页'的代码
     */
    function first_page($style='pg_first')
    {
        if($this->nowindex == 1){
            return '<span class="'.$style.'">'.$this->first_page.'</span>';
        }
        return $this->_get_link($this->_get_url(1),$this->first_page,$style);
    }
    
    /**
     * 获取显示'末页'的代码
     */
    function last_page($style='pg_last')
    {
        if($this->nowindex == $this->totalpage){
            return '<span class="'.$style.'">'.$this->last_page.'</span>';
        }
        return $this->_get_link($this->_get_url($this->totalpage),$this->last_page,$style);
    }
    
    /**
     * 获取显示'当前页'的代码
     */
    function nowbar($style='pg_link',$nowindex_style='pg_curr')
    {
        $plus=$this->part;
        $begin=1;
        $end=$this->totalpage;
         
        if ($this->nowindex > $plus) {
            $begin=$this->nowindex-$plus;
            $end = $this->nowindex + $plus;
            if ($end > $this->totalpage) {
                $begin= ($begin - $end + $this->totalpage>0) ? ($begin - $end + $this->totalpage) : 1;
                $end = $this->totalpage;
            }
        } else {
            $begin=1;
            $end = $begin + 2*$plus;
            $end = $end > $this->totalpage ? $this->totalpage : $end;
        }
        $out='';
        for($i = $begin;$i <= $end; $i++)
        {
            if($i != $this->nowindex){
                $out.= $this->_get_link($this->_get_url($i),$i,$style);
            }else{
                $out.= '<span class="'.$nowindex_style.'">'.$i.'</span>';
            }
        }
        return $out;
    }
    
    /**
     * 获取显示跳转按钮的代码
     */
    function select()
    {
    	$out='<select name="pagelect" class="pg_select">';
    	for($i=1;$i <= $this->totalpage;$i++)
    	{
	    	if($i==$this->nowindex){
	    		$out.='<option value="'.$i.'" selected>'.$i.'</option>';
	    	}else{
	    		$out.='<option value="'.$i.'">'.$i.'</option>';
	    	}
    	}
    	$out.='</select>';
    	return $out;
    }
    
    /**
     * 控制分页显示风格
     */
    function show()
    {
		//首页 上一页 1 2 3 4 5 下一页  末页 共x页
		if($this->totalpage){
			if($this->totalpage >= 2){
				return $this->first_page().$this->pre_page().$this->nowbar().$this->next_page().$this->last_page().'<span class="pg_count">共'.$this->totalpage.'页</span>';
			}else{
				return "";
			}
		}else{
			return "";
		}
    }
    
    ///////////////////////////////////////////////机构后台分页start////////////////////////////////////////////////////////////////
    /**
     * 获取显示'首页'的代码
     */
    function orga_first_page($style='pg_first')
    {
    	if($this->nowindex == 1){
    		return '<li  class="disabled"><a href="javascript:void(0);">'.$this->first_page.'</a></li>';
    	}
    	return $this->_get_orga_link($this->_get_url(1),$this->first_page,$style);
    }
    /**
     * 获取显示'上一页'的代码
     */
    function orga_pre_page($style='pg_pre')
    {
    	if($this->nowindex > 1){
    		return $this->_get_orga_link($this->_get_url($this->nowindex-1),$this->pre_page,$style);
    	}
    	return '<li class="disabled"><a href="javascript:void(0);">'.$this->pre_page.'</a></li>';
    }
    /**
     * 获取显示'当前页'的代码
     */
    function orga_nowbar($style='pg_link',$nowindex_style='pg_curr')
    {
    	$plus=$this->part;
    	$begin=1;
    	$end=$this->totalpage;
    	 
    	if ($this->nowindex > $plus) {
    		$begin=$this->nowindex-$plus;
    		$end = $this->nowindex + $plus;
    		if ($end > $this->totalpage) {
    			$begin= ($begin - $end + $this->totalpage>0) ? ($begin - $end + $this->totalpage) : 1;
    			$end = $this->totalpage;
    		}
    	} else {
    		$begin=1;
    		$end = $begin + 2*$plus;
    		$end = $end > $this->totalpage ? $this->totalpage : $end;
    	}
    	$out='';
    	for($i = $begin;$i <= $end; $i++)
    	{
    	if($i != $this->nowindex){
    	$out.= $this->_get_orga_link($this->_get_url($i),$i,$style);
    	}else{
    	$out.= '<li class="active"><a href="javascript:void(0);">'.$i.'</a></li>';
    	}
    	}
    	return $out;
    }
    /**
     * 获取显示'下一页'的代码
     */
    function orga_next_page($style='pg_next')
    {
    	if($this->nowindex < $this->totalpage){
    		return $this->_get_orga_link($this->_get_url($this->nowindex + 1), $this->next_page, $style);
    	}
    	return '<li  class="disabled"><a href="javascript:void(0);">'.$this->next_page.'</a></li>';
    }
    /**
     * 获取显示'末页'的代码
     */
    function orga_last_page($style='pg_last')
    {
    	if($this->nowindex == $this->totalpage){
    		return '<li  class="disabled"><a href="javascript:void(0);">'.$this->last_page.'</a></li>';
    	}
    	return $this->_get_orga_link($this->_get_url($this->totalpage),$this->last_page,$style);
    }
    /**
     * 获取链接地址
     */
    function _get_orga_link($url,$text,$style=''){
    	$style=$style?'class="'.$style.'"':'';
    	//获取？后面内容--jhl
    	$left_url = $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING']:'';
    	 
    	return '<li><a '.$style.' href="'.$url.$left_url.'">'.$text.'</a></li>';
    }
    /**
     * 控制分页显示风格
     */
    function orga_show()
    {
    	//首页 上一页 1 2 3 4 5 下一页  末页 共x页
    	if($this->totalpage){
    		if($this->totalpage >= 2){
	    	return '<div class="pagination"><ul>'.$this->orga_first_page()
			    	.$this->orga_pre_page()
			    	.$this->orga_nowbar()
			    	.$this->orga_next_page()
			    	.$this->orga_last_page()
			    	.'<li  class="disabled"><a href="javascript:void(0);">&nbsp;共'.$this->totalpage.'页</a></li><ul></div>';
    		}else{
    			return "";
    		}
    	}else{
    		return "";
    	}
    }
		// //////////////////////////////////////////////机构后台分页end/////////////////////////////////////////////////////////////////
		// /////////////////////////////////////////////球队后台分页start////////////////////////////////////////////////////////////////
	/**
	 * 获取显示'首页'的代码
	 */
	function team_first_page($style = 'pg_first') {
		if ($this->nowindex == 1) {
			return '<li  class="disabled"><a href="javascript:void(0);">' . $this->first_page . '</a></li>';
		}
		return $this->_get_team_link ( $this->_get_url ( 1 ), $this->first_page, $style );
	}
	/**
	 * 获取显示'上一页'的代码
	 */
	function team_pre_page($style = 'pg_pre') {
		if ($this->nowindex > 1) {
			return $this->_get_team_link ( $this->_get_url ( $this->nowindex - 1 ), $this->pre_page, $style );
		}
		return '<li class="disabled"><a href="javascript:void(0);">' . $this->pre_page . '</a></li>';
	}
	/**
	 * 获取显示'当前页'的代码
	 */
	function team_nowbar($style = 'pg_link', $nowindex_style = 'pg_curr') {
		$plus = $this->part;
		$begin = 1;
		$end = $this->totalpage;
		
		if ($this->nowindex > $plus) {
			$begin = $this->nowindex - $plus;
			$end = $this->nowindex + $plus;
			if ($end > $this->totalpage) {
				$begin = ($begin - $end + $this->totalpage > 0) ? ($begin - $end + $this->totalpage) : 1;
				$end = $this->totalpage;
			}
		} else {
			$begin = 1;
			$end = $begin + 2 * $plus;
			$end = $end > $this->totalpage ? $this->totalpage : $end;
		}
		$out = '';
		for($i = $begin; $i <= $end; $i ++) {
			if ($i != $this->nowindex) {
				$out .= $this->_get_team_link ( $this->_get_url ( $i ), $i, $style );
			} else {
				$out .= '<li class="active"><a href="javascript:void(0);">' . $i . '</a></li>';
			}
		}
		return $out;
	}
	/**
	 * 获取显示'下一页'的代码
	 */
	function team_next_page($style = 'pg_next') {
		if ($this->nowindex < $this->totalpage) {
			return $this->_get_team_link ( $this->_get_url ( $this->nowindex + 1 ), $this->next_page, $style );
		}
		return '<li  class="disabled"><a href="javascript:void(0);">' . $this->next_page . '</a></li>';
	}
	/**
	 * 获取显示'末页'的代码
	 */
	function team_last_page($style = 'pg_last') {
		if ($this->nowindex == $this->totalpage) {
			return '<li  class="disabled"><a href="javascript:void(0);">' . $this->last_page . '</a></li>';
		}
		return $this->_get_team_link ( $this->_get_url ( $this->totalpage ), $this->last_page, $style );
	}
	/**
	 * 获取链接地址
	 */
	function _get_team_link($url, $text, $style = '') {
		$style = $style ? 'class="' . $style . '"' : '';
		// 获取？后面内容--jhl
		$left_url = $_SERVER ['QUERY_STRING'] ? '?' . $_SERVER ['QUERY_STRING'] : '';
		
		return '<li><a ' . $style . ' href="' . $url . $left_url . '">' . $text . '</a></li>';
	}
	/**
	 * 控制分页显示风格
	 */
	function team_show() {
		// 首页 上一页 1 2 3 4 5 下一页 末页 共x页
		if($this->totalpage){
			if($this->totalpage >= 2){
				return '<div class="pagination"><ul>' . $this->team_first_page () . $this->team_pre_page () . $this->team_nowbar () . $this->team_next_page () . $this->team_last_page () . '<li  class="disabled"><a href="javascript:void(0);">&nbsp;共' . $this->totalpage . '页</a></li><ul></div>';
			}
			}else{
			return "";
		}
	}
        		////////////////////////////////////////////////球队后台分页end/////////////////////////////////////////////////////////////////
	// /////////////////////////////////////////////前台展示start////////////////////////////////////////////////////////////////
	/**
	 * 获取显示'首页'的代码
	 */
	function golf_first_page($style = 'pg_first') {
		if ($this->nowindex == 1) {
			return '<li  class="disabled"><a href="javascript:void(0);">' . $this->first_page . '</a></li>';
		}
		return $this->_get_golf_link ( $this->_get_url ( 1 ), $this->first_page, $style );
	}
	/**
	 * 获取显示'上一页'的代码
	 */
	function golf_pre_page($style = 'pg_pre') {
		if ($this->nowindex > 1) {
			return $this->_get_golf_link ( $this->_get_url ( $this->nowindex - 1 ), $this->pre_page, $style );
		}
		return '<li class="disabled"><a href="javascript:void(0);">' . $this->pre_page . '</a></li>';
	}
	/**
	 * 获取显示'当前页'的代码
	 */
	function golf_nowbar($style = 'pg_link', $nowindex_style = 'pg_curr') {
		$plus = $this->part;
		$begin = 1;
		$end = $this->totalpage;
	
		if ($this->nowindex > $plus) {
			$begin = $this->nowindex - $plus;
			$end = $this->nowindex + $plus;
			if ($end > $this->totalpage) {
				$begin = ($begin - $end + $this->totalpage > 0) ? ($begin - $end + $this->totalpage) : 1;
				$end = $this->totalpage;
			}
		} else {
			$begin = 1;
			$end = $begin + 2 * $plus;
			$end = $end > $this->totalpage ? $this->totalpage : $end;
		}
		$out = '';
		for($i = $begin; $i <= $end; $i ++) {
			if ($i != $this->nowindex) {
				$out .= $this->_get_golf_link ( $this->_get_url ( $i ), $i, $style );
			} else {
				$out .= '<li class="active"><a href="javascript:void(0);">' . $i . '</a></li>';
			}
		}
		return $out;
	}
	/**
	 * 获取显示'下一页'的代码
	 */
	function golf_next_page($style = 'pg_next') {
		if ($this->nowindex < $this->totalpage) {
			return $this->_get_golf_link ( $this->_get_url ( $this->nowindex + 1 ), $this->next_page, $style );
		}
		return '<li  class="disabled"><a href="javascript:void(0);">' . $this->next_page . '</a></li>';
	}
	/**
	 * 获取显示'末页'的代码
	 */
	function golf_last_page($style = 'pg_last') {
		if ($this->nowindex == $this->totalpage) {
			return '<li  class="disabled"><a href="javascript:void(0);">' . $this->last_page . '</a></li>';
		}
		return $this->_get_golf_link ( $this->_get_url ( $this->totalpage ), $this->last_page, $style );
	}
	/**
	 * 获取链接地址
	 */
	function _get_golf_link($url, $text, $style = '') {
		$style = $style ? 'class="' . $style . '"' : '';
		// 获取？后面内容--jhl
		$left_url = $_SERVER ['QUERY_STRING'] ? '?' . $_SERVER ['QUERY_STRING'] : '';
	
		return '<li><a ' . $style . ' href="' . $url . $left_url . '">' . $text . '</a></li>';
	}
	/**
	 * 控制分页显示风格
	 */
	function golf_show() {
		// 首页 上一页 1 2 3 4 5 下一页 末页 共x页
		if($this->totalpage){
			if($this->totalpage >= 2){
				return '<div class="pagination fn-clear"><ul class="fn-clear fn-right">' . $this->golf_first_page () . $this->golf_pre_page () . $this->golf_nowbar () . $this->golf_next_page () . $this->golf_last_page () . '<li  class="disabled"><a href="javascript:void(0);">&nbsp;共' . $this->totalpage . '页</a></li><ul></div>';
			}
			}else{
			return "";
		}
	}
	////////////////////////////////////////////////前台展示end/////////////////////////////////////////////////////////////////
    /**
     * 设置url头地址
     */
    public function _myset_url($url)
    {
    	$CI=&get_instance();
    	$CI->load->helper('url');
    	if (empty($url)) {//如果$url为空，要用uri_string()函数取uri段
    		$cururl='';
    		$cururl=uri_string();
    		$segementarray=explode("/",$cururl);
    		$c=0;
    		for ($i=0; $i < sizeof($segementarray); $i++) {
    			if ($segementarray[$i] && $c < $this->seg-1) {//取uri_string()的seg-1段
    				$url=$url.'/'.$segementarray[$i];
    				$c++;
    			}
    		}
    	}
    	$this->url=base_url($url);
    }
    
    /**
     * 为指定的页面返回地址值
     */
    function _get_url($pagenum=1)
    {
    	return $this->url.'/'.$pagenum;
    }
    
    /**
     * 获取链接地址
     */
    function _get_link($url,$text,$style=''){
    	$style=$style?'class="'.$style.'"':'';
    	//获取？后面内容--jhl
    	$left_url = $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING']:'';
    	
    	return '<a '.$style.' href="'.$url.$left_url.'">'.$text.'</a>';
    }
}

/*******************************************************************************
* KindEditor - WYSIWYG HTML Editor for Internet
* Copyright (C) 2006-2011 kindsoft.net
*
* @author Roddy <luolonghao@gmail.com>
* @site http://www.kindsoft.net/
* @licence http://www.kindsoft.net/license.php
*******************************************************************************/

KindEditor.plugin('quickformat', function(K) {
	var self = this, name = 'quickformat';
	 editor.clickToolbar(name, function() {  
	self.focus();
		var _html = self.html();
		//清除样式代码
		          //  _html=_html.replace(/<pre/ig, '@@wl');//<pre代码标签不要替换
					_html = _html.replace(/<div/ig, '<p');
					_html = _html.replace(/<\/div>/ig, '</p>');
					_html = _html.replace(/<strong[^>]*>/ig, '');
					_html = _html.replace(/<\/strong>/ig, '');
					//_html = _html.replace(/<em[^>]*>/ig, '');  //加上后视频一键排版也会不见了
					//_html = _html.replace(/<\/em>/ig, '');     //加上后视频一键排版也会不见了
					_html = _html.replace(/<u[^>]*>/ig, '');
					_html = _html.replace(/<\/u>/, '');
					_html = _html.replace(/<li[^>]*>/ig, '');
					_html = _html.replace(/<\/li>/ig, '');
					_html = _html.replace(/<span[^>]*>/ig, '');
					_html = _html.replace(/<\/span>/ig, '');
				    _html = _html.replace(/&nbsp;/ig, '');
				    _html = _html.replace(/　/ig, '');
					_html = _html.replace(/<p><\/p>/ig, '');
					//_html = _html.replace(/<a/ig, '<a rel="nofollow"');
					
					_html = _html.replace(/height=\"*\"/ig, '');
					_html = _html.replace(/width=\"*\"/ig, '');
					
					
					//将p标签替换成<br />
					_html = _html.replace(/<p[^>]*>/ig,'');
				    _html = _html.replace(/<\/p>/ig,'<br />');
					_html = _html.replace(/<br \/><br \/>/ig,'<br />');
					
					//替换回车和空格					
					
					 _html = _html.replace(/\t/ig, '');
                    _html = _html.replace(/[\r\n]/ig, '');
				    _html = _html.replace(/[\r]/ig, '');

					
					//按<br />分组，将换行<br>全部替换成p标签
				     bb = _html.split("<br />");
					 aa='';
					for(var i=0;i<bb.length;i++){
                       aa =aa+ '<p>'+bb[i]+'</p>';
                      }
					
					//首行缩进
					 _html = aa.replace(/<p[^>]*>/ig, '<p>　　');
                     _html = _html.replace(/<p>　　<\/p>/ig,'');
					 _html = _html.replace(/<p><\/p>/ig,'');
					 
					 //_html=_html.replace(/@@wl/ig, '<pre');//<pre代码标签不要替换
		
		self.html(_html);
		self.cmd.selection(true);
		self.addBookmark();
   });  
});

/**
--------------------------
abcd<br />
1234<br />

to

<p style="text-indent:2em;">
	abcd<br />
	1234<br />
</p>

--------------------------

&nbsp; abcd<img>1233
<p>1234</p>

to

<p style="text-indent:2em;">abcd<img>1233</p>
<p style="text-indent:2em;">1234</p>

--------------------------
*/
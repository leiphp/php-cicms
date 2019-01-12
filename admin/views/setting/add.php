<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#key").formValidator({onshow:"请输入标签名称",onfocus:"标签名称应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"标签名称应该为2-20位之间"}).regexValidator({regexp:"username",datatype:"enum",onerror:"格式不正确(只能是英文字母)"}).ajaxValidator({	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>index.php/setting/ajax_check_key",
 type : "get",
		success : function(data){
            if( data == "1" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "标签key已存在,请重新输入",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
		$("#title").formValidator({onshow:"请输入字段名称",onfocus:"请输入字段名称"}).inputValidator({min:4,max:30,onerror:"4-30个字符之间"});
		
	$("#size").formValidator({onshow:"请输入大小(纯数字)",onfocus:"请输入大小(纯数字)"}).inputValidator({min:1,max:3,onerror:"999以下的数字"}).regexValidator({regexp:"num1",datatype:"enum",onerror:"格式不正确(只能为数字)"});

	
});
//-->
</script>


<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/setting/add" method="post">
	<ul class="tabBut cu-li"> 
	  <li id="tab_setting_1" class="on">新增自定义标签</li>
	</ul>
	<div class="pad-10" style="padding-top: 0;">
		<div class="col-tab">

			<div class="contentList pad-10">
				<table width="100%" class="table_form">
				<tr>
						<th>字段名称：</th>
						<td><input type="text" name="info[title]" id="title" class="input-text" size="20" value="" /> </td>
					  </tr>


					  <tr>
						<th width="100">标签key：</th>
						<td>
					   <input type="text" name="info[key]" id="key" class="input-text" size="20" value="" />
						</td>
					  </tr>

						<th>字段类型：</th>
						<td>
						  <select name="info[style]" id="style" >
						  <option value="text">文本字段</option>
						  <option value="textarea">多行文本</option>
						  <option value="image">图片类型</option>

						</td>
					  </tr>
						<tr>
						<th>编辑区域尺寸：</th>
						<td><input type="text" name="info[size]" id="size" class="input-text" size="10" value="" /> </td>
					  </tr>
				   <tr>

					  <tr>
						<th>提醒文字：</th>
						<td>
						  <input type="text" name="info[beizhu]" id="beizhu" class="input-text" size="40" value="" /></td>
					 </tr>

				</table>

			</div>

			<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
				<a class="button submit"><i></i><input name="dosubmit" id="dosubmit" type="submit" value="提交"></a>
			</div>
		</div>
	</div>
</form>
</body>
</html>






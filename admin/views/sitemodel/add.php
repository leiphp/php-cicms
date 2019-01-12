<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入模型名称",onfocus:"长度应该为2-50个字符"}).inputValidator({min:2,max:50,onerror:"输入不正确"});
	
	$("#tablename").formValidator({onshow:"请输入模型表键名",onfocus:"名称应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"名称应该为2-20位之间"}).regexValidator({regexp:"username",datatype:"enum",onerror:"格式不正确(只能是英文字母)"}).ajaxValidator({	
	dataType : "html",
		async : true,
		url : "<?=base_url();?>index.php/sitemodel/ajax_check_tablename",
 type : "get",
		success : function(data){
            if( data == "1" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "模型表键名已存在,请重新输入",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	

	
});
//-->
</script>


<form name="myform" id="myform" action="<?=base_url();?>index.php/sitemodel/add" method="post">
<div class="pad-10">


<div class="cate_top">
	<a href="<?=base_url();?>index.php/sitemodel/add" class="on add_to"><i></i>添加模型</a>
	<span>|</span><a href="<?=base_url();?>index.php/sitemodel/lists" class="on text"><i></i>模型管理</a>
</div>

<div class="explain-col">
    <font color="#FF0000">新增模型，要保证以下文件可写</font><br>
    1、根目录/upload<br>
    2、根目录/application/<br>
    3、根目录/admin/<br>
 </div>

  
	<div class="pad-10"></div>
	<ul class="tabBut cu-li"> 
	  <li id="tab_setting_1" class="on">新增模型</li>
	</ul>
<div class="col-tab">

	<div class="contentList pad-10">
		<table width="100%" class="table_form">

		<tr>
				<th>模型名称：</th>
				<td><input type="text" name="info[name]" id="name" class="input-text" size="20" value="" /> </td>
			  </tr>
		   <tr>

			  <tr>
				<th width="100">模型表键名：</th>
				<td>
			   <input type="text" name="info[tablename]" id="tablename" class="input-text" size="20" value="" />
				</td>
			  </tr>
			<tr>
				<th>描述：</th>
				<td>
					<textarea name="info[des]" id="des" style="width:700px;height:46px;"></textarea>
				</td>
			  </tr>




		</table>

	</div>

	<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
		<a class="button submit"><i></i><input name="dosubmit" id="dosubmit" type="submit" value="提交" ></a>
	</div>
</div>
</div>
</form>
</body>
</html>






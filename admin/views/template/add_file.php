<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});


	$("#name").formValidator({onshow:"请输入名称，需输入扩展名。",onfocus:"请输入名称，需输入扩展名。"}).inputValidator({min:1,onerror:"请输入名称"}).regexValidator({regexp:"filename",datatype:'enum',onerror:"只能为数字、字母、下划线。"}).ajaxValidator({
	
		dataType : "html",
		async : true,
		url : "<?=base_url();?>index.php/template/ajax_check_file/?style=<?=$_GET['style']?>",
 type : "get",
		success : function(data){
            if( data == "1" ) {
                return false;
			} else {
                return true;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "文件名已存在,请重新输入",
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onwait : "请稍候..."
	});
	
});
//-->
</script>



<div class="pad-10">

<style>
.title-2{text-align: left;height: 20px;font: 18px/20px "MicroSoft YaHei","SimHei";color: #333;margin: 0px;padding: 3px 0px  5px 3px;}
</style>
<div class="cate_top">
     <h1 class="title-2">默认模板 - 增加文件</h1>
  </div>


<form name="myform" id="myform" action="" method="post" >
<ul class="tabBut cu-li"> 
  <li id="tab_setting_1" class="on">新增文件</li>
</ul>
<div class="col-tab">

<div class="contentList pad-10">
<table width="100%" class="table_form">
<tr>
        <th>文件名称：</th>
        <td><input type="text" name="info[name]" id="name" class="input-text" size="20" value="" /> </td>
      </tr>
 

</table>

</div>

	<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
		<input name="info[style]" type="hidden" value="<?=$_GET['style']?>">
		<a class="button submit"><i></i><input name="dosubmit" id="dosubmit" type="submit" value="提交" ></a>
	</div>
</div>
</form>
</div>
</body>
</html>

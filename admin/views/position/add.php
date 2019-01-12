<?php $this->load->view('head');?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",debug:false,onerror:function(msg){}});
	
		$("#name").formValidator({onshow:"请输入字段名称",onfocus:"请输入字段名称"}).inputValidator({min:4,max:30,onerror:"4-30个字符之间"});
		

	
});
//-->
</script>


<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/position/add" method="post">
	<ul class="tabBut cu-li"> 
	  <li id="tab_position_1" class="on">新增推荐位</li>
	</ul>
	<div class="pad-10"  style="padding-top: 0;">
		<div class="col-tab">
			<div class="contentList pad-10">
				<table width="100%" class="table_form">
				<tr>
						<th>推荐位名称：</th>
						<td><input type="text" name="info[name]" id="name" class="input-text" size="20" value="" /> </td>
					  </tr>

					 <tr>

						<th>所属模块：</th>
						<td>
						  <select name="info[modelid]" id="modelid" >
								<?php foreach ($data['model'] as $v){ ?>
				<option value="<?=$v['id']?>" ><?=$v['name']?></option>
				<?php }?>	
						  </select>
						</td>
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






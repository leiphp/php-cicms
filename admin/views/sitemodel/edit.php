<?php $this->load->view('head');?>

<script type="text/javascript">

</script>


<div class="nav10"></div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/sitemodel/edit/" method="post">
	<div class="pad-10">
		<div class="cate_top">
			 <a href="<?=base_url();?>index.php/sitemodel/add" class="on add_to"><i></i>添加模型 </a>
			   <span>|</span><a href="<?=base_url();?>index.php/sitemodel/lists" class="on text"><i></i>模型管理 </a>
		  </div>


		<ul class="tabBut cu-li"> 
		  <li id="tab_setting_1" class="on">修改模型</li>
		</ul>
		<div class="col-tab">

			<div class="contentList pad-10">
				<table width="100%" class="table_form">
				<tr>
						<th>模型名称名称：</th>
						<td><input type="text" name="info[name]" id="name" class="input-text" size="20" value="<?=$data['res']['name']?>" /> </td>
					  </tr>
				   <tr>

					  <tr>
						<th width="100">模型表键名：</th>
						<td>
					   <input type="text" name="info[tablename]" id="tablename" class="input-text" size="20" value="<?=$data['res']['tablename']?>" disabled=""/>
						</td>
					  </tr>
					<tr>
						<th>描述：</th>
						<td>
							<textarea name="info[des]" id="des" style="width:700px;height:46px;"><?=$data['res']['des']?></textarea>
						</td>
					  </tr>

				</table>

			</div>

			<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
				<input name="info[id]" type="hidden" value="<?=$data['res']['id']?>">
				<a class="button submit"><i></i><input name="dosubmit" id="dosubmit" type="submit" value="提交"\></a>
			</div>
		</div>
	</div>
</form>
</body>
</html>






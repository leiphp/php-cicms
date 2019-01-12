<?php $this->load->view('head');?>

<style>
.title-2{text-align: left;height: 20px;font: 18px/20px "MicroSoft YaHei","SimHei";color: #333;margin: 0px;padding: 3px 0px  5px 3px;}
</style>
<div class="pad-10">
<div class="cate_top" style="border-bottom: none;">
	<h1 class="title-2">默认模板 - 模板文件修改</h1>
</div>
<form name="myform" id="myform" action="<?=base_url();?>index.php/template/edit" method="post" enctype="multipart/form-data" />
	<ul class="tabBut cu-li">
		<li style="width: auto;" id="tab_setting_1" class="on" onclick="switchmodTag('tab_setting_','div_setting_','1');this.blur();"><?=$data['file']?>编辑</li>
	</ul>
	<div class="pad-10" style="padding-top: 0;">
		<div class="col-tab">
			<div id="div_setting_1" class="contentList pad-10">
				  <tr>
				   <td colspan="2">
				   <textarea name="info[content]" id="content" style="width:85%;height:300px;"><?=$data['res']?></textarea>

					</td>
				  </tr>
				<tr>
			</table>

			</div>

			<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
				<input name="info[style]" type="hidden" value="<?=$data['style']?>">
				<input name="info[file]" type="hidden" value="<?=$data['file']?>">
				<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
			</div>
		</div>
	</div>
</form>
</div>
</body>
</html>






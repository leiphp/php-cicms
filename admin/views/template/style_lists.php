<?php $this->load->view('head');?>
<div class="pad-10">

<style>
.title-2{text-align: left;height: 20px;font: 18px/20px "MicroSoft YaHei","SimHei";color: #333;margin: 0px;padding: 3px 0px  5px 3px;}
</style>
<div class="cate_top">
     <h1 class="title-2">默认模板 - 风格类型</h1>
  </div>


<form name="myform" id="myform" action="" method="post" >
<div class="table-list css">
    <table width="100%">
       <thead>
		<tr>
		<th align="left" >目录列表</th>
		<th align="left" >说明</th>
		<th align="left" >操作</th>
		</tr>
        </thead>
<tbody>

<tr>
<td align="left"><img src="<?=base_url()?>views/skin/images/folder-closed.gif" /> <a href="<?=base_url();?>index.php/template/lists/?style=css"><b>CSS</b></a></td><td align="left"><input type="text" name="" value="CSS样式文件"></td><td></td></tr>
<tr>
<td align="left"><img src="<?=base_url()?>views/skin/images/folder-closed.gif" /> <a href="<?=base_url();?>index.php/template/lists/?style=template"><b>templates</b></a></td><td align="left"><input type="text" name="" value="模板文件"></td><td></td></tr>
<tr>
</tr>

    


     </tbody>
     </table>

            
      
</div>
</form>
</div>
</body>
</html>

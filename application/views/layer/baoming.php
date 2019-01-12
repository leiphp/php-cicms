
<!--layer弹出层-->
<script src="<?=base_url();?>admin/views/skin/js/jquery.js" type="text/javascript"></script>
<script src="<?=base_url();?>admin/views/skin/layer/layer.js" type="text/javascript"></script>

<link type="text/css"  href="<?=base_url();?>skin/member/css/table.css" rel="stylesheet">
<style>
/*后台自定义按钮样式*/
.btn{display: inline-block;padding: 6px 12px;margin-bottom: 0px; font-size: 14px;font-weight: 400;line-height: 1.42857;text-align: center;
    white-space: nowrap;vertical-align: middle;cursor: pointer;-moz-user-select: none;background-image: none;border: 1px solid transparent;border-radius: 4px;    color: #FFF;background-color: #337AB7;border-color: #2E6DA4;}
.btn:hover {color: #FFF;background-color: #286090;border-color: #204D74;text-decoration: none;}
.baoming_con{ margin:0 auto; width:400px;}
.baoming_con .aa{ line-height:20px; font-size:14px; color:#0099CC; text-align:right}
</style>

	<div class="baoming_con">
	<?php if(isset($data)){?>
<form id="book" name="book" method="post" action="<?=base_url();?>index/baoming_add/" >
      <table width="100%" border="0"  class="table_form">
  <tr>
    <td width="80" class="aa"><span style="color:#ff0000">*</span>课程名称：</td>
    <td><input name="info[title]" type="text" id="title" class="input-text" size="45" value="<?=$data['title']?>"  style="color:#ccc"/></td>
  </tr>
  <tr>
    <td class="aa"><span style="color:#ff0000">*</span>姓名：</td>
    <td><input name="info[name]" type="text" class="input-text"  id="name" size="30" value="<?=$this->member_info['name']?>"/></td>
  </tr>
  <tr>
    <td class="aa"><span style="color:#ff0000">*</span>手机：</td>
    <td><input name="info[tel]" type="text" id="address" class="input-text" size="30" value="<?=$this->member_info['tel']?>"/></td>
  </tr>
   <tr>
    <td class="aa">QQ：</td>
    <td><input name="info[qq]" type="text" id="address" class="input-text" size="30" value="<?=$this->member_info['qq']?>"/></td>
  </tr>


  <tr>
    <td colspan="2" align="center">
      
        <div align="center">
		<input name="info[articleid]" type="hidden" value="<?=$data['articleid']?>" />
		<input name="info[model]" type="hidden" value="<?=$data['model']?>" />
         <input id="dosubmit" class="btn" type="submit" value="提交" name="dosubmit"></input>
            </div></td>
    </tr>
</table>
 </form>
<?php }

if(isset($res) && $res==1 ){ ?>
<script>
 var index1 = parent.layer.getFrameIndex(window.name); //获取窗口索引
layer.alert('预约报名成功!',{icon: 1}, function(index){
	 parent.layer.close(index1);
});  
</script>
<?php }
if(isset($res) && $res==2 ){ ?>
<script>
 var index1 = parent.layer.getFrameIndex(window.name); //获取窗口索引
     layer.alert('预约报名失败，请认真填写报名资料!',{icon: 2}, function(index){
	 parent.layer.close(index1);
});  
</script>

<?php }
if(isset($res) && $res==3 ){ ?>
<script>
 var index1 = parent.layer.getFrameIndex(window.name); //获取窗口索引
     layer.alert('么么哒，您已经报过啦!',{icon: 2}, function(index){
	 parent.layer.close(index1);
});  
</script>

<?php } ?>

	</div>


</body>
</html>






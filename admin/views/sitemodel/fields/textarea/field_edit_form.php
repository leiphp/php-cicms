<table cellpadding="2" cellspacing="1" width="98%">
	<tbody><tr> 
      <td width="100">文本域宽度</td>
      <td><input name="setting[width]" value="<?=$data['res']['setting']['width']?>" size="10" class="input-text" type="text">px</td>
    </tr>
	<tr> 
      <td>文本域高度</td>
      <td><input name="setting[height]" value="<?=$data['res']['setting']['height']?>" size="10" class="input-text" type="text"> px</td>
    </tr>
	<tr> 
      <td>默认值</td>
      <td><textarea name="setting[defaultvalue]" rows="2" cols="20" id="defaultvalue" style="height:60px;width:250px;"><?=$data['res']['setting']['defaultvalue']?></textarea></td>
    </tr>
</tbody></table>
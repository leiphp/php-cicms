<table cellpadding="2" cellspacing="1" width="98%">
	<tbody><tr> 
      <td width="100">取值范围</td>
      <td><input name="setting[minnumber]" value="<?=$data['res']['setting']['minnumber']?>" size="5" class="input-text" type="text"> - <input name="setting[maxnumber]" value="<?=$data['res']['setting']['maxnumber']?>" size="5" class="input-text" type="text"></td>
    </tr>
	<tr> 
      <td>小数位数：</td>
      <td>
	  <select name="setting[decimaldigits]">
	  <option value="0" <?php if($data['res']['setting']['decimaldigits']==0) echo 'selected';?>>0</option>
	  <option value="1" <?php if($data['res']['setting']['decimaldigits']==1) echo 'selected';?>>1</option>
	  <option value="2" <?php if($data['res']['setting']['decimaldigits']==2) echo 'selected';?>>2</option>
      <option value="3" <?php if($data['res']['setting']['decimaldigits']==3) echo 'selected';?>>3</option>
	  </select>
    </td>
    </tr>
	<tr> 
      <td>默认值</td>
      <td><input name="setting[defaultvalue]" value="<?=$data['res']['setting']['defaultvalue']?>" size="40" class="input-text" type="text"></td>
    </tr>

</tbody></table>
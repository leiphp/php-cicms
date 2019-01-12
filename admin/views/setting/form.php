<?php $this->load->view('head');?>
<script language="javascript">
  function switchmodTag(modtag,modcontent,modk) {
    for(i=1; i <4; i++) {
      if (i==modk) {
        document.getElementById(modtag+i).className="on";document.getElementById(modcontent+i).className="contentList pad-10";}
      else {
        document.getElementById(modtag+i).className="";document.getElementById(modcontent+i).className="contentList pad-10 hidden";}
    }
	
  }
  
  function test_mail() {
      $.post("<?=base_url();?>index.php/sys_ajax/ajax_test_email/",
		{
		  smtp_host:$('#smtp_host').val(),
		  smtp_port:$('#smtp_port').val(),
		  smtp_user:$('#smtp_user').val(),
		  smtp_pass:$('#smtp_pass').val(),
		  test_email:$('#test_email').val()
		},
		function(data,status){
		  alert(data);
		});
}
</script>
<div class="nav10"></div>

<div class="pad-10">
	<div id="myform">
		<ul class="tabBut cu-li"> 
		  <li id="tab_setting_1" class="on" onClick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">基础设置</li>
		  <li id="tab_setting_2" onClick="switchmodTag('tab_setting_','div_setting_','2');this.blur();">高级设置</li>
		</ul>
	</div>
	<div class="col-tab">

		<div id="div_setting_1" class="contentList pad-10">

			<form name="myform" id="myform" action="<?=base_url();?>index.php/setting/form_edit" method="post" enctype="multipart/form-data" />
				<table width="100%" class="table_form ">
				<?php  foreach ($data['list'] as $v){?>

					 <tr>
						<th width="120"><?=$v['title']?>：</th>
						<td>
				<?php if($v['style']=='text'){?>
				   <input type="text" name="info[<?=$v['id']?>]" id="<?=$v['key']?>" class="input-text" size="<?=$v['size']?>" value="<?=$v['value']?>"><?=$v['beizhu']?>
				<?php }elseif($v['style']=='textarea'){?>

				  <textarea name="info[<?=$v['id']?>]" id="<?=$v['key']?>" style="width:50%;height:<?=$v['size']?>px;"><?=$v['value']?></textarea>

				<?php }elseif($v['style']=='image'){ ?>
					  <img src="<?=base_url().'../'?>upload/<?=$v['value']?>"  width="100" height="100" alt="<?=$v['title']?>"/>
					   <input type="file" name="<?=$v['id']?>" id="image" value="" size="50" class="input-text"  style="border:none; background:none; height:25px;"/>
				<?=$v['beizhu']?>
				<?php }?>     

						</td>
					  </tr>
				 <?php }?> 

				</table>
				<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
					<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
				</div>
			</form>
		</div>

		<div id="div_setting_2" class="contentList pad-10 hidden">
			<div id="searchid">
				<div class="explain-col">
				  <font color="#FF0000">本设置必须开启"根目录/config.php“写权限</font> 
				</div>
			</div>

			<form name="myform" id="myform" action="<?=base_url();?>index.php/setting/setting_edit" method="post" enctype="multipart/form-data" />
				<table width="100%" class="table_form ">

				 <tr>
					   <td colspan="2" style="color:#0066FF">前台分页配置</td>
					  </tr>
					<?php  foreach ($data['model_list'] as $v){?>
					 <tr>
						<th width="120"><?=$v['name']?>：</th>
						<td>
						<?php
						   $GLOBALS['wl_page'][$v['tablename']]=isset($GLOBALS['wl_page'][$v['tablename']])?$GLOBALS['wl_page'][$v['tablename']]:10;
						?>
					   <input type="text" name="info[wl_page][<?=$v['tablename']?>]" id="title" class="input-text" size="15" value="<?=$GLOBALS['wl_page'][$v['tablename']]?>">     
						</td>
					  </tr>
					<?php }?>  
				   <tr>
						<th width="120">品牌页面：</th>
						<td>
					   <input type="text" name="info[wl_page][brand]" id="title" class="input-text" size="15" value="<?=$GLOBALS['wl_page']['brand']?>">     
						</td>
					  </tr>    
					 <tr>
						<th width="120">留言页面：</th>
						<td>
					   <input type="text" name="info[wl_page][message]" id="title" class="input-text" size="15" value="<?=$GLOBALS['wl_page']['message']?>">     
						</td>
					  </tr>
					  <tr>
						<th width="120">搜索页面：</th>
						<td>
					   <input type="text" name="info[wl_page][search]" id="title" class="input-text" size="15" value="<?=$GLOBALS['wl_page']['search']?>">     
						</td>
					  </tr> 

					<tr>
					   <td colspan="2" style="color:#0066FF">数据库配置</td>
					  </tr>
					 <tr>
						<th width="120">数据库连接地址：</th>
						<td>
					   <input type="text" name="info[wl_db][hostname]" id="title" class="input-text" size="30" value="<?=$GLOBALS['wl_db']['hostname']?>">     
						</td>
					  </tr>
					  <tr>
						<th width="120">用户名：</th>
						<td>
					   <input type="text" name="info[wl_db][username]" id="title" class="input-text" size="20" value="<?=$GLOBALS['wl_db']['username']?>">     
						</td>
					  </tr>
							<tr>
						<th width="120">密码：</th>
						<td>
					   <input type="text" name="info[wl_db][password]" id="title" class="input-text" size="20" value="<?=$GLOBALS['wl_db']['password']?>">     
						</td>
					  </tr>
							<tr>
						<th width="120">数据库：</th>
						<td>
					   <input type="text" name="info[wl_db][database]" id="title" class="input-text" size="20" value="<?=$GLOBALS['wl_db']['database']?>">     
						</td>
					  </tr>

				   <tr>
					   <td colspan="2" style="color:#0066FF">编辑器水印配置(水印文件放置到/upload/water/water.png)</td>
					  </tr>
					 <tr>
						<th width="120">水印状态：</th>
						<td>
						<select name="info[wl_water][action]">
						  <option value="true" <?php if($GLOBALS['wl_water']['action']==true)echo 'selected';?>>开启</option>
						  <option value="false" <?php if($GLOBALS['wl_water']['action']==false)echo 'selected';?>>关闭</option>
						</select>    
						</td>
					  </tr>
					  <tr>
						<th width="120">背景最小宽度：</th>
						<td>
					   <input type="text" name="info[wl_water][min_image_w]" id="title" class="input-text" size="20" value="<?=$GLOBALS['wl_water']['min_image_w']?>">px     
						</td>
					  </tr>
							<tr>
						<th width="120">高度：</th>
						<td>
					   <input type="text" name="info[wl_water][min_image_h]" id="title" class="input-text" size="20" value="<?=$GLOBALS['wl_water']['min_image_h']?>">px   
						</td>
					  </tr>

				  <tr>
					   <td colspan="2" style="color:#0066FF">编辑器远程图片自动下载</td>
					  </tr>
					 <tr>
						<th width="120">功能开关：</th>
						<td>
						<select name="info[wl_down][action]">
						  <option value="true" <?php if($GLOBALS["wl_down"]["action"]==true)echo 'selected';?>>开启</option>
						  <option value="false" <?php if($GLOBALS["wl_down"]["action"]==false)echo 'selected';?>>关闭</option>
						</select>    
						</td>
					  </tr>
					  <tr>
						<th width="120">超出高度自动裁剪：</th>
						<td>
					   <input type="text" name="info[wl_down][max_image_w]" id="title" class="input-text" size="20" value="<?=$GLOBALS['wl_down']['max_image_w']?>">px     
						</td>
					  </tr>
					<tr>
					   <td colspan="2" style="color:#0066FF">搜索引擎链接提交</td>
					  </tr>

					  <tr>
						<th width="120">百度推送接口：</th>
						<td>
					   <input type="text" name="info[wl_url][baidu]" id="title" class="input-text" size="80" value="<?=$GLOBALS['wl_url']['baidu']?>">  服务器必须开启CURL  
						</td>
					  </tr>     

					 <tr>
					   <td colspan="2" style="color:#0066FF">邮箱设置</td>
					  </tr>
				   <tr>
						<th width="120">邮件服务器 ：</th>
						<td>
					   <input type="text" name="info[wl_email][smtp_host]" id="smtp_host" class="input-text" size="25" value="<?=$GLOBALS['wl_email']['smtp_host']?>">     
						</td>
					  </tr>    
					 <tr>
						<th width="120">邮件发送端口：</th>
						<td>
					   <input type="text" name="info[wl_email][smtp_port]" id="smtp_port" class="input-text" size="25" value="<?=$GLOBALS['wl_email']['smtp_port']?>">     
						</td>
					  </tr>
					  <tr>
						<th width="120">发件人地址：</th>
						<td>
					   <input type="text" name="info[wl_email][smtp_user]" id="smtp_user" class="input-text" size="25" value="<?=$GLOBALS['wl_email']['smtp_user']?>">     
						</td>
					  </tr> 
					  <tr>
						<th width="120">邮箱密码：</th>
						<td>
					   <input  type="password" name="info[wl_email][smtp_pass]" id="smtp_pass" class="input-text" size="25" value="<?=$GLOBALS['wl_email']['smtp_pass']?>">     
						</td>
					  </tr> 
					 <tr>
						<th width="120">邮件设置测试：</th>
						<td>
					   <input type="text" name="test_email" id="test_email" class="input-text" size="15" value=""> 
					   <input class="button" onclick="javascript:test_mail();" value="测试发送" type="button">  填写收件人email地址  
						</td>
					  </tr>      
					  <tr>
						<th width="120">密码找回邮件正文内容：</th>
						<td>
						<textarea cols="120" rows="8" name="info[wl_email][lost_pwd_message]" id="lost_pwd_message" class="input-text"><?=$GLOBALS['wl_email']['lost_pwd_message']?></textarea><br />
						&lt;username&gt; 替换用户名<br>&lt;time&gt;替换时间<br>&lt;url&gt; 替换链接

						</td>
					  </tr>           

				   <tr>  <td colspan="2" style="color:#0066FF">调试信息配置，如非必要，请保持关闭状态</td></tr>
					  <tr>
						<th width="120">数据库调试模式：</th>
						<td>
						<select name="info[wl_ts][db_debug]">
						  <option value="true" <?php if($GLOBALS['wl_ts']['db_debug']==true)echo 'selected';?>>开启</option>
						  <option value="false" <?php if($GLOBALS['wl_ts']['db_debug']==false)echo 'selected';?>>关闭</option>
						</select>  
						</td>
					  </tr>
					 <tr>
						<th width="120">调试报告：</th>
						<td>
						 <select name="info[wl_ts][db_debug_file]">
						  <option value="true" <?php if($GLOBALS['wl_ts']['db_debug_file']==true)echo 'selected';?>>开启</option>
						  <option value="false" <?php if($GLOBALS['wl_ts']['db_debug_file']==false)echo 'selected';?>>关闭</option>
						</select>  
						</td>
					  </tr> 
					   <tr>
						<th width="120">php警告信息：</th>
						<td>
						<select name="info[wl_ts][error]">
						  <option value="true" <?php if($GLOBALS['wl_ts']['error']==true)echo 'selected';?>>开启</option>
						  <option value="false" <?php if($GLOBALS['wl_ts']['error']==false)echo 'selected';?>>关闭</option>
						</select>    
						</td>
					  </tr> 
					 <tr>
						<th width="120">缓存首页(24h)：</th>
						<td>
						<select name="info[wl_ts][cache]">
						  <option value="true" <?php if($GLOBALS['wl_ts']['cache']==true)echo 'selected';?>>开启</option>
						  <option value="false" <?php if($GLOBALS['wl_ts']['cache']==false)echo 'selected';?>>关闭</option>
						</select>    
						</td>
					  </tr>    
				</table>
				<div class=" col_tab_box" style=" position: relative;background: none;box-shadow: none;">
					<a class="button submit"><i></i><input name="dosubmit" type="submit" value="提交"></a>
				</div>
			</form>
		</div>
		<div class="nav10"></div>
	</div>
</div>



</body>
</html>

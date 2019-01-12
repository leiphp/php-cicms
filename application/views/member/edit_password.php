<?php $this->load->view('member/head');?>
     
<body>
<?php $this->load->view('member/top');?>

<div class="member_body">
 <div class="member_body_left" id='member_body_left'>
     <?php $this->load->view('member/left_menu');?>     
  </div>
        
    <div class="member_body_right" id='member_body_right'>
<?php $this->load->view('member/sys_notice');?>     

<div class="pad-10">

<div class="col-tab">


<ul class="tabBut cu-li"> 
  <li id="tab_setting_1" class="on" onClick="switchmodTag('tab_setting_','div_setting_','1');this.blur();">修改密码</li>
</ul>

<div id="div_setting_1" class="contentList pad-10">
<form name="myform" id="myform" action="<?=base_url();?>member/edit_password" method="post">
<table width="100%" class="table_form ">

      <tr>
        <th width="100">原密码：</th>
        <td>
            <input type="password"  name="info[password]" id="password" class="input-text" size="30" value="" />
		</td>
      </tr>
	
  <tr>
        <th width="100">新密码：</th>
        <td>
              <input type="password"  name="info[new_password]" id="new_password" class="input-text" size="30" value="" />
		</td>
      </tr>   
      <tr>
        <th>确认密码：</th>
        <td>
             <input  type="password"  name="ppwd" id="ppwd" class="input-text" size="30" value="" />
		</td>
     </tr>
      

</table>
 <div class="nav10"></div>
    <input name="dosubmit" id="dosubmit" type="submit" value="提交" class="btn">
</form>

</div>


</div>
</div>



    
    </div>        
</div>


</body>
</html>
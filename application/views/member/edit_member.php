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
   <li id="tab_setting_1" class="on">账号信息</li>
   
</ul>

<div id="div_setting_1" class="contentList pad-10">
<form name="myform" id="myform" action="<?=base_url();?>member/edit_member" method="post">
<table width="100%" class="table_form ">

      <tr>
        <th width="100">用户名：</th>
        <td>
           <?=$this->member_info['username']?>
		</td>
      </tr>
	
  <tr>
        <th width="100">昵称：</th>
        <td>
              <?=$this->member_info['nickname']?>
		</td>
      </tr>   
      <tr>
        <th>邮箱：</th>
        <td>
          <?=$this->member_info['email']?>
		</td>
     </tr>
      <tr>
        <th>真实姓名：</th>
        <td>
          <input type="text" name="info[name]" id="name" class="input-text" size="20" value="<?=$data['res']['name']?>" />  填写后可快速报名培训
		</td>
     </tr>
	 <tr>
        <th>手机：</th>
        <td>
          <input type="text" name="info[tel]" id="tel" class="input-text" size="20" value="<?=$data['res']['tel']?>" /> 填写后可快速报名培训
		</td>
     </tr>
	 <tr>
        <th>QQ：</th>
        <td>
          <input type="text" name="info[qq]" id="qq" class="input-text" size="20" value="<?=$data['res']['qq']?>" />
		</td>
     </tr>
    <tr>
        <th width="100">会员类型：</th>
        <td>
             <?=$this->member_info['gname']?>
		</td>
      </tr>
      
       <tr>
        <th>过期时间：</th>
        <td>
        <?php if($this->member_info['overdate']=='0'){echo '永不过期';}else{echo date('Y-m-d',$this->member_info['overdate']);}?>
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
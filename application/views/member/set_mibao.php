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
  <li id="tab_setting_1" class="on">密保问题设置</li>
</ul>

<?php if($data['type']=='setting'){
//设置密保
?>
<div id="div_setting_1" class="contentList pad-10">
<form name="myform" id="myform" action="<?=base_url();?>member/mibao/" method="post">

<table width="100%" class="table_form ">
      <tr>
        <th width="100">问题1：</th>
        <td>
            <select class="form-control" name="info[ques1]">
<?php foreach($data['mibao_ques'] as $v){?>
       <option value="<?=$v?>"><?=$v?></option>
<?php }?>            
     </select>            
		</td>
      </tr>
   <tr>
        <th>答案一：</th>
        <td>
          <input type="text" name="info[ans1]" id="qq" class="input-text" size="45" value="" />
		</td>
     </tr>	
 <tr>
        <th width="100">问题2：</th>
        <td>
            <select class="form-control" name="info[ques2]">
<?php foreach($data['mibao_ques'] as $v){?>
       <option value="<?=$v?>"><?=$v?></option>
<?php }?>  
              </select>
                             
		</td>
      </tr>  
  <tr>
        <th>答案二：</th>
        <td>
          <input type="text" name="info[ans2]" id="qq" class="input-text" size="45" value="" />
		</td>
     </tr>
</table>
 <div class="nav10"></div>
    <input name="dosubmit" id="dosubmit" type="submit" value="提交" class="btn">
    </form>
</div>
<?php }?>

<?php if($data['type']=='setted'){
//设置密保
?>
<div id="div_setting_1" class="contentList pad-10">
<form name="myform" id="myform" action="<?=base_url();?>member/reset_mibao/" method="post">
<div style="margin-top:20px; margin-left:50px; width:200px;color: #A94442;background-color: #F2DEDE;border-color: #EBCCD1;" class="sys_notice">
    您已经设置了密保
</div>


 <div class="nav10"></div>
   <a href="member/reset_mibao" style=" margin-left:50px;width:180px;color: #FFF;background:#449D44;border-color: #398439;" class="btn">重置密保</a>


    </form>
</div>
<?php }?>



</div>


</div>



    
    </div>        
</div>


</body>
</html>
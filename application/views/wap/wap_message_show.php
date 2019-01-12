<?php $this->load->view('wap/wap_head')?>
  <!--内页主体装容器-->
<section class="page_box">
	<div class="font_content">
		<div class="lyb_nr">
			  <span>您的留言我们会第一时间回复！</span> 
			  <form action="#" method="post" id="message" name="message">
			   <p class="inputbox"><b class="hs">*</b><label>姓名：</label><input name="name" id="nickname" placeholder="如 程先生" type="text">
			   </p>
			   <p class="inputbox"><b class="hs">*</b><label>手机：</label><input name="tel" id="mobile" placeholder="如 13866668888" type="text"></p>
			   <p class="inputbox"><label>留言：</label><input name="content" id="content" value="我对此项目很感兴趣，请联系我。" onblur="checkContent()" onfocus="javascript:if(this.value=='我对此项目很感兴趣，请联系我。'){this.value=''}" type="text"></p>
			   <div class="input_xz"><input value="提交留言" class="btn_tj" onclick="javascript:sub_message('<?=base_url();?>')" id="bnt_message" type="button"></div>
			  </form>
		   </div>
	</div>
</section>
<?php $this->load->view('wap/wap_foot')?>
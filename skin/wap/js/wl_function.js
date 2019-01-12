//提交留言
function sub_message(root){
     var elements = document.forms['message'].elements;
     var fullname = elements.name.value;
     var cellphone = elements.tel.value;
     var content = elements.content.value;

	 var url=root + "qt_ajax/ajax_message_wap/";//post提交地址

    if (fullname == "") {
        alert('请填写您的姓名');
        elements.name.focus();
        return false;
    }
    if (cellphone == "") {
        alert('请填写您的手机号码');
        elements.cellphone.focus();
        return false;
    }
  
	$("#bnt_message").attr('disabled',true); //ajax提交前，关闭按钮
	  $.post(url,
       {
		  name:fullname,
		  tel:cellphone,
		  content:content

       },
     function(data,status){
	$("#bnt_message").attr('disabled',false); 
	  if(data==1){alert('表单未填写完整');}
	  if(data==2){
		   alert('留言成功，我们会尽快与您联系');
		   document.getElementById("message").reset();
	   }
      });
}
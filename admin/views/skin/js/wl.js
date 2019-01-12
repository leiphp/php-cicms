function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.Name != "chkAll") 
       e.checked = form.chkAll.checked;
    }
  }
  function ConfirmDel()
{
   if(confirm("确定要删除选中信息吗？一旦删除将不能恢复！"))
     return true;
   else
     return false;
 
 
}

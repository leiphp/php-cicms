<?php $this->load->view('head');?>
<style>

/*整体布局样式*/
body,h1,h2,h3,h4,h5,form,dl{margin:0; padding:0; color:#333;;font: 12px/1.5 Tahoma,Geneva,"宋体";  list-style:none;}
body{ background:#fff;}
div,span,a{overflow:hidden}
ul,li,strong,em{ list-style:none;margin:0; padding:0; overflow:hidden;font-style: normal;}


a:link {color:#386790;text-decoration: none;}
a:visited {text-decoration: none;color: #386790}
a:hover {text-decoration: underline;color:#58C112;}
a:active {text-decoration: none;color: #386790;}
.nav0 {width:100%;height:0px;clear:both;overflow:hidden;}
.nav5 {width:100%;height:5px;clear:both;overflow:hidden;}
.nav10 {width:100%;height:10px;clear:both;overflow:hidden;}

.form{ margin-top:20px; margin-left:10px; text-align:center}
.form .url b{ padding-right:10px;}
.form .url input{ border:1px solid #ddd; height:30px; line-height:30px; width:250px;}

#queren{ height:40px;line-height:40px; background:#DD0000; color:#fff; border:none; font:16px; font-weight:bold; width:200px;  cursor:pointer; text-align:center; margin:0 auto; margin-top:20px;}
.onload{ text-align:center; margin-top:40px; color:#ff0000; font-size:16px; font-weight:bold; line-height:20px; display:none;}

.caji_end{  margin:0 auto;}
.caji_end .ok{ width:100px; height:30px; margin:0 auto; margin-top:20px;}
.caji_end .ok .l{ width:30px; height:30px; float:left; background:url(<?=base_url();?>views/skin/layer/skin/default/icon.png)  no-repeat -30px 0px;}
.caji_end .ok .r{ width:70px; float:left; height:30px; line-height:30px; font-size:16px; color:#009966; font-weight:bold;}

.caji_end .ok_2{ width:350px; margin:0 auto; margin-top:30px;}
.caji_end .ok_2 .txt{height:30px; line-height:30px; font-size:12px;}
.caji_end .ok_2 .txt span{ color:#ff0000}

#fuzhi{ float:right; height:30px;line-height:20px; background:#DD0000; color:#fff; border:none; font:14px; font-weight:bold; width:50px;  cursor:pointer; text-align:center; margin:0 auto; margin-top:0px;}
</style>

<?php 

//处理过采集的页面
if(!empty($data)){

?> 
 <script>
var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
   <?php
	   echo "parent.$('#title').val('".$data['title']."');";
	     echo "parent.$('#setHtml').val('".$data['content']."');";
	 ?>  
	 parent.$("#setHtml").trigger("click");
  //  parent.layer.close(index);
   
 </script>
 <div class="caji_end">
   <div class="ok"><div class="l"></div><div class="r">采集成功</div></div>
   <div class="ok_2">
     <div class="txt"><span>提示：</span>如果编辑器没有变化，请点击复制按钮，自行粘贴到源码</div>
      <button id="fuzhi">复制</button>
      <div style="display:none" id="txt_CopyLink"><?=$data['content']?></div>
   </div>

</div>
 
 
 
<?php }else{ ?>
  
         <div class="form">
           <form action="<?=base_url();?>index.php/layer/caiji_wx_a/" method="get"  id="caiji_wx">
            <div class="url"><b>微信文章url:</b><input id="url" value="" type="text" name="url"  placeholder="请输入微信文章的链接url"  ></div>
            </form>
             <button id="queren">开始采集</button>
         </div>
        
        <div class="onload" >
          <div class="txt">正在玩命采集中</div>
          <img src="<?=base_url();?>views/skin/layer/skin/default/loading-0.gif" /></div>
        </div> 

<?php }?>




<script>

//点击采集
$('#queren').on('click', function(){
  $("#queren").attr("disabled", true);
  $('#caiji_wx').submit(); 
  $(".onload").css("display","block");
  $(".form").css("display","none");
});

//点击复制
$('#fuzhi').on('click', function(){
  copyToClipboard($("#txt_CopyLink").html());
});


//点击文本框复制其内容到剪贴板上方法
function copyToClipboard(txt) {
  if (window.clipboardData) {
    window.clipboardData.clearData();
    window.clipboardData.setData("Text", txt);
    alert("已经成功复制到剪帖板上！");
  } else if (navigator.userAgent.indexOf("Opera") != -1) {
    window.location = txt;
  } else if (window.netscape) {
    try {
      netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
    } catch (e) {
      alert("被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将'signed.applets.codebase_principal_support'设置为'true'");
    }
    var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
    if (!clip) return;
    var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
    if (!trans) return;
    trans.addDataFlavor('text/unicode');
    var str = new Object();
    var len = new Object();
    var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
    var copytext = txt;
    str.data = copytext;
    trans.setTransferData("text/unicode", str, copytext.length * 2);
    var clipid = Components.interfaces.nsIClipboard;
    if (!clip) return false;
    clip.setData(trans, null, clipid.kGlobalClipboard);
    alert("已经成功复制到剪帖板上！");
  }
}

</script>

</body>
</html>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>404-该页无法显示</title>
</head>
 <style>
 *{ margin:0px; padding:0px; font-size:14px; font-family:"宋体"}
 .box{ width:600px; height:220px; border:2px dashed #CCCCCC; margin:0 auto; margin-top:100px; padding:30px;}
h1{ color:#0099FF; font-weight:bold; font-size:40px; font-family:"宋体"; margin:20px 0px;}
h2{color:#0099FF; font-size:16px; font-family:Arial, Helvetica, sans-serif; margin:10px 0px;}
.link{ margin-top:20px;}
.des{ margin:10px 0px;}
.link a{ display:inline-table; padding:10px 20px; text-decoration:none; background:#0099FF; color:#fff}
.mes,#mes{ font-weight:bold; color:#ff0000;}
 </style>   
<body>
  <div class="box">
   <h1>抱歉、找不到此页面！</h1>
   <h2>Sorry,the site now can not be accessed</h2>
   <div class="des">您请求的页面暂时无法找到，建议您返回首页浏览</div>
    <div class="des">将在 <span id="mes" class="mes">5</span> 秒钟后返回到首页</div>
   <div class="link"><a href="/">返回首页</a></div>
  </div>
      <script>
    var i = 5;
    var timer;
    timer = setInterval("fun()", 1000);

    function fun() {
        if (i == 0) {
            window.location.href = "/";
            clearInterval(timer);
        }
        document.getElementById("mes").innerHTML = i;
        i--;
    }
    </script>
    
  
</body>
</html>
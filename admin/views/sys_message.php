<!doctype html>
<html lang="zh-cn">
<style>
a{ color:#000000}
.tishi{ color:#fff; background:#3399CC; line-height:30px; height:30px; width:100px; text-align:center}
</style>
<body>
		        <div style="margin:100px auto; width:500px; border:4px solid #3399CC">
				    <table width="400px" cellspacing="0" cellpadding="5" class="border_table_org" align="center" >
				        <thead>
				        <tr><th align="center"><div class="tishi">提示信息</div></th></tr>
				        </thead>
				        <tbody>
				        <tr>
				            <td>
				                <div align="center"><br />
				                    <div style="color:red;font-weight:bold"><?php echo $msg; ?></div>
				                    <br />
				          
				                    <?php if($auto): ?>
				                        <script>
				                            function redirect($url)
				                            {
				                                location = $url;
				                            }
				                            
				                            setTimeout("redirect('<?php echo $goto; ?>');", <?php echo $pause; ?>);
				                        </script>
				                        <a href="<?php echo $goto; ?>"><?php echo "页面正在自动转向，你也可以点此直接跳转！"; ?></a>
				                       
				                        <br />
				                        <br />
				                    <?php endif; ?>
				                </div>
				            </td>
				        </tr>
				        </tbody>
				    </table>
				</div>
</body>
</html>

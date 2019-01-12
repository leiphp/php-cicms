<section class="section-wrap contact">
	<div class="container">
		<div class="row ">
			<div class="grid_66 floatL">
				<form method="post" name="message" id="message" >
	              <p>
	                <input type="text"  class="form-control"  name="name" placeholder="姓名" autocomplete="off">
	              </p>
	              <p>
	                <input type="text" class="form-control" name="tel" placeholder="电话" autocomplete="off">
	              </p>
	              <p>
	                <input type="text" class="form-control" name="title" placeholder="标题" autocomplete="off" id="title">
	              </p>
	              <p>
	                <textarea class="form-control" name="content" placeholder="内容" autocomplete="off" id="content"></textarea>
	              </p>
	              <p>
	              <input type="button" value="在线留言" class="submit-message" onclick="javascript:sub_message('<?=base_url();?>')" id="bnt_message">
	              </p>
	            </form>
			</div> <!-- end col -->
					
<div class="grid_39 floatR ind_con_text">
<?=$data['res']['content']?>
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section>
        
<div class="page_contact">
	<div class="map main">
		<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.2&services=true"></script>
        <div class="grid " id="dituContent"></div>
        <!--百度地图容器-->
    </div>
</div>
var initScreen=function(callback){//初始化html  font-size
    $("html").css("font-size",document.documentElement.clientWidth/375*312.5+"%");//长页面时使用,不缩放
	if (navigator.appName === 'Microsoft Internet Explorer') { //判断是否是IE浏览器
		if (navigator.userAgent.match(/Trident/i) && navigator.userAgent.match(/MSIE 8.0/i)) { //判断浏览器内核是否为Trident内核IE8.0
			return
		}
	}
	$('#rem').html('html{font-size:'+document.documentElement.clientWidth/375*312.5+'%;}')
}
onResize();
var windowTop =$(document).scrollTop()
var scrolled = $(document).scrollTop()
$(function() {
	//$('input, textarea').placeholder();
	//right show
	$('.open-service').on('click', function(){
		$(".web-right").addClass("ani");
	})
	//right hide
	$('.close').on('click', function(){
		$(".web-right").removeClass("ani");
	})
	//手机菜单按钮点击，展开导航菜单
	$('.mobile-btn').on('click', function(){
		$('.bg').show();
		setTimeout(function() {
			$(".move,.nav,html").addClass("open");
		}, 1);
	})
	//蒙层点击，收起导航菜单
	$('.bg').on('click', function(){
		$(".move,.nav,html").removeClass("open");
		setTimeout(function() {
			$(".bg").stop().fadeOut(300);
		}, 300);
	})
	//返回头部
	$(".icon-top").on("click", function(){
		var _this = $(this);
		$('html,body').animate({ scrollTop: 0 }, 500 ,function(){
			_this.hide();
		});
	});
	if( $(document).scrollTop() > 100){
		$(".icon-top").show();
	}else{
		$(".icon-top").hide();
	}

});

//缩放
function onResize(){
	if($(window).width()<1350){
		//rem设置
		initScreen();
	}else{
		$('html').attr('style','')
	}
}


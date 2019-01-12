





$(function(){
  $(".xn_n_14_wrap_main>ul>li>ul").each(function(){
    $(this).wrapInner('<div class="xn_n_14_wrap_main_jia"></div>')
  });
});



    var IsFast=true;
    var isAutoPlay = true;
    var banner=function(){
    if($("#xn_index_mba_1_wrap").length > 0){
        var $wrap = $("#xn_index_mba_1_wrap");
        var $main = $(".xn_index_mba_1_main");
        var $ul = $(".xn_index_mba_1_ul");
        var $li = $ul.children("li");
        var $lights = $(".xn_index_mba_1_lights");    
        var speed =1200;    
        var $curr_class = "xn_index_mba_1_lightsCurr";
        var timeInterval = 3000;
        $li.css("width",parseInt($main.outerWidth(true)));
        $ul.css("width",$li.length * $li.outerWidth(true));   
        $lights.html("");
        $li.each(function(){
            $lights.append("<span></span>");
            $(this).attr("lights",$(this).index());
        });
        var idx;        
        var size = $li.size();
        //点击焦点图切换：
        $lights.children().first().addClass($curr_class);
        $lights.children("span").click(function(){      
            var index = $(this).index();
            idx = parseInt($ul.children().first().attr("lights"));
            var num = index-idx;
            num = num>0?num:num+size;
            for(var i = 0;i < num ;i++){                        
                $ul.append($ul.children().first()); 
            }
            $ul.stop().animate({"left":0},3000);
            idx = $ul.children().first().attr("lights");
            $lights.children().eq(idx).addClass($curr_class).siblings().removeClass($curr_class);
            //$ul.animate({"left":-index*$li.outerWidth(true)},speed);
            //$(this).addClass($curr_class).siblings().removeClass($curr_class);       
        });  
        //左右切换： 
        function nextImg(){ 
            $ul.stop().animate({left:"-"+$li.outerWidth(true) +"px"},speed,function(){              
                $ul.append($ul.children().first());         
                $ul.css("left",0);
                idx = $ul.children().first().attr("lights");
                $lights.children().eq(idx).addClass($curr_class).siblings().removeClass($curr_class);
                return idx;
            }); 
        }           
        function prevImg(){
            $ul.css('left',-$li.outerWidth(true));
            $ul.prepend($ul.children().last());
            $ul.stop().animate({"left":0},3000);
            idx = $ul.children().first().attr("lights");
            $lights.children().eq(idx).addClass($curr_class).siblings().removeClass($curr_class);
        }
        if(IsFast){
            IsFast=false;
            var auto = setInterval(function(){
                if(isAutoPlay){
                    nextImg();
                }
            },timeInterval);
        }
        $ul.mouseover(function(){
            clearInterval(auto);
        });
        $ul.mouseleave(function(){
            IsFast=false;
            auto = setInterval(function(){
            if(isAutoPlay){
                nextImg();
            }
        },timeInterval);
        });
        var dragDistance = 80 ;
        var dragY = 20;
    } 
    } 
$(function(){
  banner();
  $(window).resize(function(){ banner();})
});  



var xn_ba_js_1_autoPlay = true;
var xn_ba_js_1_interval = 4000;
var bannerW = "100%";
var xn_ba_js_1_nextfunc;
var xn_ba_js_1_timer;
$(document).ready(function () {
    if ($("#xn_ba_js_1_banner").length>0) {
        xn_ba_js_1_start();
    };
});
var xn_ba_js_1_start = function () {
    var maxLen = 0;
    var index = 0;
    var prev = -1;
    var imgW, imgH, sizeW, sizeH = 0;
    var running = false;
    maxLen = $(".xn_ba_js_1_element").length;
    imgW = $(".xn_ba_js_1_bigImg").find("img").eq(0).width();
    imgH = $(".xn_ba_js_1_bigImg").find("img").eq(0).height();
    for (var i = 0; i < $(".xn_ba_js_1_element").length; i++) {
        var ele = $(".xn_ba_js_1_element").eq(i).find("img");
        ele.attr("src", ele.attr("data-original"));
    }
    var btnData = "";
    for (var i = 0; i < maxLen; i++) btnData += '<li class="xn_ba_js_1_element_btn">';
    $(".xn_ba_js_1_btn").html(btnData);
    var btn = $(".xn_ba_js_1_btn").find("li").eq(0);
    var btnW = btn.width() + Math.round(btn.css("margin-left").replace(/[a-zA-Z]/g, ""));
    $(".xn_ba_js_1_btn").css("width", maxLen * btnW);
    btn.attr("class", "xn_ba_js_1_element_btn_on");
    $(".xn_ba_js_1_banner").css("visibility", "visible");
    for (var i = 0; i < maxLen; i++) {
        $(".xn_ba_js_1_element").eq(i).attr("id", "ea_ba_no_b_" + i);
        var _pos = Math.round(imgW * (i - index) + sizeW / 2 - imgW / 2);
        if (i == index) _opa = 1;
        if (_pos > sizeW) {
            _pos -= maxLen * imgW
        } else if (_pos < -imgW) {
            _pos += maxLen * imgW
        }
        $(".xn_ba_js_1_element").eq(i).css({
            left: _pos,
            opacity: 0
        }).animate({
            opacity: _opa
        }, {
            duration: 400,
            easing: 'linear'
        })
    }
    onResize();
    $(window).resize(onResize);
    function onResize() {
        for (var i = 0; i < maxLen; i++) {
            if (bannerW == "100%") {
                sizeW = $(window).width();
            } else {
                sizeW = parseInt(bannerW);
            }
            var _pos = Math.round(imgW * (i - index) + sizeW / 2 - imgW / 2);
            var _opa = 1;
            if (i == index) _opa = 1;
            if (_pos > sizeW) {
                _pos -= maxLen * imgW
            }
            $(".xn_ba_js_1_element").eq(i).stop().css({
                left: _pos,
                opacity: _opa
            })
        }
    };
    $(".xn_ba_js_1_btn li").each(function (i) {
        $(this).click(function () {
            skipHandler((i));
        });
    });
    timerRepeat();
    function skipHandler(target) {
        if (target == index) return;
        var d = 1;
        var pure = index;
        if (target < pure) d = -1;
        var btn = $(".xn_ba_js_1_btn").find("li");
        btn.eq(pure).attr("class", "xn_ba_js_1_element_btn");
        btn.eq(target).attr("class", "xn_ba_js_1_element_btn_on");
        var len;
        if (d == 1) {
            len = target - pure;
            if (len <= 1) {
                index = target;
                nextPage();
            } else {
                for (var k = pure; k <= target; k++) {
                    index = k;
                    nextPage();
                }
            }
        } else {
            len = index - target;
            if (len <= 1) {
                index = target;
                prevPage();
            } else {
                for (var k = index; k >= target; k--) {
                    index = k;
                    prevPage();
                }
            }
        }
    }
    function timerRepeat() {
        if (!xn_ba_js_1_autoPlay) return;
        xn_ba_js_1_nextfunc = isPause;
        xn_ba_js_1_timer = setInterval(xn_ba_js_1_nextfunc, xn_ba_js_1_interval);
    }
    function isPause() {
        var isRun = true;
        if (typeof parent.runonce != 'undefined') {
            isRun = parent.runonce;
        }
        if (isRun) {
            var cur = index;
            cur++;
            if (cur > maxLen - 1) cur = 0;
            skipHandler(cur);
            return false;
        } else {
            return true;
        }
    }
    function nextPage() {
        if (xn_ba_js_1_timer) {
            clearInterval(xn_ba_js_1_timer);
            timerRepeat();
        }
        if ($(window.parent.bannerparam).length > 0) {
            window.parent.bannerparam.cur_ba_index = index;
        }
        _pict = $(".xn_ba_js_1_element");
        for (var i = 0; i < maxLen; i++) {
            var _pos = Math.round(imgW * (i - index) + sizeW / 2 - imgW / 2);
            var _opa = 1;
            if (i == index) _opa = 1;
            if (_pos > sizeW) {
                _pos -= maxLen * imgW
            } else if (_pos < -imgW * 2) {
                _pos += maxLen * imgW
            }
            _pict.eq(i).stop().css({
                left: _pos + imgW
            }).animate({
                left: _pos,
                opacity: _opa
            }, {
                duration: 700,
                easing: 'easeOutQuint'
            })
        }
    }
    function prevPage() {
        if (xn_ba_js_1_timer) {
            clearInterval(xn_ba_js_1_timer);
            timerRepeat();
        }
        if ($(window.parent.bannerparam).length > 0) {
            window.parent.bannerparam.cur_ba_index = index;
        }
        for (var i = 0; i < maxLen; i++) {
            var _pos = Math.round(imgW * (i - index) + sizeW / 2 - imgW / 2);
            if (_pos < -imgW) {
                _pos += maxLen * imgW
            } else if (_pos > sizeW + imgW) {
                _pos -= maxLen * imgW
            }
            $(".xn_ba_js_1_element").eq(i).stop().css({
                left: _pos - imgW
            }).animate({
                left: _pos
            }, {
                duration: 700,
                easing: 'easeOutQuint'
            })
        }
    }
}
jQuery.extend(jQuery.easing, {
    def: 'easeOutQuint',
    swing: function (x, t, b, c, d) {
        return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
    }, easeOutQuint: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
    }
});



$(function(){
    if($("#xn_c_index_275_wrap").length > 0){
        var $tUl = $("#xn_c_index_275_tUl");
        var $tLi = $tUl.children("li");
        var $cUl = $("#xn_c_index_275_cUl");
        var $cLi = $cUl.children("li");    
        var $cWrap = $("#xn_c_index_275_cWrap");
        var $cMain = $(".xn_c_index_275_cMain");
        var currClass = "xn_c_index_275_tCurr";
        var $left = $("#xn_c_index_275_left");
        var $right = $("#xn_c_index_275_right");
        var $wrap = $("#xn_c_index_275_wrap");
        var speed = 500;
        var isAutoPlay = false;
        var timeInterval = 3000;
        var bak_href = $tLi.first().find('a').attr('bak_href');
        $tLi.first().addClass(currClass);
        $tLi.first().find('a').attr('href',bak_href);
        $cLi.each(function(){
            var _this = $(this);
            _this.attr("index",_this.index());
        });
        $cLi.css("width",$cWrap.outerWidth(true));        
        $cUl.css("width",$cLi.outerWidth(true) * $cLi.length).css("position","relative");
        var idx = 1;
        var size = $cLi.size();
        //点击类别切换：
         $("#xn_c_index_275_cImg img").load(function(){
            $cUl.css("height",$cLi.eq(0).outerHeight(true));    
        });           
        $tLi.click(function(){  
            var _this = $(this);
        	bak_href = _this.find('a').attr('bak_href');
            idx = _this.index()+1;
            _this.addClass(currClass).siblings().removeClass(currClass); 
            $cUl.stop().animate({"left":"-"+$cLi.outerWidth(true) * _this.index()},speed,function(){
        		_this.find('a').attr('href',bak_href);
        		_this.siblings().find('a').removeAttr('href');
            });
        });
        $cMain.each(function(){
            $(this).css("width",$(this).children("li").length * $(this).children("li").outerWidth(true));
        });
        //选项卡左右切换：  
        function nextDiv(){ 
            if(idx < $cLi.length){                  
                $cUl.stop().animate({"left":"-"+$cLi.outerWidth(true)*idx},speed);
                $tLi.eq(idx).addClass(currClass).siblings().removeClass(currClass);
                idx++;  
            }else{  
                $cUl.stop().animate({"left":"-"+$cLi.outerWidth(true)*($cLi.length-1) - 100 +"px"},speed/$cLi.length);
                $cUl.animate({"left":"-"+$cLi.outerWidth(true)*($cLi.length-1)},speed/$cLi.length);
            }           
        }           
        function prevDiv(){
            if(idx > 1){
                idx--;
                $cUl.stop().animate({"left":"-"+$cLi.outerWidth(true)*(idx-1)});
                $tLi.eq(idx-1).addClass(currClass).siblings().removeClass(currClass);
            }else{
                $cUl.stop().animate({"left":100+"px"},speed/$cLi.length);
                $cUl.animate({"left":0},speed/$cLi.length);
            }
        }   
        //点击箭头左右切换：
        $left.click(function(){
            nextImg();              
        });
        $right.click(function(){                
            prevImg();
        });
        function prevImg(){
            var _index = $(".xn_c_index_275_tCurr").index();
            var $items = $(".xn_c_index_275_cLi").eq(_index).children("ul");
            var $items_child_width = $items.children("li").outerWidth(true);
            $items.css("position","relative");
            $items.css('left',-$items_child_width);
            $items.prepend($items.children().last());
            $items.stop().animate({"left":0},speed);
        }
        function nextImg(){
            var _index = $(".xn_c_index_275_tCurr").index();
            var $items = $(".xn_c_index_275_cLi").eq(_index).children("ul");
            var $items_child_width = $items.children("li").outerWidth(true);
            $items.css("position","relative");
            $items.stop().animate({left:"-"+$items_child_width +"px"},speed,function(){
                $items.append($items.children().first());
                $items.css("left",0);
            });         
        }
        var autoPlay = null;
        if(isAutoPlay == true){ 
            autoPlay = setInterval(nextImg,timeInterval);
            $wrap.hover(function(){
                clearInterval(autoPlay);
            },function(){
                autoPlay = setInterval(nextImg,timeInterval);
            });
        }
    }
});


$(function(){
    var wrap_len = $(".xn_c_index_48_bigbox");
    if(wrap_len.length > 0){
        var speed = 500;
        var cli = wrap_len.children("div")
        cli.first().addClass("xn_c_index_48_curr");
        cli.hover(function(){
            $(this).addClass("xn_c_index_48_curr").siblings().removeClass("xn_c_index_48_curr");
        });
    }
});


$(function(){
   $(".section").height($(window).height());
    if($("#xn_c_index_507_wrap").length > 0) {
        var isAutoPlay = true;   //是否自动
        var speed = 100;        //速度
        var cul = $(".xn_c_index_507_ul");
        var cli = $(".xn_c_index_507_li");
        var nums = $(".xn_c_index_507_nums");
        var count = cli.length;
        var index = 0;
        var curr_index = 0;
        var pn_index = 0;
        //初始化
        cli.each(function(){
            $(this).attr("mark",$(this).index());
            $(this).addClass("xn_c_index_507_li"+$(this).index());
            nums.append("<span></span>");
            if($(this).index() == 0){
                $(this).addClass("iscurr index_507_on");
            }
            if($(this).index() == (count-1)){
                $(this).addClass("islast");
            }
        });
        nums.find("span:first").addClass("curr");
        //获取相关参数
        var cbox_w = $(".xn_c_index_507_cbox").width();
        var iscurr = cul.children(".iscurr");
        var iscurr_w = iscurr.width();
        var iscurr_h = iscurr.height();
        var iscurr_left = parseInt(iscurr.css("left"));
        var cli_w = cli.eq(index+1).width();
        var cli_h = cli.eq(index+1).height();
        var cli_left = parseInt(cli.eq(index+1).css("left"));
        var cli_top = parseInt(cli.eq(index+1).css("top"));
        //左右切换
        function movePrev(){
            curr_index = index;
            index--;
            if(index < 0){
                index = count-1;
            }
            //当前元素
            cli.eq(curr_index).stop().animate({"width":cli_w,"height":cli_h,"left":cli_left,"top":cli_top,"z-index":"24","opacity":.6},speed).next().css("z-index","23");
            //切换后当前元素
            cli.eq(index).stop().animate({"width":iscurr_w,"height":iscurr_h,"left":iscurr_left,"top":"0px","z-index":"25","opacity":1},speed);
            cli.eq(index).addClass('index_507_on').siblings().removeClass('index_507_on');
            //切换后当前元素下一个元素
            cli.eq(index-1).css({"left":"-100%","z-index":"22"}).stop().animate({"left":"0px","z-index":"23","opacity":.6},speed);
            //焦点元素切换
            nums.find("span").eq(index).addClass("curr").siblings().removeClass("curr");
        }
        function moveNext(){
            curr_index = index;
            index++;
            if(index > (count-1)){
                index = 0;
            }
            if(curr_index == 0){
                pn_index = count-1;
            }else{
                pn_index = curr_index-1;
            }
            //当前元素
            if(index == (count-1)){
                cli.eq(0).stop().animate({"left":cli_left,"z-index":"24"},speed);
            }else{
                cli.eq(index+1).stop().animate({"left":cli_left,"z-index":"24"},speed);
            }
            //切换后当前元素
            cli.eq(index).stop().animate({"width":iscurr_w,"height":iscurr_h,"left":iscurr_left,"top":"0px","z-index":"25","opacity":1},speed,function(){
                cli.eq(pn_index).css({"left":cbox_w,"z-index":"23"});
            });
            cli.eq(index).addClass('index_507_on').siblings().removeClass('index_507_on');
            //切换后当前元素下一个元素
            cli.eq(curr_index).stop().animate({"width":cli_w,"height":cli_h,"left":"0px","top":cli_top,"z-index":"23","opacity":.6},speed);
            //焦点元素切换
            nums.find("span").eq(index).addClass("curr").siblings().removeClass("curr");
        }
        $(".xn_c_index_507_prev").bind("click",function(){
            movePrev();
        });
        $(".xn_c_index_507_next").bind("click",function(){
            moveNext();
        });
        //是否自动切换
        if(isAutoPlay){
            var isAuto = setInterval(moveNext,3000);
            $(".xn_c_index_507_inner").hover(function(){
                clearInterval(isAuto);
            },function(){
                isAuto = setInterval(moveNext,3000);
            });
        }
    }
});


$(function(){
	$(".xn_c_index_507_bottom").click(function(){
	    $("html,body").animate({scrollTop: $("#xn_c_index_163_wrap").offset().top}, 1000);
	    //116 是f5按键代码
	    document.onkeydown=function(e){
        e=e||window.event;
        if(e.keyCode==116){
            $("html,body").scrollTop(0);
        }
    }
	});
});




$(function(){	
	$(".xn_c_index_266_cfInner").find('a').removeAttr("href")
	$('#xn_c_index_266_cfmain2').html($('#xn_c_index_266_cfmain').html());
        var roll=function(){       
			if($('.xn_c_index_266_nrbox').scrollLeft()>$('#xn_c_index_266_cfmain').outerWidth(true)){  
				$('.xn_c_index_266_nrbox').scrollLeft(0);
			}else{
				$('.xn_c_index_266_nrbox').scrollLeft($('.xn_c_index_266_nrbox').scrollLeft()+1);        
			}
        };                            
        var tip=setInterval(roll,20);
        $('.xn_c_index_266_cfInner').hover(function(){
            clearInterval(tip);    
        },function(){
           tip=setInterval(roll,20);
        });	
})


















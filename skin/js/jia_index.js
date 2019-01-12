/*index_cnt*/
$(function() {
  var $window = $(window),
      win_height_padded = $window.height() + 10,
      isTouch = true;
    if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE6.0") 
    { 
        $('.revealOnScroll').css("opacity","1");
    } 
    else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE7.0") 
    { 
        $('.revealOnScroll').css("opacity","1");
    } 
    else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE8.0") 
    { 
        $('.revealOnScroll').css("opacity","1");
    } 
    else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE9.0") 
    { 
        $('.revealOnScroll').css("opacity","1");
    }
  //if (isTouch) { $('.revealOnScroll').addClass('animated'); }
  $window.on('scroll', revealOnScroll);
  function revealOnScroll() {
      var scrolled = $window.scrollTop(),
          win_height_padded = $window.height() - 100;
    //addclass
    $(".revealOnScroll:not(.animated)").each(function () {
        var $this = $(this),
        offsetTop = $this.offset().top;
        if (scrolled + win_height_padded > offsetTop) {
          if ($this.data('timeout')) {
            window.setTimeout(function(){
              $this.addClass('animated ' + $this.data('animation'));
            }, parseInt($this.data('timeout'),10));
          } else {
            $this.addClass('animated ' + $this.data('animation'));
          }
        }else{
          if ($this.data('timeout')) {
            window.setTimeout(function(){
              $this.removeClass('animated ' + $this.data('animation'));
            }, parseInt($this.data('timeout'),10));
          } else {
            $this.removeClass('animated ' + $this.data('animation'));
          }
        }
    });
    //removeclass
    $(".revealOnScroll.animated").each(function (index) {
        var $this     = $(this),
            offsetTop = $this.offset().top;
        if (scrolled + win_height_padded < offsetTop) {
          $(this).removeClass('animated '+$(this).data('animation'));
        }
    });
  }
  revealOnScroll();
});




var offset = 70;


    $(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.navbar').addClass("on-scroll");
      }
      else{
        $('.navbar').removeClass("on-scroll");
      }
    });
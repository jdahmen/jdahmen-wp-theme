var offset = 70;
    $('.navbar li a').click(function(event) {
        event.preventDefault();
        $($(this).attr('href'))[0].scrollIntoView();
        scrollBy(0, -offset);
    });

    $(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.navbar').addClass("on-scroll");
      }
      else{
        $('.navbar').removeClass("on-scroll");
      }
    });
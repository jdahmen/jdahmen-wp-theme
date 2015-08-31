$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    	var target = $(this.hash);
      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
        	$('html,body').animate({
          		scrollTop: target.offset().top - 70
        		}, 1000);
        		return false;
      		}
    	}
  	});
});

$(window).scroll(function() {
  if ($(this).scrollTop() > 1){  
      $('.navbar').addClass("on-scroll");
    }
    else{
      $('.navbar').removeClass("on-scroll");
    }
});

// Responsive form entry styling
$(document).ready(function(){
      $('.container').find('input, textarea').on('keyup blur focus', function(e) {
       
      // Cache our selectors
      var $this = $(this),
          $parent = $this.parent();
   
      // Add or remove classes
      // Check if empty
      if (e.type == 'focus') {
        $parent.removeClass('loaded');
      }
      else if (e.type == 'keyup') {
        if( $this.val() != '' ) {
          $parent.addClass('not-empty'); 
        } else {
          $parent.removeClass('not-empty');   
        }              
      } 
      else if (e.type == 'blur') {
        $parent.addClass('loaded');
        if( $this.val() != '' ) {
          $parent.addClass('not-empty');
        } else {
          $parent.removeClass('not-empty');
        }
      }
  });
});

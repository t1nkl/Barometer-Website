$(document).ready(function() {
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });   
});

/*$(document).ready(function() {
     var top_scroll = $(this).scrollTop();
     var sect0_height = $('#section0').height();
     var if_max_width = false;

     if(top_scroll > sect0_height && !if_max_width) {
        if_max_width = true;  
        $('.scrollTopBut').css("visibility", "visible");
        } else if(top_scroll < sect0_height && if_max_width) {
            if_max_width = false;
            $('.scrollTopBut').css("visibility", "hidden");
        }
 });*/
$(document).ready(function() {
    $( "body" ).scroll(function() {
      console.log('ss');
      if($('.fp-viewing-main')){
          $('.scrollTopBut').css("visibility", "hidden");
        } else {
          $('.scrollTopBut').css("visibility", "visible");
        }
    });
});
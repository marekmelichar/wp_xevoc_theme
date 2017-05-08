(function($) {

	// define variables
	var navOffset,
    	scrollPos = 0;
      // headerOffset = $('header').height();


  // function to run on page load and window resize
	function stickyUtility() {

		// only update navOffset if it is not currently using fixed position
		if (!$("header").hasClass("fixed")) {
			navOffset = $("header").offset().top;
		}

		// apply matching height to nav wrapper div to avoid awkward content jumps
		$(".nav-placeholder").height($("header").outerHeight());

	} // end stickyUtility function

	// run on page load
	stickyUtility();  	

	


// ------------------------- animace HEADER ---------------------------------

	$(window).scroll(function() {

		scrollPos = $(window).scrollTop();

		if (scrollPos > navOffset) {

			$("header").addClass("fixed fadeInDown animated");
		} else {
			$("header").removeClass("fixed fadeInDown animated");
		}

	});



// ------------------------- anchor smooth scroll animace ---------------------------------

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);

      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 150
        }, 1000);
        return false;
      }
    }
  });
});




// ------------------------- SMOOTH SCROLL UP ON LOGO CLICK ---------------------------------

	var logo = $('.logo');

	logo.on('click', function(event) {
		event.preventDefault();
		$('html,body').animate({ scrollTop: 0 });
 	});




})(jQuery);	
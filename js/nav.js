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
          scrollTop: target.offset().top - $("header").outerHeight()
        }, 1000);

				if (target.selector.replace(/#/g, "") === target[0].id) {
					$(`a[href=${target.selector}]`).addClass('green-dot')
					$(`a[href*=#]:not([href=${target.selector}])`).removeClass('green-dot')
				}

        return false;
      }
    }
  });
});



// ------------------------- SMOOTH SCROLL UP ON LOGO CLICK ---------------------------------

	/**
	 * This part handles the highlighting functionality.
	 * We use the scroll functionality again, some array creation and
	 * manipulation, class adding and class removing, and conditional testing
	 */
	var aChildren = $("nav li").children(); // find the a children of the list items
	var aArray = []; // create the empty aArray
	for (var i=0; i < aChildren.length; i++) {
	    var aChild = aChildren[i];
	    var ahref = $(aChild).attr('href');
	    aArray.push(ahref);
	} // this for loop fills the aArray with attribute href values

	$(window).scroll(function(){
	    var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
	    var windowHeight = $(window).height(); // get the height of the window
	    var docHeight = $(document).height();

	    for (var i=0; i < aArray.length; i++) {
	        var theID = aArray[i];
	        var divPos = $(theID).offset().top; // get the offset of the div from the top of page
	        var divHeight = $(theID).height(); // get the height of the div in question
	        if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
	            $("a[href='" + theID + "']").addClass("green-dot");
	        } else {
	            $("a[href='" + theID + "']").removeClass("green-dot");
	        }
	    }

	    if(windowPos + windowHeight == docHeight) {
	        if (!$("nav li:last-child a").hasClass("green-dot")) {
	            var navActiveCurrent = $(".green-dot").attr("href");
	            $("a[href='" + navActiveCurrent + "']").removeClass("green-dot");
	            $("nav li:last-child a").addClass("green-dot");
	        }
	    }
	});







// ------------------------- SMOOTH SCROLL UP ON LOGO CLICK ---------------------------------

	// var logo = $('.logo');
	//
	// logo.on('click', function(event) {
	// 	event.preventDefault();
	// 	$('html,body').animate({ scrollTop: 0 });
 // 	});

 var home = $('a[href="/"]');

 home.on('click', function(event) {
	 event.preventDefault();
	 $('html,body').animate({ scrollTop: 0 });
 });




})(jQuery);

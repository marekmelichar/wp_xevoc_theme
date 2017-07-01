(function($) {

	// $('.thank-you-content a').on('click', function() {
	// 	return localStorage.removeItem('amountOfMeetingRooms');
	// })

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

        // close the mobile nav
        if ($(window).width() < 769) {
   				$('.menu-icon-label').trigger('click')
				}

				if (target.selector.replace(/#/g, "") === target[0].id) {
					$(`a[href=${target.selector}]`).addClass('green-dot')
					// $(`a[href*=#]:not([href=${target.selector}])`).removeClass('green-dot')
				}

        return false;
      }
    }
  });
});



// ------------------------- GREEN DOT ---------------------------------

	/**
	 * This part handles the highlighting functionality.
	 * We use the scroll functionality again, some array creation and
	 * manipulation, class adding and class removing, and conditional testing
	 */
	var aChildren = $("#menu-main-menu li").children(); // find the a children of the list items
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
	        // console.log(theID, Math.floor(windowPos), Math.floor(divPos - $("header").outerHeight()))
	        if (Math.floor(windowPos) === Math.floor(divPos - $("header").outerHeight()) || windowPos >= divPos && windowPos < (divPos + divHeight)) {
	            $("a[href='" + theID + "']").addClass("green-dot");
	        } else {
	            $("a[href='" + theID + "']").removeClass("green-dot");
	        }
	    }

	    // if(windowPos + windowHeight == docHeight) {
	    //     if (!$("#menu-main-menu li:last-child a").hasClass("green-dot")) {
	    //         var navActiveCurrent = $(".green-dot").attr("href");
	    //         $("a[href='" + navActiveCurrent + "']").removeClass("green-dot");
	    //         $("#menu-main-menu li:last-child a").addClass("green-dot");
	    //     }
	    // }
	});







// ------------------------- SMOOTH SCROLL UP ON LOGO CLICK ---------------------------------



 var home = $('a[href="/"]');

 home.on('click', function(event) {
	 event.preventDefault();
	 $('html,body').animate({ scrollTop: 0 });
 });






// ------------------------- SAVE THE VALUE OF AMOUNT OF MEETING ROOMS ---------------------------------

	var btn = $('.price-button')
	var meetingRooms = $('#_number-of-rooms')

	// on page init
	// localStorage.setItem('amountOfMeetingRooms', JSON.stringify(meetingRooms.val()));

	btn.on('click', function() {
		localStorage.setItem('amountOfMeetingRooms', JSON.stringify(meetingRooms.val()));
	})

	meetingRooms.on('change', function() {
		localStorage.setItem('amountOfMeetingRooms', JSON.stringify(meetingRooms.val()));
	})

	var contactInput = $('#contact #rooms-amount')
	var valueFromLocalStorage = localStorage.getItem('amountOfMeetingRooms')

	if (contactInput) {
		contactInput.val(JSON.parse(valueFromLocalStorage))
	}





// ------------------------- SAVE THE VALUE OF CHOSEN PACKAGE ---------------------------------

	var priceBox1 = $('#price-box-1 .price-button')
	var priceBox2 = $('#price-box-2 .price-button')
	var priceBox3 = $('#price-box-3 .price-button')

	var radioBTNFromLocalStorage = localStorage.getItem('radio-checked')

	var radio1 = $('#contact .wpcf7-list-item:nth-child(1) label')
	var radio2 = $('#contact .wpcf7-list-item:nth-child(2) label')
	var radio3 = $('#contact .wpcf7-list-item:nth-child(3) label')

	priceBox1.on('click', function() {
		localStorage.setItem('radio-checked', JSON.stringify(1))
	})

	priceBox2.on('click', function() {
		localStorage.setItem('radio-checked', JSON.stringify(2))
	})

	priceBox3.on('click', function() {
		localStorage.setItem('radio-checked', JSON.stringify(3))
	})

	$(function() {
		switch (radioBTNFromLocalStorage) {
			case "1":
				radio1.trigger('click')
				break;
			case "2":
				radio2.trigger('click')
				break;
			case "3":
				radio3.trigger('click')
				break;
			default:

		}
  });









})(jQuery);

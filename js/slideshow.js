(function($){

  var slideshow = $('.slideshow'),
      slides = $('.slide')

  slideshow.children(':not(:last)').hide()

  slides.on('click', function(){
    slideshow.children(':last').fadeOut(1500, function(){
      $(this).prependTo( slideshow )
    }).prev().fadeIn(1500)
  })

})(jQuery);







// (function($){

//   var slideshow = $('.slideshow')

//   slideshow.children(':not(:last)').hide()

//   var slideInterval = setInterval(function(){
//     slideshow.children(':last').fadeOut(1500, function(){
//       $(this).prependTo( slideshow )
//     }).prev().fadeIn(1500)
//   }, 2500)

//   slides.on('click', function(){
//     clearInterval(slideInterval)
//   })

// })(jQuery);
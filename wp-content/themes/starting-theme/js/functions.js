( function($) {

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.gallerymatch').matchHeight();
    $('.titlematch').matchHeight();
    $('.service').matchHeight();
  }
  window.onload = startMatchHeight;

  $('.bxslider').bxSlider({
  infiniteLoop: true,
  minSlides: 1,
  maxSlides: 1,
  pager: false,
  // auto: true,
  speed: 1500,
  // pause: 5000,
  touchEnabled: false,
  });

  $('.portfolio').bxSlider({
  infiniteLoop: true,
  minSlides: 1,
  maxSlides: 1,
  pager: true,
  // auto: true,
  speed: 1500,
  // pause: 5000,
  touchEnabled: false,
  });

  $(document).ready(function() {
		$(".fancybox").fancybox();
	});

} ) (jQuery);

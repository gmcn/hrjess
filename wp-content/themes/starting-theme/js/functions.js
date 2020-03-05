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

  $('.portfolio_slide').bxSlider({
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

  window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#445a66",
        "text": "#ffffff"
      },
      "button": {
        "background": "#ffffff",
        "text": "#445a66"
      }
    },
    "theme": "classic",
    "position": "bottom",
    "content": {
      "href": "/privacy-policy/"
    }
  })});

} ) (jQuery);

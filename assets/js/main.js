(function($) {

  $( document ).ready(function($) {
    let video = () => {
      $(".play-button").click(function() {
        $('.video-container video').trigger('play')
      });

      $(".pause-button ").click(function() {
        $('.video-container video').trigger('pause')
      });

      $('.video-container video').on('play', function() {
        $(".play-button").fadeOut();
        $(".pause-button").fadeIn();
        $('.video-overlay').fadeOut()
      })

      $('.video-container video').on('pause', function() {
        $(".pause-button").fadeOut();
        $(".play-button").fadeIn();
        $('.video-overlay').fadeIn()
      })


    }
    video();
  })


  
})(jQuery);

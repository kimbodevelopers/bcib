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

        const carouselSlides = () => {

            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    loop:true,
                    center: true,
                    dots: false,
                    autoplay: true,
                    margin: 10,
                    nav: true,
                    navText: ["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],
                    responsive:{
                        0:{
                            items:1
                        },

                        767:{
                            items:1
                        },
                    
    
                        1400:{
                            items:1.5
                        },
                    
                    }
                });

            });
        }

       
        video();
        carouselSlides();

    })



})(jQuery);


$('.jumbotron').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    items:1,
});

var jumbotron = $('.jumbotron');
jumbotron.owlCarousel();
// Go to the next item
$('.arrow-next').click(function() {
    jumbotron.trigger('next.owl.carousel');
})
// Go to the previous item
$('.arrow-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    jumbotron.trigger('prev.owl.carousel', [300]);
});

$('.quote').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    nav:false,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:2,
        }
    }
});

$('.service-box .grid').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav:false,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
});
$('.portofolio-box .grid').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    nav:false,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
});
$('.promo-box').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    items:1,
});
var promo = $('.promo-box');
promo.owlCarousel();
// Go to the next item
$('.arrow-next').click(function() {
    promo.trigger('next.owl.carousel');
})
// Go to the previous item
$('.arrow-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    promo.trigger('prev.owl.carousel', [300]);
});

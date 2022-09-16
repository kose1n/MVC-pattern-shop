$(window).on('scroll', function() {
    var $nav = $('.header'),
        scroll = $(this).scrollTop();

    if (scroll > 50) {
        $nav.addClass('header-scroll');
    } else {
        $nav.removeClass('header-scroll');
    }
});
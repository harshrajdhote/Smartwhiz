var num = 200; //number of pixels before modifying styles

	$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.logo-img').addClass('fixed');
    } else {
        $('.logo-img').removeClass('fixed');
    }
	});
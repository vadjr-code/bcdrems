(function ($) {
	$('.nav-item.has-children > a').click(function (e) {
		e.preventDefault();
	});

	$('#sidebar nav > ul > li > a[href="' + window.location.href + '"]').addClass('current-menu');

	$('#sidebar nav ul.sub-menu > li > a[href="' + window.location.href + '"]').addClass('current-menu');

	$('#sidebar nav a.current-menu').parents('ul.sub-menu').addClass('slide-down');

	// $('.sub-menu:not(.slide-down)').slideUp();

	$('.slide-down').parents('li').addClass('active');
	$('.slide-down').parents('li').siblings().removeClass('active');

	$('.nav-item.has-children').on('click', function () {
		$(this).siblings().removeClass('active').find('.sub-menu').slideUp();
		$(this).toggleClass('active').find('.sub-menu').slideToggle();
	});
})(jQuery);
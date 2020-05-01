(function ($) {
	$('.sub-menu').slideUp();
	$('.nav-item.has-children > a').click(function (e) {
		e.preventDefault();
	});
	$('.nav-item.has-children').on('click', function () {
		$(this).siblings().removeClass('active').find('.sub-menu').slideUp();
		$(this).toggleClass('active').find('.sub-menu').slideToggle();
	});
	tinymce.init({
		menubar: false,
		selector: '.description',
		height: 350,
		plugins: "link",
		default_link_target: "_blank",
		toolbar: 'undo redo bold italic link',
		link_quicklink: true
	});
})(jQuery);
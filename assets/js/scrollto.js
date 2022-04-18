$(document).ready(function() {
	$('.scrollto a').on('click', function scroll(e) {
		e.preventDefault();
		let href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, {
			duration: 370,
			easing: "linear"
		});
		$('.menu__list').removeClass('menu__list_active');
		$('body').removeClass('body_fixed');
		return false;
	});
});
$(document).ready(function() {
	
	$('.format-product').mouseenter(function(){
		$(this).css("border", "1px solid #60CBFF");
		$(this).mouseleave(function(){
			$(this).css("border", "1px solid #F7F7F7");
		});

	});
	
	$(".float-button").click(function() {
		
		$(window).scroll(function () {
		if ($(this).scrollTop() > 100) $('.float-button').fadeIn();
		else $('#goTop').fadeOut();
		});
		$('.float-button').click(function () {
		$('body,html').animate({scrollTop: 0}, 'slow');
		});

		});



	$('.cart').click(function() {
			$('.menu-cart').slideToggle(500);
		});

	$('.navbar-toggle').click(function(){
		$('.menu-navbar').slideToggle(500);

	});

	$('.logo').mouseenter(function(){
		
		$(this).css("color", "#008EFF");
		$(this).mouseleave(function() {
			$(this).css("color", "#fff");
		});

	})


});

$(document).ready(function() {

	$('.btn-plus').click(function(){
		
		var num = eval($(this).prev().children().html());
		$(this).prev().children().html(num + 0.5);
		var price = $(this).prev().prev().children().html();
		$(this).next().children().html(price * (num + 0.5));



	});

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

function validateForm() {
	if (validateSearch()) {
		return true;
	} else {
		$('#search').attr("placeholder", "Vui lòng nhập lại");
		$('#search').val("");
		return false;
	}
}

function validateSearch() {
	var field = $('#search').val();
	var filter = /^\S*(\w+\s*){1,4}$/;

	if (filter.test(field) == false) {
		return false;
	} else {
		return true;
	}
}



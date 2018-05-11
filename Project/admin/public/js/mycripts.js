
$(document).ready(function() {

	
	
	$(".chitiet").click(function(){
		
		$(this).parent().parent().next().slideToggle(500);

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



	$('.logo').mouseenter(function(){
		
		$(this).css("color", "#008EFF");
		$(this).mouseleave(function() {
			$(this).css("color", "#fff");
		});

	})


});

function validateformEditProduct() {
	if (validateMaLoai() & validateTenSP() & validateGia() & validateHang() & validateManHinh() & validateHDH()
		& validateCamSau() & validateCamTruoc() & validateCPU() & validateRam() & validateBoNho() & validateChatLieu()
		& validateTrongLuong() & validatePin() & validateDD() ){
		
		return true;
	} else {
		return false;
	}
}

function validateformProduct() {
	if (validateMaLoai() & validateTenSP() & validateGia() & validateHang() & validateManHinh() & validateHDH()
		& validateCamSau() & validateCamTruoc() & validateCPU() & validateRam() & validateBoNho() & validateChatLieu()
		& validateTrongLuong() & validatePin() & validateDD() & validateAnh()) {
		
		return true;
	} else {
		return false;
	}
}



function validateMaLoai() {
	var field = $('#maloai').val();
	var filter = /^[1-2]$/;
	if (filter.test(field) == false) {
		
		$('#maloai').parent().parent().addClass('has-error');
		$('#maloai').next().html('Sai mã loại hiện tại mã loại gồm 1 và 2');
		return false;
	} else {
		$('#maloai').parent().parent().removeClass('has-error');
		$('#maloai').next().html('');
		return true;
	}
}

function validateTenSP() {
	var field = $('#tensp').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#tensp').parent().parent().addClass('has-error');
		$('#tensp').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#tensp').parent().parent().removeClass('has-error');
		$('#tensp').next().html('');
		return true;
	}
}

	function validateGia() {
	var field = $('#gia').val();
	var filter = /^[0-9]+$/;
	if (filter.test(field) == false) {
		
		$('#gia').parent().parent().addClass('has-error');
		$('#gia').next().html('Bạn phải nhập số');
		return false;
	} else {
		$('#gia').parent().parent().removeClass('has-error');
		$('#gia').next().html('');
		return true;
	}
}

function validateHang() {
	var field = $('#hang').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#hang').parent().parent().addClass('has-error');
		$('#hang').next().html('Bạn phải nhập hãng');
		return false;
	} else {
		$('#hang').parent().parent().removeClass('has-error');
		$('#hang').next().html('');
		return true;
	}
}

function validateManHinh() {
	var field = $('#manhinh').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#manhinh').parent().parent().addClass('has-error');
		$('#manhinh').next().html('Bạn phải nhập màn hình');
		return false;
	} else {
		$('#manhinh').parent().parent().removeClass('has-error');
		$('#manhinh').next().html('');
		return true;
	}
}

function validateHDH() {
	var field = $('#hedieuhanh').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#hedieuhanh').parent().parent().addClass('has-error');
		$('#hedieuhanh').next().html('Bạn phải hệ điều hành');
		return false;
	} else {
		$('#hedieuhanh').parent().parent().removeClass('has-error');
		$('#hedieuhanh').next().html('');
		return true;
	}
}

function validateCamSau() {
	var field = $('#camsau').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#camsau').parent().parent().addClass('has-error');
		$('#camsau').next().html('Bạn phải nhập camera sau');
		return false;
	} else {
		$('#camsau').parent().parent().removeClass('has-error');
		$('#camsau').next().html('');
		return true;
	}
}

function validateCamTruoc() {
	var field = $('#camtruoc').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#camtruoc').parent().parent().addClass('has-error');
		$('#camtruoc').next().html('Bạn phải nhập camera sau');
		return false;
	} else {
		$('#camtruoc').parent().parent().removeClass('has-error');
		$('#camtruoc').next().html('');
		return true;
	}
}

function validateCPU() {
	var field = $('#cpu').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#cpu').parent().parent().addClass('has-error');
		$('#cpu').next().html('Bạn phải nhập thông số của cpu');
		return false;
	} else {
		$('#cpu').parent().parent().removeClass('has-error');
		$('#cpu').next().html('');
		return true;
	}
}


function validateRam() {
	var field = $('#ram').val();
	var filter = /^[0-9]+$/;
	if (filter.test(field) == false) {
		
		$('#ram').parent().parent().addClass('has-error');
		$('#ram').next().html('Thông số ram là một số');
		return false;
	} else {
		$('#ram').parent().parent().removeClass('has-error');
		$('#ram').next().html('');
		return true;
	}
}

function validateBoNho() {
	var field = $('#bonho').val();
	var filter = /^[0-9]+$/;
	if (filter.test(field) == false) {
		
		$('#bonho').parent().parent().addClass('has-error');
		$('#bonho').next().html('Thông số bộ nhớ là một số');
		return false;
	} else {
		$('#bonho').parent().parent().removeClass('has-error');
		$('#bonho').next().html('');
		return true;
	}
}

function validateChatLieu() {
	var field = $('#chatlieu').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#chatlieu').parent().parent().addClass('has-error');
		$('#chatlieu').next().html('Bạn phải nhập chất liệu');
		return false;
	} else {
		$('#chatlieu').parent().parent().removeClass('has-error');
		$('#chatlieu').next().html('');
		return true;
	}
}

function validateTrongLuong() {
	var field = $('#trongluong').val();
	var filter = /^[0-9]+$/;
	if (filter.test(field) == false) {
		
		$('#trongluong').parent().parent().addClass('has-error');
		$('#trongluong').next().html('Bạn phải nhập trong lượng');
		return false;
	} else {
		$('#trongluong').parent().parent().removeClass('has-error');
		$('#trongluong').next().html('');
		return true;
	}
}

function validatePin() {
	var field = $('#pin').val();
	var filter = /^[0-9]+$/;
	if (filter.test(field) == false) {
		
		$('#pin').parent().parent().addClass('has-error');
		$('#pin').next().html('Bạn phải nhập thông số pin là một số');
		return false;
	} else {
		$('#pin').parent().parent().removeClass('has-error');
		$('#pin').next().html('');
		return true;
	}
}

function validateDD() {
	var field = $('#dacdiem').val();
	var filter = /^.{1,10000}$/;
	if (filter.test(field) == false) {
		
		$('#dacdiem').parent().parent().addClass('has-error');
		$('#dacdiem').next().html('Bạn phải nhập đặc điểm không quá 2000 ký tự');
		return false;
	} else {
		$('#dacdiem').parent().parent().removeClass('has-error');
		$('#dacdiem').next().html('');
		return true;
	}
}

function validateAnh() {
	var field = $('#anh').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#anh').parent().parent().addClass('has-error');
		$('#anh').next().html('Bạn phải chọn ảnh');
		return false;
	} else {
		$('#anh').parent().parent().removeClass('has-error');
		$('#anh').next().html('');
		return true;
	}
}


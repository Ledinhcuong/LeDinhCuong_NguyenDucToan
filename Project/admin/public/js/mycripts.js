
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
	var filter = /^[1-5]$/;
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




function validateAddQC() {
	if (validateMaLoai() &  validateMaSP() & validateTrangThai() & validateNoiDung() & validateAnh()){
		
		return true;
	} else {
		return false;
	}
}

function validateEditQC() {
	if (validateMaLoai() &  validateMaSP() & validateTrangThai() & validateNoiDung()){
		
		return true;
	} else {
		return false;
	}
}


function validateMaSP() {
	var field = $('#masp').val();
	var filter = /^\d+$/;
	if (filter.test(field) == false) {
		
		$('#masp').parent().parent().addClass('has-error');
		$('#masp').next().html('Nhập mã sản phẩm là các số');
		return false;
	} else {
		$('#masp').parent().parent().removeClass('has-error');
		$('#masp').next().html('');
		return true;
	}
}

function validateTrangThai() {
	var field = $('#moi').val();
	var filter = /^[0-1]$/;
	if (filter.test(field) == false) {
		
		$('#moi').parent().parent().addClass('has-error');
		$('#moi').next().html('Trạng thái chỉ nhận 2 giá trị 0 và 1');
		return false;
	} else {
		$('#moi').parent().parent().removeClass('has-error');
		$('#moi').next().html('');
		return true;
	}
}



function validateNoiDung() {
	var field = $('#noidungqc').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#noidungqc').parent().parent().addClass('has-error');
		$('#noidungqc').next().html('Bạn phải nhập nội dung cho quảng cáo');
		return false;
	} else {
		$('#noidungqc').parent().parent().removeClass('has-error');
		$('#noidungqc').next().html('');
		return true;
	}
}

function validateLoai() {
	if (validateTenLoai()){
		
		return true;
	} else {
		return false;
	}
}

function validateTenLoai() {
	var field = $('#tenloai').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#tenloai').parent().parent().addClass('has-error');
		$('#tenloai').next().html('Bạn phải nhập tên loại');
		return false;
	} else {
		$('#tenloai').parent().parent().removeClass('has-error');
		$('#tenloai').next().html('');
		return true;
	}
}


function validateTrang() {
	if (validateMaLoai() & validateTDK1() & validateTDK2() & validateTK1() & validateTK2() & validateTK3() & validateTK4() & validateTK5()
	& validateTK6() & validateTK7() & validateTK8() & validateTDGT() & validateNDGT() & validateTDLI() & validateLi1() & validateLi2() 
	& validateLi3() & validateLi4() ){
		
		return true;
	} else {
		return false;
	}

}

function validateTDK1() {
	var field = $('#tdl').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#tdl').parent().parent().addClass('has-error');
		$('#tdl').next().html('Bạn phải nhập tiêu đề loại tìm kiếm 1');
		return false;
	} else {
		$('#tdl').parent().parent().removeClass('has-error');
		$('#tdl').next().html('');
		return true;
	}
}

function validateTDK2() {
	var field = $('#tdl2').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#tdl2').parent().parent().addClass('has-error');
		$('#tdl2').next().html('Bạn phải nhập tiêu đề loại tìm kiếm 2');
		return false;
	} else {
		$('#tdl2').parent().parent().removeClass('has-error');
		$('#tdl2').next().html('');
		return true;
	}
}

function validateTK1() {
	var field = $('#l1').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l1').parent().parent().addClass('has-error');
		$('#l1').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l1').parent().parent().removeClass('has-error');
		$('#l1').next().html('');
		return true;
	}
}

function validateTK2() {
	var field = $('#l2').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l2').parent().parent().addClass('has-error');
		$('#l2').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l2').parent().parent().removeClass('has-error');
		$('#l2').next().html('');
		return true;
	}
}

function validateTK3() {
	var field = $('#l3').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l3').parent().parent().addClass('has-error');
		$('#l3').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l3').parent().parent().removeClass('has-error');
		$('#l3').next().html('');
		return true;
	}
}

function validateTK4() {
	var field = $('#l4').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l4').parent().parent().addClass('has-error');
		$('#l4').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l4').parent().parent().removeClass('has-error');
		$('#l4').next().html('');
		return true;
	}
}

function validateTK5() {
	var field = $('#l5').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l5').parent().parent().addClass('has-error');
		$('#l5').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l5').parent().parent().removeClass('has-error');
		$('#l5').next().html('');
		return true;
	}
}

function validateTK6() {
	var field = $('#l6').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l6').parent().parent().addClass('has-error');
		$('#l6').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l6').parent().parent().removeClass('has-error');
		$('#l6').next().html('');
		return true;
	}
}

function validateTK7() {
	var field = $('#l7').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l7').parent().parent().addClass('has-error');
		$('#l7').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l7').parent().parent().removeClass('has-error');
		$('#l7').next().html('');
		return true;
	}

}

function validateTK8() {
	var field = $('#l7').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#l8').parent().parent().addClass('has-error');
		$('#l8').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#l8').parent().parent().removeClass('has-error');
		$('#l8').next().html('');
		return true;
	}
}


function validateTDGT() {
	var field = $('tieude').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#tieude').parent().parent().addClass('has-error');
		$('#tieude').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#tieude').parent().parent().removeClass('has-error');
		$('#tieude').next().html('');
		return true;
	}
}

function validateNDGT() {
	var field = $('#ndgt').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#ndgt').parent().parent().addClass('has-error');
		$('#ndgt').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#ndgt').parent().parent().removeClass('has-error');
		$('#ndgt').next().html('');
		return true;
	}
}

function validateTDLI() {
	var field = $('#tieude2').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#tieude2').parent().parent().addClass('has-error');
		$('#tieude2').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#tieude2').parent().parent().removeClass('has-error');
		$('#tieude2').next().html('');
		return true;
	}
}

function validateLi1() {
	var field = $('#li1').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#li1').parent().parent().addClass('has-error');
		$('#li1').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#li1').parent().parent().removeClass('has-error');
		$('#li1').next().html('');
		return true;
	}

}

function validateLi2() {
	var field = $('#li2').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#li2').parent().parent().addClass('has-error');
		$('#li2').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#li2').parent().parent().removeClass('has-error');
		$('#li2').next().html('');
		return true;
	}
}

function validateLi3() {
	var field = $('#li3').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#li3').parent().parent().addClass('has-error');
		$('#li3').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#li3').parent().parent().removeClass('has-error');
		$('#li3').next().html('');
		return true;
	}
}

function validateLi4() {
	var field = $('#li4').val();
	var filter = /^.+$/;
	if (filter.test(field) == false) {
		
		$('#li4').parent().parent().addClass('has-error');
		$('#li4').next().html('Bạn phải nhập');
		return false;
	} else {
		$('#li4').parent().parent().removeClass('has-error');
		$('#li4').next().html('');
		return true;
	}
}
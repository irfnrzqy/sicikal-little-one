$(function() {
	$('[data-toggle="tooltip"]').tooltip()
})
	let scroll_start = 0;
	let startchange = $('#change-it-now');
	let offset = startchange.offset();

	if(startchange.length) {
		$(document).scroll(function(){
			scroll_start = $ (this).scrolltop();

			if(scroll_start>offset.top) {
				$('.ubah').css('background-color','#e4262c');
				$('.ubah').css('transition','0.2s');
				$('.ubah').css('box-shadow','0px 0px 10px black');
			}else{
				$('.ubah').css('background-color','transparent');
				$('.ubah').css('box-shadow','0 0 0 ');
			}
		})
	}
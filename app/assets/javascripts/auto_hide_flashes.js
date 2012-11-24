function auto_hide_flashes() {
	$('.error, .success').delay('4000').fadeOut();
}

$(document).ready(function(){
	auto_hide_flashes();
})
$(document).ready(function(){
	scrollbar();
});

function scrollbar() {
	$('.scrollbar').each(function(){
		setSlider($(this));
		$(this).hover(function(){
			$(this).find(".slider-wrap").show();
			},
			function(){
			$(this).find(".slider-wrap").hide();
		});
	});
	$(".slider-wrap").hide();
}
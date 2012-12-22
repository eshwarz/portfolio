$(document).ready(function(){
	$('.drop_down_menu').mouseover(function(){
		var menu_id = $(this).attr('drop-down');
		$('.drop_down_container').hide();
		$('#'+menu_id).show();

		$('.drop_down_container, .bubble_viewer').mouseleave(function(){
			$('.drop_down_container').hide();
		});
	});
});
<div class="left_panel">
	<h1 class="page_header left tc">About Us</h1>
	<div class="m15">
		<?php echo image_tag('eshwar.jpg', array('class' => 'fl rad5 shadow', 'width' => '100px')); ?>
		<div class="fl mll" style="width: 500px;"><?php echo $info; ?></div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="right_panel">
	<?php render(array('partial' => 'social_links')) ?>
</div>
<div class="left_panel">
	<h1 class="page_header left tc">About Us</h1>
	<div class="m15">

		<div class="image fl">
			<?php echo image_tag('eshwar.jpg', array('class' => 'fl rad5 shadow')); ?>
			<?php echo link_to ('Eshwar', 'http://facebook.com/eshwarz', array('class' => 'name', 'target' => '_blank')); ?>
		</div>

		<div class="fl mhl" style="width: 380px; text-align: justify;"><?php echo $info; ?></div>
		
		<div class="image fl">
			<?php echo image_tag('pavani.jpg', array('class' => 'fl rad5 shadow')); ?>
			<?php echo link_to ('Pavani', 'http://facebook.com/pavani234', array('class' => 'name', 'target' => '_blank')); ?>
		</div>

		<div class="clearfix"></div>

		<div class="param_details">
			<?php
			$wife = link_to('Pavani Kumari', 'http://facebook.com/pavani234', array('target' => '_blank'));
			$me = link_to('Eshwar Chandra Y K', 'http://facebook.com/eshwarz', array('target' => '_blank'));

			echo "<h3>Basic Information</h3>";

			echo beautify_params('Name', $me);
			echo beautify_params('Date of birth', 'April 7th, 1988');
			echo beautify_params('Marital Status', 'Married to '.$wife);
			echo beautify_params('Home Town', 'Hyderabad');
			echo beautify_params('Living in', 'Bangalore');

			echo "<h3>Contact Information</h3>";
			
			echo beautify_params('Mobile 1:', '+91 8884312743');
			echo beautify_params('Mobile 2:', '+91 9441330421');
			?>
		</div>
	</div>
</div>

<div class="right_panel">
	<?php render(array('partial' => 'social_links')) ?>
</div>
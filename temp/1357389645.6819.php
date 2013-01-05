<!DOCTYPE html>
<html>
	<head>

		<meta name="keywords" content="eshwar, pavani, pavesh, pavsesh, eshwar chandra, pavani kumari, eshwar chandra y k, pavani kumari s" />
		<meta name="description" content="Eshwar Chandra's portfolio, blog, events etc." />
		
		<title><?php echo isset($title) ? $title : "Eshwar's Portfolio"; ?></title>
		<?php 
		require_once ($ROOT."app/assets/stylesheets/css.php");
		require_once ($ROOT."app/assets/favicon/favicon.php");
		require_once ($ROOT."app/assets/javascripts/scripts.php");
		?>

	</head>
	<body>
		<div class="ma topBarWidth">

			<?php
			$locals = array('home' => $home, 'about' => $about, 'portfolio' => $portfolio, 'blog' => $blog, 'network' => $network, 'contact' => $contact);
			View::render( array( 'partial' => 'shared/header', 'locals' => $locals ) );
			?>
		</div>
		
		<div id="container_padder" style="padding-top:70px;">
			<div id="container" class="rad10 shadow_max">
				<div class="left_panel">
	<h1 class="page_header left tc">About Us</h1>
	<div class="m15">

		<div class="image">
			<?php echo image_tag('eshwar.jpg', array('class' => 'fl rad5 shadow', 'width' => '100px')); ?>
			<?php echo link_to ('Eshwar', 'http://facebook.com/eshwarz', array('target' => '_blank'));
		</div>

		<div class="fl mll" style="width: 500px;"><?php echo $info; ?></div>
		<div class="clearfix"></div>

		<div class="param_details">
			<?php
			$wife = link_to('Pavani Kumari', 'http://facebook.com/pavani234', array('target' => '_blank'));

			echo "<h3>Basic Information</h3>";

			echo beautify_params('Name', 'Eshwar Chandra Y K');
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
				<div class="clearfix"></div>
			</div>
		</div>

		<?php render (array('partial' => 'shared/footer')); ?>

	</body>
</html>
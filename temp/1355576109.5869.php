<!DOCTYPE html>
<html>
	<head>

		<meta name="keywords" content="eshwar, pavani, pavesh, pavsesh, eshwar chandra, pavani kumari, eshwar chandra y k, pavani kumari s" />
		<meta name="description" content="Eshwar Chandra's portfolio, blog, events etc." />
		
		<title><?php isset($title) ? echo $title : echo "Eshwar's Portfolio"; ?></title>
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
	<h1 class="page_header left tc">Portfolio</h1>
		<div class="m15">
			<h3>Websites</h3>
			<ol>
				<li><?php echo link_to('CrazyChums', 'http://www.crazychums.com', array('target' => '_blank')); ?></li>
				<li><?php echo link_to('Sureify', 'http://sureify.heroku.com', array('target' => '_blank')); ?></li>
				<li><?php echo link_to('Startup Quotient', 'http://www.startupquotient.com/', array('target' => '_blank')); ?></li>
				<li><?php echo link_to('Autocube', 'http://dev.autocube.com', array('target' => '_blank')); ?></li>
				<li><?php echo link_to('Learn Social', 'http://learnsocial.com', array('target' => '_blank')); ?></li>
				<li><?php echo link_to('Business Software', '#', array('target' => '_blank')); ?></li>
			</ol>
			<h3>Designs</h3>
		</div>
</div>

<div class="right_panel">
	<h1 class="page_header right tc">Portfolio Links</h1>
		
</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<?php render (array('partial' => 'shared/footer')); ?>

	</body>
</html>
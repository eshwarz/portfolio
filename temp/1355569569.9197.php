<!DOCTYPE html>
<html>
	<head>

		<meta name="keywords" content="eshwar, pavani, pavesh, pavsesh, eshwar chandra, pavani kumari, eshwar chandra y k, pavani kumari s" />
		<meta name="description" content="Eshwar Chandra's portfolio, blog, events etc." />
		
		<title><?php echo $title; ?></title>
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
		<?php echo image_tag('eshwar.jpg', array('class' => 'fl rad5 shadow')); ?>
		<div class="fl"><?php echo $info; ?></div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="right_panel">
	<h1 class="page_header right tc">Links</h1>
	<div class="m15">
		<?php ?>
	</div>
</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<?php render (array('partial' => 'shared/footer')); ?>

	</body>
</html>
<!DOCTYPE html>
<html>
	<head>

		<meta name="keywords" content="eshwar, pavani, pavesh, pavsesh, eshwar chandra, pavani kumari, eshwar chandra y k, pavani kumari s" />
		<meta name="description" content="Eshwar Chandra's portfolio, blog, events etc." />
		
		<title><?php echo isset($title) ? $title : "Eshwar's Blog"; ?></title>
		<?php 
		require_once ($ROOT."app/assets/stylesheets/css.php");
		require_once ($ROOT."app/assets/favicon/favicon.php");
		require_once ($ROOT."app/assets/javascripts/scripts.php");
		render(array('partial' => 'tinymce/script'));
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
				{{yield}}
				<div class="clearfix"></div>
			</div>
		</div>

		<?php render (array('partial' => 'shared/footer')); ?>

	</body>
</html>
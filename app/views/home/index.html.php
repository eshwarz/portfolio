<div class="left_panel">
	<h1 class="page_header left tc">We build Web Products</h1>
	<div class="m15">
		<div class="mt20 paras">
			<ul class="main_list">
				<li>We are happy by devloping the web products. Kick start your web application with us and have it completed in less than 6 weeks.</li>
				<li>We produce <b>Ruby On Rails</b> and <b>PHP</b> products</li>
				<li>Expert in <b>Ruby On Rails</b> </li>
				<li>Expert in <b>Linux, Apache, MySQL, PHP</b></li>
				<li>We use <b>FlyPHP</b> for MVC - Created by US.</li>
				<li>We work with <b>CakePHP</b>, <b>CodeIgniter</b>, <b>Zend</b>, etc.</li>
			</ul>

			<div>
				<div class="fr">
					<?php link_to( 'Visit our Portfolio',  portfolio_path, array('class' => 'tiny_text') ) ?>
				</div>
				<div class="clearfix"></div>
			</div>	
			<div class="programming_images">
				<div class="image">
					<?php image_tag('icons/rails.png'); ?>
					<div class="desc">Rails</div>
				</div>
				<div class="image">
					<?php image_tag('icons/php.png'); ?>
					<div class="desc">PHP</div>
				</div>
				<div class="image">
					<?php image_tag('icons/ruby.png'); ?>
					<div class="desc">Ruby</div>
				</div>
				<div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="right_panel">
	<h1 class="page_header right tc">Twitter Updates</h1>
	<div class="scrollbar" style="height: 479px;">

		<?php
		View::render( array( 'partial' => 'tweets' ) );
		?>
	</div>
		
</div>
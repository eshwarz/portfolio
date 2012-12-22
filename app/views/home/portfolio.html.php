<div class="left_panel">
	<h1 class="page_header left tc" id="websites">Portfolio</h1>
		<div class="m15">
			<h3>Websites</h3>
			
			<div class="portfolio left">
				<?php
				echo Helper::portfolio_link('http://www.crazychums.com', 'crazychums', 'CrazyChums is a social network where we make friends, share pics ...');
				echo Helper::portfolio_link('http://sureify.heroku.com', 'sureify', 'Sureify, a complete insurance management system, ...');
				echo Helper::portfolio_link('http://dev.autocube.com', 'autocube', 'Autocube is a social networking site for cars, share pics, buy, sell cars ...');
				echo Helper::portfolio_link('http://www.vadaanya.org', 'vadaanya', 'Vadaanya Janaa Society is an orphanage maintainance website ...');
				echo Helper::portfolio_link('#', 'e_commerce', 'Software for business, which takes care of the customers and bills ...');
				echo Helper::portfolio_link('http://www.learnsocial.com/', 'learnsocial', 'Learn or teach online, locate the nearest class and attend ...');
				?>
				<div class="clearfix"></div>
			</div>

			<h3 id="designs">Designs</h3>

			<div class="portfolio left">
				<?php
				echo Helper::portfolio_link('http://harikrishna.heroku.com/', 'dark_design', 'Dark and elegant design for a portfolio ...');
				echo Helper::portfolio_link('http://www.crazychums.com', 'crazychums', 'Nice and elegant Design for a social network ...');
				?>
				<div class="clearfix"></div>
			</div>
		</div>
</div>

<div class="right_panel">
	<h1 class="page_header right tc"></h1>
	<div class="portfolio right">
		<?php
		echo Helper::portfolio_link('http://github.com/eshwarz/fly/', 'fly', 'Fly is an MVC framework written in PHP, for faster development ...', 'first');
		echo Helper::portfolio_link('http://pavsesh.com/Snake/', 'snakemania', 'Snakemania is simple game written in jQuery, feel free to play anytime ...');
		echo Helper::portfolio_link('http://www.startupquotient.com', 'startup_quotient', 'Start you own business after testing your Startup quotient ...');
		?>
		<div class="clearfix"></div>
		<div style="margin-top: 45px;">
			<?php
			echo Helper::portfolio_link('#', 'e_commerce', 'Transition from black to white, best design for softwares ...');
			?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
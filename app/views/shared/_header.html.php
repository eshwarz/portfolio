<div id="topBar" class="topBarWidth">
	<div class="topBarLinks">
		<?php
		Helper::header_link('Home', root_path, $home);
		Helper::header_link('About Us', about_path, $about);
		Helper::header_link('Portfolio', portfolio_path, $portfolio);
		Helper::header_link('Blog', blog_path, $blog);
		Helper::header_link('Network', 'http://www.crazychums.com/', $network, array('target' => '_blank'));
		Helper::header_link('Contact', contact_path, $contact);
		?>
		<div id="search_container" class="p4 fl rad15 inset_shadow_med">
			<div class="search_image"></div>
			<input type="text" class="invi_textbox w160" name="main_search" id="main_search" placeholder="Search" />
		</div>
		<div class="cbo"></div>
	</div>
</div>
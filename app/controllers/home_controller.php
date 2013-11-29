<?php
class HomeController extends ApplicationController {

	public function before_filter() {
		User::authenticate( array('only' => array('blog')) );
	}

	public function index() {
		$home = 'true';
		render (array('view' => 'index', 'locals' => array('title' => "Eshwar's Portfolio", 'intro' => $intro, 'home' => $home)));
	}

	public function about() {
		$locals['title'] = 'Eshwar - About';
		$locals['about'] = 'true';
		$employer = link_to('Jutera Labs', 'http://jutera.com/', array('target' => '_blank')); 
		$locals['info'] = '
			<p>
				I am Eshwar Chandra, I am freelancer and full time Senior Software Engineer at '.$employer.', Linux, Apache, Mysql, PHP, ROR expert I do work on both designing and development. I am more of a developer guy, its one of my passions. Always interested in developing complex modules, do you have innovative ideas? then I am ready to work with you.
			</p>
			<p>
				This is the place where I blog, you get to know my recent activities, projects I have worked on, new projects currently I am working on.
			</p>';

		render (array('view' => 'about', 'locals' => $locals));
	}

	public function contact() {
		$locals['contact'] = 'true';
		render (array('view' => 'contact', 'locals' => $locals));
	}

	public function portfolio() {
		$locals['portfolio'] = 'true';
		render (array('view' => 'portfolio', 'locals' => $locals));
	}

	public function blog() {
		$locals['blog'] = 'true';
		render (array('view' => 'blog', 'locals' => $locals));
	}

}
?>
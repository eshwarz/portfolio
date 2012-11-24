<?php
class HomeController extends ApplicationController {

	public function before_filter() {
		User::authenticate( array('only' => array('blog')) );
	}

	public function index() {
		
		$home = 'true';
		View::render(array('view' => 'index', 'locals' => array('title' => "Eshwar's Portfolio", 'intro' => $intro, 'home' => $home)));

	}

	public function about() {
		$about = 'true';
		$info = "
			<p>I am Eshwar Chandra, I am freelancer Linux, Apache, Mysql, PHP expert, I do work on both designing and development. I am more of a developer guy, its one of my passions. Always interested in developing complex modules, do you have innovative ideas? then I am ready to work with you.
			</p>
			<p>This is the place where I blog, you get to know my recent activities, projects I have worked on, new projects currently I am working on.
			</p>";

		$locals = array('title' => 'Eshwar - About', 'about' => $about, 'info' => $info);
		View::render( array( 'view' => 'about', 'locals' => $locals ) );
	}

}
?>
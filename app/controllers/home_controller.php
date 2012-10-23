<?php
class HomeController extends ApplicationController {

	public function index() {

		$intro = "I am Eshwar Chandra, I am freelancer Linux, Apache, Mysql, PHP expert, I do work on both designing and development. I am more of a developer guy, its one of my passions. Always interested in developing complex modules, do you have innovative ideas? then I am ready to work with you. This is the place where I blog, you get to know my recent activities, projects I have worked on, new projects currently I am working on.";
		View::render(array('view' => 'index', 'locals' => array('intro' => $intro)));

	}

}
?>
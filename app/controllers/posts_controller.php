<?php

class PostsController extends ApplicationController {

	public function before_filter() {
		User::authenticate();
	}

	public function index() {
		$locals['posts'] = Post::all();
		$locals['blog'] = 'true'; // highlighting the blog link
		$locals['title'] = 'Eshwar - Blog posts';

		render(array('view' => 'index', 'locals' => $locals));
	}

	public function _new() {
		$locals['blog'] = 'true'; // highlighting the blog link
		render(array('view' => 'new', 'layout' => 'blog', 'locals' => $locals));
	}

	public function create() {
		$post = $_POST['Post'];
		Post::create($post);
		redirect_to('/posts/index');
	}
}

?>
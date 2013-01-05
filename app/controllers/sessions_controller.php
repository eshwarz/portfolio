<?php

class SessionsController extends ApplicationController {

	public function _new() {
		if (current_user()) {
			redirect_to(root_path);
		} else {
			render (array('view' => 'new', 'locals' => array('title' => 'Pavsesh - Sign In')));
		}
	}

	public function create() {
		$credentials = $_POST['User'];
		$user = User::find_by_email($credentials['email']);

		if ($user->password == md5($credentials['password'])) {
			
			// authenticating user
			session_start();
			$uid = $_SESSION['pavsesh_user'] = $user->id;
			$_SESSION['pavsesh_timezone'] = 123;
			if ($credentials['remember'][0] == '1')
			{
				setcookie("pavsesh_user", $uid, time()+60*60*24*30, "/");
				setcookie("pavsesh_timezone", $password, time()+60*60*24*30, "/");
			}
			redirect_to(blog_path);
		} else {
			redirect_to(user_sign_in_path.'?failed=1');
		}
		
	}

	public function destroy() {
		if (isset($_COOKIE['pavsesh_user']) && isset($_COOKIE['pavsesh_timezone']))
		{
			setcookie("pavsesh_user", "", time()-60*60*24*30, "/");
			setcookie("pavsesh_timezone", "", time()-60*60*24*30, "/");
		}
		
		unset($_SESSION['pavsesh_user']);
		unset($_SESSION['pavsesh_timezone']);
		
		session_destroy();
		redirect_to(root_path);
	}

}

?>
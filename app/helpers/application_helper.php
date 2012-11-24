<?php

class Helper {
	public static function header_link ($link, $to, $state, $params = array() ) {
		$return = '<div class="bubble_viewer">';
		if ($state == 'true') {
			$params['class'] = 'selected';
			$return .= '<div class="bubble bgc_dark vv_imp"></div>';
			$return .= link_to($link, $to, $params);
		}
		else {
			$return .= '<div class="bubble bgc_gray"></div>';
			$return .= link_to($link, $to, $params);
		}
		$return .= '</div>';
		echo $return;
	}
}

function current_user() {
	if (!empty($_SESSION['fly_user'])) {
		$uid = $_SESSION['fly_user'];
		return User::find($uid);
	} else {
		return false;
	}
}
?>
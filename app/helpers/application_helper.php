<?php

class Helper {
	public static function header_link ($link, $to, $state, $params = array() ) {
		echo '<div class="bubble_viewer">';
		if ($state == 'true') {
			$params['class'] = 'selected';
			echo '<div class="bubble bgc_dark vv_imp"></div>';
			link_to( $link, $to, $params );
		}
		else {
			echo '<div class="bubble bgc_gray"></div>';
			link_to( $link, $to, $params );
		}
		echo '</div>';

	}
}

?>
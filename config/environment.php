<?php
if ($_SERVER['HTTP_HOST'] == 'local.eshwar.com') {
	define ('ENV', 'development');
} else {
	define ('ENV', 'production');	
}
?>
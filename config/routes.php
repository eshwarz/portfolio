<?php
// Match can be used to match the routing to an action of a controller,
// where third argument creates a constant profile_path for the below example
// Router::match('profile', 'home#profile', 'profile');

// Define a site root.
// Router::root('home#index');

Router::root( 'home#index' );

{
	// home controller
	Router::match( 'about', 'home#about', 'about' );
	Router::match( 'portfolio', 'home#portfolio', 'portfolio' );
	Router::match( 'blog', 'home#blog', 'blog' );
	Router::match( 'contact', 'home#contact', 'contact' );
	Router::match( 'users/sign_in', 'users#sign_in', 'sign_in' );
}

?>
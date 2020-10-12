<?php
/* wp secure by harom.studio */
function no_wordpress_errors() {
	return 'Oops! Something is wrong!';
}
add_filter('login_errors', 'no_wordpress_errors');

/* option page */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Egyedi mezők',
		'menu_title'	=> 'Washember',
		'menu_slug' 	=> 'washember-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

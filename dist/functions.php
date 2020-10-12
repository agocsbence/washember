<?php
/* wp secure by harom.studio */
function no_wordpress_errors() {
	return 'Oops! Something is wrong!';
}
add_filter('login_errors', 'no_wordpress_errors');

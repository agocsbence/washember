<?php
/* wp secure by harom.studio */
function no_wordpress_errors() {
	return 'Oops! Something is wrong! 🤷‍♂️';
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

/* remove admin menu items based on user ID */
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

  global $user_ID;

  if ( $user_ID != 1 ) { //your user id

   remove_menu_page('edit.php'); // Posts
   remove_menu_page('upload.php'); // Media
   remove_menu_page('link-manager.php'); // Links
   remove_menu_page('edit-comments.php'); // Comments
   remove_menu_page('edit.php?post_type=page'); // Pages
   remove_menu_page('plugins.php'); // Plugins
   remove_menu_page('themes.php'); // Appearance
   remove_menu_page('users.php'); // Users
   remove_menu_page('tools.php'); // Tools
   remove_menu_page('options-general.php'); // Settings
   remove_menu_page('edit.php'); // Posts
   remove_menu_page('upload.php'); // Media
   remove_menu_page('edit.php?post_type=acf-field-group'); // ACF Fields
   remove_menu_page('admin.php?page=wpcf7'); // CF7
  }
}

/* custom login page */
function harom_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php bloginfo('template_url') ?>/assets/img/logo-login.png);
			height:65px;
			width:320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'harom_login_logo' );

function harom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/custom-login.css' );
}
add_action( 'login_enqueue_scripts', 'harom_login_stylesheet' );

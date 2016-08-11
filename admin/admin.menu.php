<?php 

// All show in admin panel make to this page






add_action('admin_menu', 'wpfollow_admin_menu');
function wpfollow_admin_menu() {
	add_menu_page(
		'WpFollow',
		'WpFollow',
		'manage_options',
		'wpfollow_setting',
		'wpfollow_setting'
		);
}

function wpfollow_setting() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}

	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';

}






 ?>
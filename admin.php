<?php

// This is completely broken.

function ribcage_admin_menu() { 	
	add_menu_page('Ribcage', 'Ribcage', 8, dirname(__FILE__).'/admin.php', 'ribcage_admin_index');
	add_submenu_page(dirname(__FILE__).'/admin.php', 'Ribcage', 'Add Artist', 8, __FILE__, 'ribcage_add_artist');	
	add_submenu_page(dirname(__FILE__).'/admin.php', 'Ribcage', 'Add Release', 8, __FILE__, 'ribcage_add_release');	
	add_submenu_page(dirname(__FILE__).'/admin.php', 'Ribcage', 'Add Review', 8, __FILE__, 'ribcage_add_review');	
	add_submenu_page(dirname(__FILE__).'/admin.php', 'Ribcage', 'Add Press', 8, __FILE__, 'ribcage_add_press');
}
add_action('admin_menu', 'ribcage_admin_menu');

require_once dirname(__FILE__) . '/admin/dump.php';
?>
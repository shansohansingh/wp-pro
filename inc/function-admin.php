<?php 
/*
================
    ADMIN PAGE
=================
*/
function sunset_add_admin_page() {
    add_menu_page( 'Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page', get_template_directory_uri() . '/images/icon/sunset-icon.png', 110 );
}
add_action( 'admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page() {
    // generation  of our admin page
    echo "<h1>Welcome</h1>";
}
?>
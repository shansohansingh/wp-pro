<?php 
/*
================
    ADMIN PAGE
=================
add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )
add_action( string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1 )
add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' )
*/
function sunset_add_admin_page() {
    //generate suset admin page
    add_menu_page( 'Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page', get_template_directory_uri() . '/images/icon/sunset-icon.png', 110 );

    //generate suset admin sub page
   add_submenu_page( 'alecaddd_sunset', 'Sunset Sidebar Options', 'General', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page' );

   add_submenu_page( 'alecaddd_sunset', 'Sunset CSS Options', 'Custom CSS', 'manage_options', 'alecaddd_sunset_css', 'sunset_theme_setting_page' );

}
add_action( 'admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page() {
   require_once( get_template_directory() . '/inc/templates/sunset-admin.php' );
}

function sunset_theme_setting_page() {
    // generation  of our admin page
    echo "<h1>Welcome custom css</h1>";
}
?>
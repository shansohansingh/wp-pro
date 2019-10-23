<h1>Sunset Theme Setting</h1>
<?php settings_errors(); ?>
<?php 
	
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr( get_option( 'user_description' ) );
	
?>
<div class="sunset-sidebar-preview">
	<div class="sunset-sidebar">
		<h1 class="sunset-username"><?php print $fullName; ?></h1>
		<h2 class="sunset-description"><?php print $description; ?></h2>
		<div class="icons-wrapper">
			
		</div>
	</div>
</div>
<form action="options.php" method="post"  class="sunset-general-form">
    <?php settings_fields( 'sunset-setting-group' ); ?>
    <?php do_settings_sections( 'alecaddd_sunset' ); ?>
    <?php submit_button(); ?>
</form>
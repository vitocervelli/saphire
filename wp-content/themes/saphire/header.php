<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body>
	<header class= "row sct_header">
	<div class="container">
		<div class="sct_logo_header col-xs-2">
			<img class= "col-xs-12" src="/wp-content/uploads/Sapphire_Logo_Peq.png" alt="logo sapphire">
		</div>
		<div class="col-xs-offset-2 col-xs-8">
			<?php
			/// manera de mostrar el menu en wordpress
			wp_nav_menu( array( 'theme_location' => 'menu_primary', 'menu_id' => 'sct_main_menu' ) );
			?>
		</div>	
	</div>
	
	</header>
	<div class= "row">




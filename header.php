<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package d5k
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo( 'name' ); echo ' | '; bloginfo( 'description' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="content" class="site-content">

	<div class="animated bounceInDown">
		<?php
		$gravatar = get_theme_mod( 'gravatar_email', get_bloginfo( 'admin_email' ) );
		if ( $gravatar != '' ) {
			echo get_avatar( $gravatar, 200 );
		}
		?>

	</div>

	<div class="animated bounceInUp">
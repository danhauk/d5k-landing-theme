<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package d5k
 */

get_header(); ?>

<h1>Oops! That page can't be found.</h1>
<p>It looks like nothing was found at this location. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Go home &rarr;</a></p>

<?php get_footer(); ?>

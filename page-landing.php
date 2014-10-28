<?php
/**
 * Template Name: Landing Page
 *
 * @package d5k
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
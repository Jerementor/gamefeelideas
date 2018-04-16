<?php 
/**
 * The template for displaying all pages
 * Template Name: Page (MINVH)
 *
 * @since 1.0
 */
get_header(); 
?>
<div class="section-60 section-minvh">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
	
	} // end while
} // end if
?>
</div>
<?php get_footer(); ?>
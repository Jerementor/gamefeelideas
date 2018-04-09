<?php 
/**
 * The template for page
 * 
 * @since 1.0
 */
get_header(); 
?>

<!-- Page.php -->
<div class="section-20 section-light">
<div class="w-container">
<div class="jer_640">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
	
	} // end while
} // end if
?>

<?php get_footer(); ?>
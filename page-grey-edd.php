<?php 
/**
 * The template for page
 * Template Name: Page Grey (EDD)
 * @since 1.0
 */
get_header(); 
?>

<!-- Page.php -->
<div class="section-60 section-grey combo-minvh">
<div class="w-container">
<div class="jer_white_box"> 	
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
	
	} // end while
} // end if
?>
</div>
</div>
</div>

<?php get_footer(); ?>


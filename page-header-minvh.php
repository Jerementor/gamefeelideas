<?php 
/**
 * The template for displaying all pages
 * Template Name: Page W/ Header & (MINVH)
 *
 * @since 1.0
 */
get_header(); 
?>
<div class="section-60 section-blue">
  <div class="w-container">
    <h1 class="jer_post_header_inverse"><?php wp_title(''); ?></h1>
  </div>
</div>
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
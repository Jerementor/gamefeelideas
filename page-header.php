<?php 
/**
 * The template for displaying all pages
 * Template Name: Page W/ Header
 *
 * @since 1.0
 */
get_header(); 
?>
<div class="w-row">
  <div class="w-col w-col-10">
    <h1 class="jer_home_header"><?php wp_title(''); ?></h1>
  </div>
  <div class="w-col w-col-2"><img src="<?php if(has_post_thumbnail) the_post_thumbnail(); ?> width="139" class="jer_avatar"></div>
</div>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
	
	} // end while
} // end if
?>
<?php get_footer(); ?>
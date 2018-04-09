<?php 
/**
 * The template for displaying all blog posts
 *
 *
 * @since 1.0
 */
get_header(); 
?>

<!--SINGLE.PHP-->
<div class="w-row">
  <div class="w-col w-col-10">
    <h1 class="jer_home_header"><?php wp_title(''); ?></h1>
  </div>
  <div class="w-col w-col-2"><img src="/wp-content/uploads/2018/04/jer3.jpg" width="139" class="jer_avatar"></div>
</div>
<div class="jer_meta_data">
  <div class="jer_post_sub"><?php the_excerpt(); ?></div>
</div>
<div class="jer_meta_categories">
<?php the_category(' ', 'multiple')?>
</div>
<div class="jer_blog">
    	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				//
				the_content();
				//
			} // end while
		} // end if
	?>
</div>
<?php get_footer(); ?>
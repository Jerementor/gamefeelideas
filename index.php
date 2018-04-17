<?php 
/**
 * The template for the index page
 *
 * 
 * @since 1.0
 */
get_header(); 
?>

<!-- Index.php -->

<div class="section-60 section-blue">
  <div class="w-container">
    <h1 class="jer_post_header_inverse"><?php wp_title(''); ?></h1>
  </div>
</div>
<div class="section-60 section-minvh">
  <div class="w-container">
    <div class="w-row">
      <div class="w-col w-col-7">
      <ul>
      <?php if ( have_posts() ) : ?>
      	<?php while ( have_posts() ) : the_post(); ?>
      	    <li>
         		    <?php the_title(sprintf('<a class="jer_post_link_c" href="%s" rel="bookmark">', esc_url(get_permalink() )), '</li>'); ?>
              </li>
          <?php endwhile; ?>
      <?php endif; ?>    		
        </ul>   
      </div>
      <div class="w-col w-col-5">
        <?php get_sidebar(); ?>	
      </div>
    </div>
  </div>
</div>
  
  
  <?php get_footer(); ?>
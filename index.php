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
<div class="w-row">
  <div class="w-col w-col-10">
    <h1 class="jer_home_header"><?php wp_title(''); ?></h1>
  </div>
  <div class="w-col w-col-2"><img src="/wp-content/uploads/2018/04/jer3.jpg" width="139" class="jer_avatar"></div>
</div>
<ul>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	    <li>
   		    <?php the_title(sprintf('<a class="jer_post_link" href="%s" rel="bookmark">', esc_url(get_permalink() )), '</li>'); ?>
        </li>
    <?php endwhile; ?>
<?php endif; ?>    		
  </ul>            

<?php get_footer(); ?>
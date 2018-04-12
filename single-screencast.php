<?php 

/**
 * The template for displaying all screencasts
 * @since 1.0
 */

get_header(); 

?>
<!--Using SINGLE-SCREENCAST-->
<!--Screencast Video-->
<div style="padding-top:56.17021276595745%" class="w-video w-embed">
    <?php if (get_field('screencast_video')) :?>
        <div class="embed-container">
            <?php the_field('screencast_video'); ?> 
        </div>
    <?php endif; ?>          
</div>
<!--Screencast Title-->
<h1 class="jer_screencast_header"><?php wp_title(''); ?></h1>
<!--Screencast Description-->
<p>
    <?php if (get_field('screencast_description')) :?>
        <div class="embed-container">
            <?php the_field('screencast_description'); ?> 
        </div>
    <?php endif; ?>                
    
</p>
<!--Screencast Button-->
<?php if (get_field('screencast_button')) :?>
    <a href="<?php the_field('screencast_button') ?>" class="jer_button w-button">💬 Leave a Comment in the Community</a>
<?php endif; ?>             
        
</div>


<?php get_footer(); ?>



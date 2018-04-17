<?php 

/**
 * The template for displaying all screencasts
 * @since 1.0
 */

get_header(); 

?>
<!--Using SINGLE-SCREENCAST-->
<!--Screencast Video-->
<div class="section-video">
<div class="w-container">
<div style="padding-top:56.17021276595745%" class="w-video w-embed">
    <?php if (get_field('screencast_video')) :?>
        <div class="embed-container">
            <?php the_field('screencast_video'); ?> 
        </div>
    <?php endif; ?>          
</div>
</div>
</div>

<div class="section-60">
<div class="w-container">
<div class="jer_640">
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
<?php if (get_field('screencast_button_url')) :?>
    <a href="<?php the_field('screencast_button_url') ?>" class="jer_button w-button"><?php the_field('screencast_button_text') ?></a>
<?php endif; ?>             
        
</div>
</div>
</div>



<?php get_footer(); ?>


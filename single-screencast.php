<?php 

/**
 * The template for displaying all screencasts
 * @package WPShipyard
 * @since 1.0
 */

get_header(); 

?>
<!--Using SINGLE-SCREENCAST-->


<div class="section-140-sides">
<div style="padding-top:56.17021276595745%" class="w-video w-embed">
  <!--<iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FEOQ2hMEKrsM%3Ffeature%3Doembed&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DEOQ2hMEKrsM&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FEOQ2hMEKrsM%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" frameborder="0" allowfullscreen=""></iframe></div>-->
    <?php if (get_field('screencast_video')) :?>
        <div class="embed-container">
            <?php the_field('screencast_video'); ?> 
        </div>
    <?php endif; ?>    
</div>
</div>
<div class="section-80">
    <div class="w-container">
<h1 class="dap_screencast_title"><?php wp_title(''); ?></h1>
<p>
    <?php if (get_field('screencast_description')) :?>
        <div class="embed-container">
            <?php the_field('screencast_description'); ?> 
        </div>
    <?php endif; ?>      
</p>

<?php if (get_field('screencast_button')) :?>
    <a href="<?php the_field('screencast_button') ?>" class="dap_button_large w-button">💬 Leave a Comment in the Community</a>
<?php endif; ?> 

</div>    

</div>

<?php get_footer(); ?>

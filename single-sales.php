<?php 

/**
 * The template for displaying all sales
 * @package WPShipyard
 * @since 1.0
 */

get_header(); 

?>
<!--Using SINGLE-SALE-->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

    <?php if (get_field('sales_video')) :?>
    <!--Video (top)-->
    <div style="padding-top:56.17021276595745%" class="w-video w-embed">
        <div class="embed-container">
            <?php the_field('sales_video'); ?> 
        </div>
    </div>
    <?php endif; ?>
    <!--Sales Copy (middle)-->
    <div class="w-richtext">
      <?php if (get_field('sales_description')) :?>
            <div class="embed-container">
                <?php the_field('sales_description'); ?> 
            </div>
        <?php endif; ?>    
    </div>
    <!--Buy Button (bottom)-->
    <div class="jer_buy_now">
        <?php if (get_field('sales_shortcode')) :?>
             <?php the_field('sales_shortcode'); ?> 
        <?php endif; ?>  
       <p class="jer_sales_disclaimer">
                <?php if (get_field('sales_disclaimer')) :?>
                        <p class="dap_sale_text"><?php the_field('sales_disclaimer'); ?> </p>
                <?php endif; ?>           
       </p>
    </div>

 <?php endwhile; ?>
<?php endif; ?>  




<?php get_footer(); ?>


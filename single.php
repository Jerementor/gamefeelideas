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
<div class="section-60 section-blue">
  <div class="w-container">
    <h1 class="jer_post_header_inverse"><?php wp_title(''); ?></h1>
    <?php the_excerpt(); ?>
  </div>
</div>
<!--end section 80-->

<div class="section-60">
<div class="w-container">
<div class="jer_640"> 
<!--<div class="jer_meta_categories">-->
<!--<?php the_category(' ', 'multiple')?>-->
<!--</div>-->
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
<!--end jer_blog-->
<!--<div class="jer_single_footer">-->
<!--   <div class="w-form">-->
<!--          <form id="wf-form-gfi_join_newsletter" name="wf-form-gfi_join_newsletter" data-name="gfi_join_newsletter" method="post" action="https://www.getdrip.com/forms/209451262/submissions" data-drip-embedded-form="209451262">-->
<!--            <div class="w-row">-->
<!--              <div class="w-col w-col-6"><input type="text" class="jer_input w-input" maxlength="256" name="fields[email]" data-name="fields[email]" placeholder="Enter your email...." id="fields[email]" required=""></div>-->
<!--              <div class="w-col w-col-6"><input type="submit" value="Get Weekly Articles" data-wait="Please wait..." class="submit-button w-button"></div>-->
<!--            </div>-->
<!--          </form>-->
<!--          <div class="success-message w-form-done">-->
<!--            <div>Thank you! Your submission has been received!</div>-->
<!--          </div>-->
<!--          <div class="error-message w-form-fail">-->
<!--            <div>Oops! Something went wrong while submitting the form.</div>-->
<!--          </div>-->
<!--        </div>    -->
<!--</div>-->
<!--end jer footer-->
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
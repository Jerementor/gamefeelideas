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
    <div class="jer_meta_data">
      <div class="jer_post_sub"><?php the_excerpt(); ?></div>
    </div>    
  </div>
  <div class="w-col w-col-2"><img src="/wp-content/uploads/2018/04/jer3.jpg" width="139" class="jer_avatar"></div>
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
<div class="jer_single_footer">
   <div class="w-form">
          <form id="wf-form-gfi_join_newsletter" name="wf-form-gfi_join_newsletter" data-name="gfi_join_newsletter" method="post" action="https://www.getdrip.com/forms/209451262/submissions" data-drip-embedded-form="209451262">
            <div class="w-row">
              <div class="w-col w-col-6"><input type="text" class="jer_input w-input" maxlength="256" name="fields[email]" data-name="fields[email]" placeholder="Enter your email...." id="fields[email]" required=""></div>
              <div class="w-col w-col-6"><input type="submit" value="Get Weekly Articles" data-wait="Please wait..." class="submit-button w-button"></div>
            </div>
          </form>
          <div class="success-message w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="error-message w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>    
</div>
<?php get_footer(); ?>
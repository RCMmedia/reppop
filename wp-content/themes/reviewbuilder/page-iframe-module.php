<?php
/*
 * Template Name: Iframe Template App v1
 * Version: 1.0	
*/
?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title(''); ?></title>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style-iframe-module.css">
<?php wp_head(); ?>

</head>
<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = str_replace("?s=","",$page);
	$page = $page ? $page : 'default'
?>

<body id="<?php echo $page ?>" <?php body_class(); ?>>

<div id="wrapper">
	
		<div class="stars">
			<ul>
				<input type="radio"  tabindex="1" id="choice_4_0" value="1star" name="input_4" class="star-1 star">
				<label id="label_4_0" for="choice_4_0" class="star-1"></label>
				<input type="radio"  tabindex="2" id="choice_4_1" value="2star" name="input_4"  class="star-2 star">
				<label id="label_4_1" for="choice_4_1" class="star-2"></label>
				<input type="radio"  tabindex="3" id="choice_4_2" value="3star" name="input_4" class="star-3 star">
				<label id="label_4_2" for="choice_4_2" class="star-3"></label>
				<input type="radio"  tabindex="4" id="choice_4_3" value="4star" name="input_4" class="star-4 star">
				<label id="label_4_3" for="choice_4_3" class="star-4"></label>
				<input type="radio"  tabindex="5" id="choice_4_4" value="5star" name="input_4" class="star-5 star">
				<label id="label_4_4" for="choice_4_4" class="star-5"></label>
				<span></span>
			</ul>
		</div> <!-- .stars -->
	
	<div class="cform-wrap">
		<div class="cta">
			<p>I'm sorry to hear that you did not have a pleasant dining experience at Blue Smoke Sushi Lounge. Our goal is to provide you with the finest customer service and leave you with a memorable experience. We would love to hear your feedback, and we will do everything that we can to resolve any issues. We value your comments and feedback..<br>
- Management</p>
		</div>
		<div class="cform">
			<?php 
			    $form = get_field('select_form');
			    gravity_form_enqueue_scripts($form->id, true);
			    gravity_form($form->id, true, true, false, '', true, 1); 
			?>
		</div>
	</div><!-- .cform-wrap -->
	<div class="review-sites">
		<a href="<?php the_field('facebook_link') ?>" class="social-icon facebook"></a>
		<a href="<?php the_field('google_link') ?>" class="social-icon google"></a>
		<a href="<?php the_field('yelp_link') ?>" class="social-icon yelp"></a>
	</div>


</div><!-- #wrapper -->
<script>
		jQuery(document).on("touchstart click", ".stars label", function () {
  	  jQuery(".stars").fadeOut();
			
  	});
	
  	jQuery(document).on("touchstart click", ".stars label.star-1", function () {
  	  jQuery(".cform-wrap").fadeIn();
  	  jQuery("input.gform_hidden" ).val(jQuery("input.star-1").val());
  	});
  	jQuery(document).on("touchstart click", ".stars label.star-2", function () {
  	  jQuery(".cform-wrap").fadeIn();
  	  jQuery("input.gform_hidden" ).val(jQuery("input.star-2").val());
  	});
  	jQuery(document).on("touchstart click", ".stars label.star-3", function () {
  	  jQuery(".cform-wrap").fadeIn();
  	  jQuery("input.gform_hidden" ).val(jQuery("input.star-3").val());
  	});
  	
  	jQuery(document).on("touchstart click", ".stars label.star-4", function () {
  	  jQuery(".review-sites").fadeIn();
  	  jQuery("input.gform_hidden" ).val(jQuery("input.star-4").val());
  	});
  	jQuery(document).on("touchstart click", ".stars label.star-5", function () {
  	  jQuery(".review-sites").fadeIn();
  	  jQuery("input.gform_hidden" ).val(jQuery("input.star-5").val());
  	});
</script>

<?php wp_footer(); ?>
</body>
</html>
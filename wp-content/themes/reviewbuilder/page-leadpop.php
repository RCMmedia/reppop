	<?php
	/**
	 * Template Name: leadPop
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site will use a
	 * different template.
	 *
	 * @package WordPress
	 * @subpackage Twenty_Ten
	 * @since Twenty Ten 1.0
	 */
	?> 
	<!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php wp_title(''); ?></title>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/leadpop-styles.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700|Bevan|Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	</head>
	
	
	<body id="<?php echo $page ?>" <?php body_class(); ?>>
	
	<div class="header">
		<div class="inner">
			<a href="http://leadpops.com"><img class="logo" src="<?php bloginfo('template_directory') ?>/images/leadpop/logo.png"/></a>
			<a href="http://leadpops.com" class="desktop_back">Back to Main Site<img src="<?php bloginfo('template_directory') ?>/images/leadpop/tri.png"/></a>
		</div><!-- inner -->
	</div><!-- header -->
	<div class="main">
		<div class="inner">
			
		</div><!-- inner -->
	</div><!-- main -->
	<div class="blue_bar">
		<div class="inner">
			<a href="http://leadpops.com">
				<span class="alexandria_font">Want to Learn More? Request a <span class="bevan_font">FREE</span> Marketing Consultation <span class="bevan_font"><br class="bluebar_break"/>Get Started Now<img src="<?php bloginfo('template_directory') ?>/images/leadpop/tri-dark.png"/></span></span>
			</a>
		</div><!-- inner -->
	</div><!-- blue bar -->
	<div class="testimonials">
		<div class="inner">
			<div class="testimonial_quote left">
				<h2>
					<a href="">
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops had an<br class="bluebar_break"/>immediate impact
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					</a>
				</h2>
				<p><a href="">“Replacing our traditional landing pageswith Andrew’s leadPops product has had an immediate impact on our lead...<span class="read_more">Read More</span></a></p>
				<a href="">
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/ffs.png"/>
				</a>
			</div><!-- testimonial quote -->
			<div class="testimonial_quote right">
				<h2>
					<a href="">
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops: the expertise<br class="bluebar_break"/>we need
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					</a>
				</h2>
				<p><a href="">“leadPops gives us the expertise we need to maximize our marketing spend. We can leverage their brains to ensure...<span class="read_more">Read More</span></a></p>
				<a href="">
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/capwest.png"/>
				</a>
			</div><!-- testimonial quote -->
			<div class="back_to_top">
				<a href="">
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/back-to-top.png"/>
				</a>
				<a href="">Back to Top</a>
				<span>Copyright ©2015 leadPops, Inc.</span>
			</div><!-- back to top -->
		</div><!-- inner -->
	</div><!-- tesimonials -->
			
	<?php wp_footer(); ?>
	</body>
	</html>
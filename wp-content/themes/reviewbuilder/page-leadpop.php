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
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/leadpop-styles.css?v=4">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/inc/leadpops/style.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700|Bevan|Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/min/reppop-min.js"></script>
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/inc/onepage/css/ie.css" media="screen" />
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
		jQuery(document).ready(function(){
			
			// Add css3 fadeins on click events 
			// Next (Global)
			jQuery(".gform_next_button").click(function() {
				jQuery('.gform_wrapper').addClass('fadeaway');
				jQuery('.secure').addClass('fadeaway'); // my secure lock image is outside of gforms
			});
			// Back (Global)
			jQuery(".gform_previous_button").click(function() {
				jQuery('.gform_wrapper').addClass('fadeaway');
				jQuery('.secure').addClass('fadeaway');
			});
			// Submit (Global)
			jQuery("#gform_submit_button_2").click(function() {
				jQuery('.gform_wrapper').addClass('fadeaway');
				jQuery('.secure').addClass('fadeaway');
			});
			
			
			// This is what binds to the document ready after validation happens on gform next button
			
			jQuery(document).bind('gform_page_loaded', function(event, form_id, current_page){
			  
			  
			  jQuery(document).scrollTop(0); // this changes the anchor point on multi page to the top of the page
				
				
				// _gaq.push(['_trackPageview'], window.location.pathname + current_page); this is g.a. tracking bewteen pages
				
				
				// This removes the class once gform_page_loaded is binded to document  
				
				jQuery(".gform_wrapper").removeClass('fadeaway');	
				jQuery(".secure").removeClass('fadeaway');	
				
				// Then I start over, add the click function in gform_page_loaded				
				//Next (GLobal)
				jQuery(".gform_next_button").click(function() {
					jQuery('.gform_wrapper').addClass('fadeaway');
					jQuery('.secure').addClass('fadeaway');
				});
				// Back (Global)
				jQuery(".gform_previous_button").click(function() {
					jQuery('.gform_wrapper').addClass('fadeaway');
					jQuery('.secure').addClass('fadeaway');
				});
				// Submit (Global)
				jQuery("#gform_submit_button_2").click(function() {
					jQuery('.gform_wrapper').addClass('fadeaway');
					jQuery('.secure').addClass('fadeaway');
				});
				
				jQuery('.gforms_confirmation_message_2').addClass('fadein_thankyou');
				
				
						
				
			});
		});
		//BEGIN Stars JS
		jQuery(document).on("touchstart click", ".stars label", function () {
  	  jQuery(".stars").fadeOut(function() {
				jQuery('.form').fadeIn();
		});
			
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
  	//END Stars JS
  	
	</script>
</head>
<body id="<?php echo $page ?>" <?php body_class(); ?>>
	
	<div class="header">
		<div class="inner">
			<a href="http://leadpops.com" target="_blank"><img class="logo" src="<?php bloginfo('template_directory') ?>/images/leadpop/logo.png"/></a>
			<a href="http://leadpops.com" target="_blank" class="desktop_back">Back to Main Site<img src="<?php bloginfo('template_directory') ?>/images/leadpop/tri.png"/></a>
		</div><!-- inner -->
	</div><!-- header -->
	<div class="main">
		<div class="inner">
			<div class="stars_wrap">
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
			</div><!-- .stars_wrap -->
			<div class="form">
				<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]') ?>
				<div class="secure">
					<img class="lock" src="<?php bloginfo('template_directory') ?>/images/leadpop/lock.png"/>
					<div class="disclaimer">
						Privacy & Security <span class="bevan_font">Guaranteed.</span><br/>
						<span class="never_sold">Your Data is Never Sold or Shared. Ever.</span>
				</div><!-- secure -->
			</div><!-- form -->
			
			<!--
<a id="prev">prev</a>
			<a id="next">next</a>

			<div id="my_progressbar" class="progressbar_wrapper">
				<h3 class="gf_progressbar_title">Step 1 of 4 </h3>
				<div class="gf_progressbar">
					<div class="gf_progressbar_percentage percentbar_green percentbar_25" style="width:25%;">
						<span>25%</span>
					</div>
				</div>
			</div>
-->
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
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops had an<br/> immediate impact
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"Replacing our traditional landing pageswith Andrew’s leadPops product has had an immediate impact on our lead...<span class="read_more">Read More</span></p>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/ffs.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote right">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops: the expertise<br class="bluebar_break"/> we need
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"leadPops gives us the expertise we need to maximize our marketing spend. We can leverage their brains to ensure...<span class="read_more">Read More</span></p>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/capwest.png"/>
				
			</div><!-- testimonial quote -->
			<div class="back_to_top">
				<a href="">
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/back-to-top.png"/>
				</a>
				<a>Back to Top</a>
				<span>Copyright ©2015 leadPops, Inc.</span>
			</div><!-- back to top -->
		</div><!-- inner -->
	</div><!-- tesimonials -->
	<div class="overlay">
		<div class="header">
		<div class="inner">
			<a href="http://leadpops.com"><img class="logo" src="<?php bloginfo('template_directory') ?>/images/leadpop/logo.png"/></a>
			<span class="desktop_back close">Close<img src="<?php bloginfo('template_directory') ?>/images/leadpop/tri.png"/></span>
		</div><!-- inner -->
	</div><!-- header -->
		<div class="overlay_inner">
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops had an<br/> immediate impact
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"Replacing our traditional landing pages with Andrew’s leadPops product has had an immediate impact on our lead conversion rates. Over time we have experienced a 25% to 35% increase in conversions which makes the ROI on the product outstanding.  Andrew and his team are incredibly responsive to any requests and updates to our pages, and they are always open to new ideas to enhance the product. We consider Andrew and his team as valuable partners in the growth of our business."</p>
				<span class="client_name">-David Hay<br/><i>Vice President of Marketing, First Financial Services</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/ffs.png"/>
				
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops: the expertise<br/> we need
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"leadPops gives us the expertise we need to maximize our marketing spend. We can leverage their brains to ensure clicks convert to leads on a highly consistent basis. They have become an extension of our marketing team.”</p>
				<span class="client_name">-Monte Robbins<br/><i>President & CEO, CapWest Mortgage</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/capwest.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops has been<br/> a great ally
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"leadPops has helped us improve our conversions with custom landing pages. Before working with leadPops, we struggled with figuring out the best design and optimization for our landing pages. They have been a great ally in helping us get the most out of our advertising dollars!"</p>
				<span class="client_name">-Dan Stevens<br/><i>Marketing Director, National Bank of Kansas City</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/national.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>One of the<br/> best decisons
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"Since we’ve been using leadPops landing pages, we’ve seen a marked increase in conversion rates, which has led to a dramatic upsurge in loan applications on our end.  The entire leadPops team has been incredibly available to us to address any questions we have.  They’ve been consistently updating and improving their pages, and they’ve been more than happy to incorporate any particular requests we’ve had into our pages.  Overall, using leadPops landing pages has been one of the best decisions our rate table group has made."</p>
				<span class="client_name">-Blake Harrison<br/><i>Direct Business Analyst, Guaranteed Rate</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/gr.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops is<br/> second to none
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"As a 20 year veteran of the mortgage industry, currently focused in the highly competitive consumer direct channel, I have found leadPops to be 2nd to none.  In our monthly reviews of costs per contact, overall lead acquisition costs, and net costs per funded transaction, literally no other platform we are currently using or have tested in the past compares to our experience from the leadPops design.  The costs are VERY low, and the results are beyond our expectations."</p>
				<span class="client_name">-Brian Mitchell<br/><i>Regional Manager, Supreme Lending</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/supreme.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>I'm so thankful<br/> I found leadPops!
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"I’m so thankful that I found leadPops! Their unique lead capture forms have increased my conversion rate by 10% since I started using them.  I’m now capturing over 20% month over month! Their custom back-end is easy to navigate and allows me to make my changes on the fly.  Not only am I happy with the lead forms, but also their customer service has been first-rate."</p>
				<span class="client_name">-David Fingerhut<br/><i>Owner, eLoan Rates</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/eloan.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>Highly Recommended
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"We first experimented with a leadPops landing page on Zillow.com and the rest of our landing pages followed soon after that due to the success.  On every advertising channel, we saw an immediate increase in conversion percentage with a leadPops landing page. Our leadPops landing pages are simple, clean, straightforward, and get right to the point.  Implementation was fast and simple. Highly recommended."</p>
				<span class="client_name">-Justin Davitch<br/><i>Assistant Vice President, Home Finance of America</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/home-financial.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>Outperforms Anything<br/> that is out there
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"I am writing this to highly recommend Andrew Pawlak and leadPops. Andrew was introduced to me by a contact at Zillow. I was told that leadPops created landing pages that are clean and attractive. They are designed to make the customer feel comfortable enough to finish the questions and complete the lead form. I was told that this would increase the number of completed leads I would get.</p>
<p>RESULT: Andrew Pawlak and leadPops have proven to be an excellent professional contact with a product that outperforms anything that is out there today in 2013. I have presented multiple projects to his team simultaneously, and they performed magnificently and finished BEFORE the project deadlines. You are doing your company a huge favor by using Andrew Pawlak and leadPops."</p>
				<span class="client_name">-Steve Banass<br/><i>Director of Quality Control, TrueRate Partners</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/truerate.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>leadPops integration <br/> was seamless
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"Working with leadPops has been not only a pleasant experience, but has turned into a valuable relationship for our business. Andrew and his team have opened up a door for us to grow our business which has meant a lot to our company. leadPops integration with our website has been seamless and very user friendly, enabling us to capture potential customers that visit our website and turn them into sales at a much higher rate. leadPops understands the market and the insurance shopper; they will certainly be a part of our growth in 2013 and beyond. Thanks for your commitment to our agency."</p>
				<span class="client_name">-Chris Manoly<br/><i>COO, Mills Insurance</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/mis.png"/>
				
			</div><!-- testimonial quote -->
			<div class="testimonial_quote">
				<h2>
					
						<img class="quote left" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-left.png"/>A partner in success
						<img class="quote right" src="<?php bloginfo('template_directory') ?>/images/leadpop/quote-right.png"/>
					
				</h2>
				<p>"I have worked with Andrew and the leadPops Team for about 3 months now. In that time, they have continuously demonstrated a sincere effort to ensure the success of my campaign. The service is outstanding and their marketing strategies simply work! It’s clear that’s just how they operate. Here are some numbers to consider: in last 90 days, I’ve generated over 150 leads using leadPops technology and marketing solutions. My average visitor-to-lead conversion rate is almost 14%. Most importantly, I have 20+ loans in my pipeline that will close as a direct of leadPops. Again – it’s only been 3 months since I launched, not to mention I haven’t spent any additional money on marketing! It’s rare that a company exceeds expectations the way leadPops has mine. Thanks, leadPops, for not just being another vendor, but a partner in success."</p>
				<span class="client_name">-Craig Ballhagen<br/><i>Sr. Loan Officer, Guild Mortgage</i></span>
				
					<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				
			</div><!-- testimonial quote -->
		</div><!-- inner -->
	</div><!-- overlay -->	
	<?php wp_footer(); ?>
	</body>
	</html>
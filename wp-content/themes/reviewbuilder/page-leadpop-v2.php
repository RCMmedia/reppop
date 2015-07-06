<?php
/**
 * Template Name: leadPop v2
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
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php wp_title(''); ?></title>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/leadpop-styles-v2.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/inc/leadpops/style.css">
<link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,700|Bevan|Karla:400,400italic,700,700italic" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/min/reppop-min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/inc/leadpops-v2/js/jquery.cycle2.min.js"></script>


<script type="text/javascript">

		jQuery(function(){ 
/*
		  jQuery("#label_1star").click(function() {
  	    jQuery("input.gform_hidden").val("1star");
  	  });
  	  
		  
	    jQuery("#label_2star").click(function() {
  	    jQuery("input.gform_hidden").val("2star");
  	  });
		  
	    jQuery("#label_3star").click(function() {
  	    jQuery("input.gform_hidden").val("3starz");
  	  });
*/

	  	jQuery("label.star-1").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".form_wrap").toggleClass('fadein');
				});
  		});
			
	  	jQuery("label.star-2").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".form_wrap").toggleClass('fadein');
				});
 			});
			
	  	jQuery("label.star-3").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".form_wrap").toggleClass('fadein');
				});
  		});
  		
	  	jQuery("label.star-4").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery('.review_links').toggleClass('fadein');
				});
  		});
			
	  	jQuery("label.star-5").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery('.review_links').toggleClass('fadein');
				});
  		});
  	});

       
	</script>
	<script type="text/javascript">

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
		jQuery(function(){ 	
			jQuery(document).bind('gform_page_loaded', function(){
			  
				jQuery(".stars label").click(function() {
  			  jQuery(".stars_wrap").fadeOut(function() {
						jQuery(".form_wrap").toggleClass('fadein');
					});
  			});
			  
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
				
				
		  jQuery("#label_1star").click(function() {
  	    jQuery("input.gform_hidden").val("1star");
  	  });
  	  
		  
	    jQuery("#label_2star").click(function() {
  	    jQuery("input.gform_hidden").val("2star");
  	  });
		  
	    jQuery("#label_3star").click(function() {
  	    jQuery("input.gform_hidden").val("3starz");
  	  });
  	  });
  	  
			});
			
				
	</script>
</head>
<body>
	
	
	<div class="main">
		<div class="header">
			<div class="inner">
				<a href="http://leadpops.com" target="_blank"><img class="logo" src="<?php bloginfo('template_directory'); ?>/inc/leadpops-v2/images/logo.png"/></a>
				<a href="http://leadpops.com" target="_blank" class="desktop_back">Back to Main Site<img src="<?php bloginfo('template_directory'); ?>/images/leadpop/tri.png"/></a>
			</div>
		</div>
		<div class="inner">
			<div class="stars_wrap">
				<div class="my_title cta">
					How are we doing? <br> 
					Your <span class="blue">feedback</span> is important to us!
				</div><!-- .my_title -->
				<div class="stars">
					<input type="radio"  id="choice_1star" value="1star" class="star-1 star">
					<label id="label_1star" class="star-1"></label>
					
					<input type="radio"  id="choice_2star" value="2star" class="star-2 star">
					<label id="label_2star" class="star-2"></label>
					
					<input type="radio"  id="choice_3star" value="3star" class="star-3 star">
					<label id="label_3star" class="star-3"></label>
					
					<input type="radio"  id="choice_4star" value="4star" class="star-4 star">
					<label id="label_4star" class="star-4"></label>
					
					<input type="radio"  id="choice_5star" value="5star" class="star-5 star">
					<label id="label_5star" class="star-5"></label>
					<span></span>
				</div> <!-- .stars -->
			</div><!-- .stars_wrap -->
			
			<div class="form_wrap">
				<div class="form">
				<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]') ?>
					<div class="secure">
						<img class="lock" src="<?php bloginfo('template_directory') ?>/images/leadpop/lock.png"/>
						<div class="disclaimer">
							Privacy & Security <span class="bevan_font">Guaranteed.</span><br/>
							<span class="never_sold">Your Data is Never Sold or Shared. Ever.</span>
						</div><!-- disclaimer -->
					</div><!-- secure -->
				</div><!-- form -->
			</div><!-- .form_wrap -->
			<div class="review_links">
			<div class="review-sites">
				<a href="<?php the_field('facebook_link') ?>" class="social-icon facebook"></a>
				<a href="<?php the_field('google_link') ?>" class="social-icon google"></a>
				<a href="<?php the_field('yelp_link') ?>" class="social-icon yelp"></a>
			</div><!-- .review-sites -->
		</div><!-- .review_links -->
		</div><!-- inner -->
		
	</div><!-- main -->
		
	

	<div class="blue_bar">
		<div class="inner">
			<a class="button cta" href="http://leadpops.com">
				<img src="<?php bloginfo('template_url') ?>/inc/leadpops-v2/images/megaphone-icon.png"/> Start Generating Exclusive Leads Now!
			</a>
			<a class="button cta_button" href="">Start My FREE 30-Day Trial</a>
		</div><!-- inner -->
	</div><!-- blue bar -->
	<div class="testimonials clearfix">
		<div class="inner">
			<a class="button cta">Hear What Clients Like You Are Saying</a>
			<div class="cycle-slideshow" data-cycle-auto-height="container">
			
			<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>Good news! It definitely looks like the investment has been good so far as conversions are up about 65% after 1 week compared to my old site. Only bad news is I have to manually enter 42 leads from over the weekend into my CRM since my integration hasn’t been set up yet, but I guess that’s a good problem to have :)</span>
						
						</p>
					<span class="client_name">-John Doan<br/></span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/ffs.png"/>
				</div><!-- testimonial quote -->
				
				<div class="testimonial_quote">
					<p><span>Thank you so much, Andrew! We’ve had 3 leads come in this weekend… 2 warm and 1 hot! :) I’m so excited to have you guys on my team! I have been nothing but impressed by how professional and knowledgeable your company has been. Thanks again and have a great day!</span></p>
					<span class="client_name">-Nikki Wood</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/capwest.png"/>
				</div><!-- testimonial quote -->
				
			</div> <!-- .slide-wrap -->
			
			<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>I wanted to take a moment to thank you for all you do to help me grow my business. Your knowledge and expertise has helped me to engage with Realtors and establish new and better relationships. We have enjoyed a great synergy for a decade and I hope we continue for another. If there is ever an opportunity for me to refer anyone in need of your services, I assure you that I will pass your information on with the highest recommendations.</span></p>
					<span class="client_name">-Bill Burnett</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/national.png"/>
				</div><!-- testimonial quote -->
				<div class="testimonial_quote">
					<p><span>Best investment we have made in many years. We went from 2 to 3 leads a month with our website to more than 5 per week now. The leads are very good and we have 12 loans in the process since starting this program. I am very happy with the results we have received from leadPops. Excellent.</span></p>
					<span class="client_name">-Larry Alexander</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/supreme.png"/>
				</div><!-- testimonial quote -->
				
			</div><!-- .slide-wrap -->
						
			<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>I have worked with the leadPops Team for about two years now. Their capture portals and marketing consulting have helped grow my agency by over 500 policies in two years. Every day, I have targeted leads in my “inbox”. My leadPops have become my number one market plan for the acquisition of new clients. I also love how Andrew and the leadPops Team are always coming up with new ideas to keep their product the best on the market. Highly recommend to anyone!</span></p>
					<span class="client_name">-Joe Giamanco</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/home-financial.png"/>
				</div><!-- testimonial quote -->
				
				<div class="testimonial_quote">
					<p><span>"I am writing this to highly recommend Andrew Pawlak and leadPops. Andrew was introduced to me by a contact at Zillow. I was told that leadPops created landing pages that are clean and attractive. They are designed to make the customer feel comfortable enough to finish the questions and complete the lead form. I was told that this would increase the number of completed leads I would get.</span></p>
<p><span>RES	ULT: Andrew Pawlak and leadPops have proven to be an excellent professional contact with a product that outperforms anything that is out there today in 2013. I have presented multiple projects to his team simultaneously, and they performed magnificently and finished BEFORE the project deadlines. You are doing your company a huge favor by using Andrew Pawlak and leadPops."</span></p>
					<span class="client_name">-Chris Manoly</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/truerate.png"/>
				</div><!-- testimonial quote -->
			</div><!-- .slide-wrap -->
			
			<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>I am writing this to highly recommend leadPops. Andrew was introduced to me by a contact at Zillow. I was told that leadPops created landing pages that are clean and attractive. They are designed to make the customer feel comfortable enough to finish the questions and complete the lead form. I was told that this would increase the number of completed leads I would get.<br><br>

RESULT: leadPops have proven to be an excellent professional contact with a product that outperforms anything that is out there today. I have presented multiple projects to his team simultaneously, and they performed magnificently and finished BEFORE the project deadlines. You are doing your company a huge favor by using leadPops.</span></p>
					<span class="client_name">-Steve Banass </span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/mis.png"/>
				</div><!-- testimonial quote -->
				
				<div class="testimonial_quote">
					<p><span>We first experimented with a leadPops landing page on Zillow.com and the rest of our landing pages followed soon after that due to the success. On every advertising channel, we saw an immediate increase in conversion percentage with a leadPops landing page. Our leadPops landing pages are simple, clean, straightforward, and get right to the point. Implementation was fast and simple. Highly recommended.</span></p>
					<span class="client_name">-Justin Davitch </span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				</div><!-- .slide-wrap -->
				
				<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>I’m so thankful that I found leadPops! Their unique lead capture forms have increased my conversion rate by 10% since I started using them.  I’m now capturing over 20% month over month! Their custom back-end is easy to navigate and allows me to make my changes on the fly.  Not only am I happy with the lead forms, but also their customer service has been first-rate.</span></p>
					<span class="client_name">-David Fingerhut </span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				<div class="testimonial_quote">
					<p><span>As a 20 year veteran of the mortgage industry, currently focused in the highly competitive consumer direct channel, I have found leadPops to be 2nd to none. In our monthly reviews of costs per contact, overall lead acquisition costs, and net costs per funded transaction, literally no other platform we are currently using or have tested in the past compares to our experience from the leadPops design. The costs are VERY low, and the results are beyond our expectations.</span></p>
					<span class="client_name">-Brian Mitchell</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				</div>

				<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>Since we’ve been using leadPops landing pages, we’ve seen a marked increase in conversion rates, which has led to a dramatic upsurge in loan applications on our end. The entire leadPops team has been incredibly available to us to address any questions we have. They’ve been consistently updating and improving their pages, and they’ve been more than happy to incorporate any particular requests we’ve had into our pages. Overall, using leadPops landing pages has been one of the best decisions our rate table group has made.</span></p>
					<span class="client_name">-Blake Harrison </span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				<div class="testimonial_quote">
					<p><span>leadPops gives us the expertise we need to maximize our marketing spend. We can leverage their brains to ensure clicks convert to leads on a highly consistent basis. They have become an extension of our marketing team.</span></p>
					<span class="client_name">-Monte Robbins</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				</div>
				
				<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>I have referred a number of my clients and prospects who are looking to build new landing pages or improve the number of leads generated from their existing landing pages. leadPops’ industry knowledge, response time, and attention to detail is outstanding, and many of my clients have shared with me their appreciation for referring them to leadPops.</span></p>
					<span class="client_name">-Paul Duncan</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				<div class="testimonial_quote">
					<p><span>Replacing our traditional landing pages with leadPops has had an immediate impact on our lead conversion rates. Over time we have experienced a 25% to 35% increase in conversions which makes the ROI on the product outstanding. Andrew and his team are incredibly responsive to any requests and updates to our pages, and they are always open to new ideas to enhance the product. We consider Andrew and his team as valuable partners in the growth of our business.</span></p>
					<span class="client_name">-David Hay</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				</div>
				
				<div class="slide-wrap">
				<div class="testimonial_quote">
					<p><span>These are the best converting landing pages we have seen to date. We (Zillow) now have a number of clients using leadPops and the results speak for themselves. We are seeing a 20-40% increase our clients’ landing page capture rates because of leadPops. This means that our clients’ ad dollars are 20-40% more effective. Thanks to the leadPops team for all your hard work.</span></p>
					<span class="client_name">-Nick Fitzer</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				<div class="testimonial_quote">
					<p><span>leadPops has helped us improve our conversions with custom landing pages. Before working with leadPops, we struggled with figuring out the best design and optimization for our landing pages. They have been a great ally in helping us get the most out of our advertising dollars!</span></p>
					<span class="client_name">-Dan Stevens</span>
						<img src="<?php bloginfo('template_directory') ?>/images/leadpop/guild.png"/>
				</div><!-- testimonial quote -->
				</div>
				
				<div class="slide-wrap">
					
					<div class="testimonial_quote">
						<p><span>I first started using leadPops marketing last fall and I instantly realized its overwhelming benefits to marketing and finding clients for our legal practice. It’s so simple and easy to implement and for your potential clients to use, that it seems too be good to be true. However, this simplicity on all ends is what makes it such a great tool. It allows for your potential clients to provide an abundance of useful information to reach out to them and make a connection without requiring more than a moment or two of their time. In addition, on your end you will receive the information lightning fast and in various media formats that will give you a great edge in reaching out to your potential clients ASAP! I truly believe that leadPops is a one of a kind marketing tool that has given our firm a great advantage in being able to reach out to our potential clients and take of advantage of all of our other electronic media marketing tools. The customer care from Andrew and his leadPops team has been outstanding, and they are always there to provide personalized care to fit the leadPops tool into your firm’s needs. leadPops is a marketing tool that will be used by our firm for a long, long time.</span></p>
						<span class="client_name">-KC Swanson</span>				
							<img src="<?php bloginfo('template_directory') ?>/images/leadpop/gr.png"/>				
					</div><!-- testimonial quote -->
					
					<div class="testimonial_quote">
						<p><span>leadPops has been great for my agency. Since getting leadPops set up, my commercial business has jumped substantially. I use Google Adwords to advertise my leadPops and the cost is minimal compared to the amount of business I get. I have tried other internet based lead sources (i.e NetQuote, Agent Insider) just to mention a few, and spent lots of money, and saw zero return on investment because 10 other agents get the same lead. These days, instead of buying leads, I get the best bang for my buck using the same technology and strategies use by the lead generation companies to generate my own leads! That strategy – using Google Adwords to drive qualified traffic to my leadPops lead generation portals – has resulted in over $11K in sales over the last 6 months, and I am spending less than $300 per month total! The great thing about leadPops is every time somebody fills out the form to get a quote you are the only agent that gets the lead! I have and will continue to recommend leadPops to other insurance agents. If you are going to do internet leads, this is the best company I have found!</span></p>
						<span class="client_name">-Mike Hardman</span>
							<img src="<?php bloginfo('template_directory') ?>/images/leadpop/eloan.png"/>
					</div><!-- testimonial quote -->
			</div><!-- .slide-wrap -->

				
			</div><!-- .slide-wrap -->
			
		</div><!-- inner -->
		<div class="next-prev">
			<a class="prev"><img src="<?php bloginfo('template_url') ?>/inc/leadpops-v2/images/prev.png" alt="prev" width="27" height="28"></a>
			<a class="next"><img src="<?php bloginfo('template_url') ?>/inc/leadpops-v2/images/next.png" alt="next" width="27" height="28"></a>
		</div>
		<div class="slide-pager"></div>	
			
		</div><!-- inner -->
	</div><!-- tesimonials -->
	<div class="footer">
		<div class="back_to_top">
			<a href="">
				<img src="<?php bloginfo('template_directory') ?>/images/leadpop/back-to-top.png"/>
			</a>
			<a>Back to Top</a>
			<span>Copyright ©2015 leadPops, Inc.</span>
		</div><!-- back to top -->
	</div>	

	<script>
		jQuery(".cycle-slideshow").cycle({
			slides: ".slide-wrap",
			pager : ".slide-pager",
			next : ".next",
			prev : ".prev",
			paused : true
		});
		jQuery('.slide-pager').click(function() {
			jQuery('html, body').animate({
        scrollTop: jQuery(".testimonials").offset().top
    }, 1000);
		});
		
		
		
	</script>
	<?php wp_footer(); ?>
	</body>
	</html>
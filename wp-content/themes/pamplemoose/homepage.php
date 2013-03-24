<?php
/*
Template Name: Homepage
*/


get_header(); 

?>

		

		<div class="container home">
		
		<a name="top"></a>
					
			<div id="logo" name="logo" class="hide-for-small"></div>
			
			<div id="menuMobile" class="show-for-small">
			
				<div id="mobileLogo"><a href="#logo"><img src="<?php bloginfo('template_url'); ?>/images/home/pamplemoose_logo_mobile.png"/></a></div>
				
				
			</div>
					
			<div id="menuContainer" class="hide-for-small">

			<div id="menu" class="default">
			
			<div id="homeHeader" class="hide-for-small">
			
				<div class="row">
							
						<div class="twelve columns centered" id="nav">
						
							<header role="banner" id="top-header">
								
									<div class="row">
									
										<div class="one column">
											<div id="homeIcon1">
												<li><a href="#whyAnchor"><img src="<?php bloginfo('template_url'); ?>/images/home/icon_home1.png" /><span>Why</span></a></li>
											</div>
										</div>
										<div class="two columns">
											<div id="homeIcon2">
												<li><a href="#formulaAnchor"><img src="<?php bloginfo('template_url'); ?>/images/home/icon_home2.png" /><span>Formula</span></a></li>											</div>
										</div>
										
										<div class="six columns">
										<a href="#top" id="logoScroll"></a>
										</div>
										
										<div class="two columns">
											<div id="homeIcon3">
												<li><a href="#victimsAnchor"><img src="<?php bloginfo('template_url'); ?>/images/home/icon_home3.png" /><span>Victims</span></a></li>											</div>
										</div>
										<div class="one column">
											<div id="homeIcon4" >
												<li><a href="#huntAnchor"><img src="<?php bloginfo('template_url'); ?>/images/home/icon_home4.png" /><span>Hunt us down</span></a></li>
											</div>
										</div>
									
								
																				
									</div>

							</div>
							
							<?php bones_mobile_nav(); ?>
		
						</header> <!-- end header -->
					</div>
					
				</div>
				</div>
				
			</div>
			
			<div class="show-for-small row" id="sliderMobile">
				<div class="twelve columns">
					<h2>We create exceptional brands</h2>
					<p class="mainTitle">for the first-timers, for the existing players.</p>
				</div>
			</div>
				
			<div class="container hide-for-small">
			
				<div id="featuredContent">
				
					<div id="slider1">
					  
						<div class="row">
					  
							<div class="twelve columns centered">
						  
							<h2 class="fadeInDown">We create exceptional brands</h2>
							<p class="mainTitle fadeInRight">for the first-timers, for the existing players.</p>
							
							<a class="round button center fadeInLeft" id="study" href="#victimsAnchor">Study our victims</a>
						  
							</div>
						  
						</div>	  
	
					</div>
					
					<div id="slider2">
					  
						<div class="row">
					  
							<div class="twelve columns centered">
						  
							<h2>We give a hand to new blood</h2>
							<p>providing early-stage marketing and branding for start-ups</p>
						 	<a class="round button center" data-reveal-id="buildModal">Build a masterpiece</a>

						  
							</div>
						  
						</div>	  
	
					</div>
					
					<div id="slider3">
					  
						<div class="row">
					  
							<div class="twelve columns centered">
						  
							<h2>We do facelifts for future stars</h2>
							<p>brand mutations, website overhauls, and targeted messaging</p>
							<a class="round button center" data-reveal-id="snapModal">Snap out of it</a>
						  
							</div>
						  
						</div>	  
	
					</div>
					
				</div>

			
				
		  
				<script type='text/javascript'>
				   $(window).load(function() {
				       $('#featuredContent').orbit({ fluid: '16x6', timer: true, animationSpeed:450, advanceSpeed:8000, animation:'fade' });
				   });
				</script>
			</div>
			
			<div id="whyAnchor"></div>		
			

			<div class="row" id="why">

				<div class="twelve columns">
				
					<h2>Why?</h2>
					
					<div id="sound">
						<img src="<?php bloginfo('template_url'); ?>/images/home/sound_text.png" alt="Pamplemoose phonetics"/>
						<span id="pamplemooseSound"><img src="<?php bloginfo('template_url'); ?>/images/home/sound_button.png" alt="Pamplemoose pronunciation" class="fade"/></span>
						
						<audio id="beep-one">
						<source src="<?php bloginfo('template_url'); ?>/images/home/pamplemoose.mp3" controls></source>
						</audio>
						
						<script>var beepOne = $("#beep-one")[0];
						$("#pamplemooseSound")
							.click(function() {
								beepOne.play();
							});</script>
						
					</div>
				
				</div>
			
			</div>
			
	
			<div class="row" >

				<div class="six columns">
				
					<p class="loveGrapfruit">We love grapefruit</p>
				
					<img src="<?php bloginfo('template_url'); ?>/images/home/grapefruit.png" alt="grapefruit" />
								
				</div>
				
				<div class="six columns">
				
					<p class="canadianTwist">We have a canadian twist</p>
				
					<img src="<?php bloginfo('template_url'); ?>/images/home/moose.png" alt="moose" />
					
				
				</div>
			
			</div>

			<div class="row" id="seriously">

				<div class="twelve columns">
				
					<h2>And we don't take ourselves too seriously</h2>
				
				</div>
			
			</div>

			<div id="formulaAnchor"></div>		


			
			<div class="container hide-for-small" id="formula">
			
				<div class="row">
				
					<div class="six columns">
					
						<div id="banner">
						
							<h2>Formula</h2>
						
						</div>
						
					</div>
					
					<div class="six columns">	
			
						<div id="contents">
						
							<ul>
								<li>We pick gigs we believe in.</li>
								<li>We start today.</li>
								<li>We don't take shortcuts.</li>
								<li>We design it with you.</li>
								<li>We deliver what's needed.</li>
								
							</ul>
							
						</div>
						
										
					</div>
				
				</div>
			
			</div>
			
			<div class="container show-for-small" id="formulaMobile">
			
				<div class="row">
				
					<div class="six columns centered">
					
												
							<h2>Formula</h2>
						
							<ul>
								<li>We choose projects <br/>we believe in.</li>
								<li>We start today.</li>
								<li>We don't take shortcuts.</li>
								<li>We devise it with you.</li>
								<li>We deliver what's needed.</li>
								
							</ul>
		
					</div>
				
				</div>
			
			</div>

			

			<div id="victimsAnchor"></div>				

			<!-- Victims -->
			
			<div class="row hide-for-small" id="victims">
			
				<div class="twelve columns">
				
					<h2>Victims</h2>
					
				</div>
				
				<div class="six columns" id="victimOne">
					<div class="victimContainer">
					
						<div id="boxoverOne" style="display:none;">
							<h3>HitchWhister</h3>
							
							<h4>Nobody likes standing in the cold waiting for a ride.<br/>So, we changed this.</h4>
	
							<p>We took HitchWhistler from an exciting idea to a successful organization. Our work included the creation of the HitchWhistler brand and website, stickers, posters and social media presence. Our biggest challenge was creating Hitch’s rideshare service; our biggest success was growing this service from 0 - 5,000+ members.</p>
	
							<p>We also developed iPhone and Android apps.<br/>Slope-side service. Guaranteed.</p>
							
							<a href="http://www.hitchwhistler.com">www.hitchwhistler.com</a>
	
						</div>
						<img src="<?php bloginfo('template_url'); ?>/images/home/victims_hitch.png"/>
					</div>
				</div>

				<div class="six columns" id="victimTwo">
					<div class="victimContainer">
					<div id="boxoverTwo" style="display:none;">
						<h3>Canadian Neuro-ophthalmology Group</h3>
						
						<h4>We use our heads to help others use theirs.</h4>

						<p>This was the case with the Neuro-opthalmology Group’s brand revamp. Initial work included several creative workshops to determine research branding requirements. These workshops led to logo designs and creative messaging. With a new look and voice, we went to work on a crisp website (coming summer 2013) to reflect brand objectives.</p>

							<p>From start to finish, we got to be creative scientists.</p>
						
						<em>Website coming soon</em>
					</div>
					</div>
				</div>

				<div class="twelve columns" id="victimThree">
					<div class="victimContainer">
					<div id="boxoverThree" style="display:none;">
						<h3>QuickMobile</h3>
						
						<h4>We’re fast and we’re mobile. And while we aren’t QuickMobile, we like their style.</h4>

						<p>Working for this aggressive start-up, we ensure maximum ROI and a 360 view of the marketing cycle. We started with a corporate rebrand, including a new logo and mobile-friendly website. We now support them with digital collateral, creative marketing  and branding efforts.</p>

<p>This company is exploding—and we’re in the blast radius. 
</p>
						
						<a href="http://www.quickmobile.com">www.quickmobile.com</em>
					</div>
					</div>
				</div>
			
			</div>
			
			<div class="row show-for-small" id="victimsMobile">
			
				<div class="twelve columns">

					<h2>Victims</h2>
					
					<div class="item"><a href="http://www.hitchwhistler.com"><img src="<?php bloginfo('template_url'); ?>/images/home/victims_hitch_mobile.png" alt="HitchWhistler" /></a></div>
					
					<div class="item"><img src="<?php bloginfo('template_url'); ?>/images/home/victims_nog_mobile.png" alt="HitchWhistler" /></div>
					
					<div class="item"><a href="http://www.quickmobile.com"><img src="<?php bloginfo('template_url'); ?>/images/home/victims_qm_mobile.png" alt="Quickmobile" /></a></div>
					
				</div>
			
			</div>
			
			<div id="huntAnchor"></div>
			
			<!-- Hunt us down -->
			
			<div class="container" id="huntUsDown">
			
				<div class="row">
			
					<div class="twelve columns">
					
						<h2>Hunt us down</h2>
						
						<div class="row">
						
							<div class="six columns">
							
								<img src="<?php bloginfo('template_url'); ?>/images/home/flo.png" alt="Flo Devellennes"/>
								
								<h3>Flo</h3>
								
								<p>Coming from somewhere in the French part of Europe, it's understandable that Flo believes in life's finer things &mdash; like grapefruit. A designer by day and bread maker by night, he's all about potential growth. His visions ignite our creative process, turning wild thoughts into freakishly great visuals. After a long day's work, he's the first one at the bar, and last one off the snow.</p>
													
							</div>
							
							<div class="six columns">
							
								<img src="<?php bloginfo('template_url'); ?>/images/home/chris.png" alt="Chris Devauld"/>
								
								<h3>Chris</h3>
								
								<p>A former resident of Canada's frozen north, Chris has lumbered through the dark woods countless times in search of meaning. His moose-like behavior has inspired a new mutation of wordsmithing, one that takes napkin notes to boardrooms and beyond. His voice drives our messaging, mixing clarity with creativity, professionalism with fun. When his head is out of the laptop, which it rarely is, his feet are somewhere in the hills.</p>
													
							</div>
						
						</div>
					
					</div>

				</div>
			
			</div>
			
			<?php include('common/modal-snap.php') ;?>
			<?php include('common/modal-masterpiece.php') ;?>
					
			<script>
			
			$('#nav').onePageNav({
		    currentClass: 'current',
		    changeHash: false,
		    scrollSpeed: 1000,
		    scrollOffset: 0,
		    scrollThreshold: 0.5,
		    filter: '',
		    easing: 'swing',
		    begin: function() {
		        //I get fired when the animation is starting
		    },
		    end: function() {
		        //I get fired when the animation is ending
		    },
		    scrollChange: function($currentListItem) {
		        //I get fired when you enter a section and I pass the list item of the section
		    }
		});
		
		</script>
		
		<script>
		
		jQuery(document).ready(function($) {
 
		$("#study").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
			});
		});
		
		</script>
	
			
<?php get_footer(); ?>
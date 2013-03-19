			<footer role="contentinfo">

				<div class="container" id="footer">
			
					<div class="row">
	
						<div class="six columns left">
						
							<?php if($GLOBALS['blog'] == true){ ?>
							<a href="<?php echo site_url(); ?>" class="fade">Homepage</a><br/><br/>
							<?php } else { ?>
							<a href="<?php echo site_url(); ?>/blog" class="fade">Blog</a><br/><br/>
							<?php } ?>
							
							<a href="blog" class="fade">Contact</a>
							
							<p id="copyright" class="hide-for-small">Copyright Pamplemoose Creative 2013</p>
	
						</div>
						
						<div class="six columns right">
						
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/home/icon_twitter.png" alt="Pamplemoose Twitter"/ class="fade"></a>
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/home/icon_facebook.png" alt="Pamplemoose Facebook"/ class="fade"></a>
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/home/icon_pinterest.png" alt="Pamplemoose Pinterest"/ class="fade"></a>							
							<a id="newsletter" data-reveal-id="spamModal" class="round button right hide-for-small">Get spammed. Monthly.</a>
						
						</div>
	
					</div>
					
				</div>
				
				<?php include('common/modal-spam.php'); ?>
										
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
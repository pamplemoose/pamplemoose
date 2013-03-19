<?php 

	if($sharethis){
		$facebookurl  = get_permalink();
	} else{
		$facebookurl = 'https://www.facebook.com/pages/Pamplemoose/148480671972723?ref=hl';
	}
?>

<div id="socialMedia">

	<div id="linkedin">
		<!-- LinkedIn code -->
		<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
		<script type="IN/Share" data-counter="top"></script>
	</div>

	<div id="google">
	<g:plusone size="tall"></g:plusone>
	</div>
				
	<div id="twitter">
	<a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
			
	<div id="facebook">
		<div class="fb-like" data-href="<?php echo $facebookurl;?>" data-send="false" data-layout="box_count" data-width="65" data-show-faces="false"></div>
	</div>

</div>
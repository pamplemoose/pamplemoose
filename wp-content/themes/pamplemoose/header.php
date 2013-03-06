<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>
				
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/stylesheets/pamplemoose.css" />

		<!-- Scrolling JS plugin -->
		
		<script src="<?php bloginfo('template_url'); ?>/javascripts/scroll/jquery.scrollTo.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/javascripts/scroll/jquery.nav.js"></script>
		
		<!-- Menu JS plugin -->
		
		<script src="<?php bloginfo('template_url'); ?>/javascripts/menu/nagging-menu.js"></script>
		
		<!-- bring in theme options styles -->
		<?php 
		$heading_typography = of_get_option('heading_typography');
		if ($heading_typography) {
			$theme_options_styles = '
			h1, h2, h3, h4, h5, h6{ 
				font-family: ' . $heading_typography['face'] . '; 
				font-weight: ' . $heading_typography['style'] . '; 
				color: ' . $heading_typography['color'] . '; 
			}';
		}
		
		$main_body_typography = of_get_option('main_body_typography');
		if ($main_body_typography) {
			$theme_options_styles .= '
			body{ 
				font-family: ' . $main_body_typography['face'] . '; 
				font-weight: ' . $main_body_typography['style'] . '; 
				color: ' . $main_body_typography['color'] . '; 
			}';
		}
		
		$link_color = of_get_option('link_color');
		if ($link_color) {
			$theme_options_styles .= '
			a{ 
				color: ' . $link_color . '; 
			}';
		}
		
		$link_hover_color = of_get_option('link_hover_color');
		if ($link_hover_color) {
			$theme_options_styles .= '
			a:hover{ 
				color: ' . $link_hover_color . '; 
			}';
		}
		
		$link_active_color = of_get_option('link_active_color');
		if ($link_active_color) {
			$theme_options_styles .= '
			a:active{ 
				color: ' . $link_active_color . '; 
			}';
		}
		
		$topbar_bg_color = of_get_option('top_nav_bg_color');
		if ($topbar_bg_color) {
			$theme_options_styles .= '
			.top-nav { 
				background-color: '. $topbar_bg_color . ';
			}';
		}
		
		$topbar_link_color = of_get_option('top_nav_link_color');
		if ($topbar_link_color) {
			$theme_options_styles .= '
			.top-nav > li > a { 
				color: '. $topbar_link_color . ' !important;
			}';
		}
		
		$topbar_link_hover_color = of_get_option('top_nav_link_hover_color');
		if ($topbar_link_hover_color) {
			$theme_options_styles .= '
			.top-nav > li > a:hover { 
				color: '. $topbar_link_hover_color . ' !important;
			}';
		}
		
		$suppress_comments_message = of_get_option('suppress_comments_message');
		if ($suppress_comments_message){
			$theme_options_styles .= '
			#main article {
				border-bottom: none;
			}';
		}
						
		if($theme_options_styles){
			echo '<style>' 
			. $theme_options_styles . '
			</style>';
		}
		
		?>
		
		<script>
		
		$(document).ready(function(){
			$('#victimOne').hover(
				function(){$('#boxoverOne').fadeIn()}, 
				function(){$('#boxoverOne').fadeOut()}
			);
		});
		
		$(document).ready(function(){
			$('#victimTwo').hover(
				function(){$('#boxoverTwo').fadeIn()}, 
				function(){$('#boxoverTwo').fadeOut()}
			);
		});
		
		$(document).ready(function(){
			$('#victimThree').hover(
				function(){$('#boxoverThree').fadeIn()}, 
				function(){$('#boxoverThree').fadeOut()}
			);
		});
		

	
		</script>
				
	</head>
	
	<body <?php body_class(); ?>>

		
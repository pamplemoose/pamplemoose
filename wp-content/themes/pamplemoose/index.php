<?php
/*
Template Name: Blog
*/

$GLOBALS['blog'] = true;

?>

<?php get_header(); ?>
			
<div id="blog">			
			
	<div class="row" id="blogHeader">
	
		<div class="twelve columns">
		
			<a id="blogLogo" href="<?php echo site_url(); ?>" class="hide-for-small"></a>
	
			<?php include('common/social_media.php'); ?>	
			
			<h1>Blog</h1>
			
		</div>
	
	</div>
	
	<div class="container">
	
		<div class="row">
		
			<h3 class="blogLine">Fail. Learn. Win &mdash; Repeat</h3>
		
		</div>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
	
		<div class="blogEntry">
		
			<div class="row">
			
				<div class="twelve columns">
				
					<div class="date hide-for-small">
						<div class="month"><?php echo the_time('M'); ?></div>
						<div class="day"><?php echo the_time('d'); ?></div>
						<div class="year"><?php echo the_time('Y'); ?></div>
					</div>
				
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
					
					
					<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($id, 'large'); ?></a>	
					
					<?php the_content('Read more &raquo;'); ?>
					
					<a href="<?php the_permalink() ?>" class="round button">Read more</a>
					
				</div>
			
			</div>
			
		</div>
		
		<?php endwhile; ?>
		
			
	</div>
	
	<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
	<?php page_navi(); // use the page navi function ?>
						
	<?php } ?>
	
	<?php else: ?>
					
	<article id="post-not-found">
	    <header>
	    	<h1>Not Found</h1>
	    </header>
	    <section class="post_content">
	    	<p>Sorry, but the requested resource was not found on this site.</p>
	    </section>
	    <footer>
	    </footer>
	</article>
	
	<?php endif; ?>

</div>

<?php get_footer(); ?>
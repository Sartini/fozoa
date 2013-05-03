<?php
/*
Template Name: Quem Somos
*/
?>
<?php get_header(); ?>
	 
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							<?php 
							  $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
							  $src_url = get_bloginfo('template_directory') . '/timthumb.php?src='. $src[0] . '&w=1313&h=207&zc=0'; 
							 ?>
							<div class="page-header"><h1 class="page-title" itemprop="headline"><img src="<?php echo $src_url; ?>" alt=""></div>

						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							

							<!-- menu latera  -->
							<div class="menulateral">
								MENU LATERAL
							</div>
							
							<div class="lateraldireito">


								<!-- conteúdo da pagina -->
								<div class="titulo">
									<h1><?php the_title(); ?></h1>
								</div>
								<div class="pagecontent">
									 <?php //the_content(); ?>
								</div>

							</div>	
								
							
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					 
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				 
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
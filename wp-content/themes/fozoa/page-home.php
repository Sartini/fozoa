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
        <header>teste</header> <!-- end article header -->

        <section class="post_content clearfix" itemprop="articleBody">
          <!-- menu latera  -->
          <div class="menulateral">
            MENU LATERAL
          </div>
          
          <div class="lateraldireito">
            <!-- conteúdo da pagina -->
            <div class="titulo">
              <h1><?php the_title(); ?></h1>
              <?php $codigo_da_galeria = get_post_meta($post->ID, 'codigo_da_galeria', true); ?>  
            </div>
            <div class="galeria">
              <?php if ( $codigo_da_galeria > 0) : ?>
                <?php do_action('slideshow_deploy', $codigo_da_galeria); ?> 
              <?php endif; ?>
            </div>
            <div class="pagecontenta">
              <p>
               <?php the_content(); ?>
              </p>
            </div>
          </div>  
        </section> <!-- end article section -->

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
      </article>

    <?php endif; ?>
    
    <footer>
      <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
    </footer> <!-- end article footer -->

  </div> <!-- end #main -->    
</div> <!-- end #content -->

<?php get_footer(); ?>
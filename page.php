<?php
// шаблон страницы
$titan = TitanFramework::getInstance( 'agency' );

get_header(); 

$sidebar_loc =  get_post_meta( $post->ID, 'gp_sidebar', true); // отключение сайдбара

?>

<div class="blog-page">
  
  <?php
  // начало цикла
  if ( have_posts() ) : while ( have_posts() ) : the_post();  
  ?>
  
    <div class="blog-page__header">	
      <div class="blog-page__header-wrapper">
        <?php
        // хлебные крошки
        if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
        ?>
        
        <h1 class="single__title"><?php the_title(); ?></h1>
        
      </div><!-- end blog-page__header-wrapper-->
    </div><!-- end blog-page__header-->
     
  <div class="gp-clearfix"></div>


  <div class="port">

    <main class="main-single">
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="post-content" itemprop="articleBody">
          <?php
            // контент записи
            the_content();
          ?>
          </div><!-- end post-content -->

      </article><!-- end article -->
  
    <?php 
    endwhile;  
    endif; 
  
    // комментарии
    if ($titan->getOption( 'com-post-loc' )) { 
      if ( comments_open() ) { 
      comments_template();
    
      if ($titan->getOption( 'com-spoiler-loc' )) { 
            echo '<div id="gp-comments"  class="toggle-comments">&nbsp;</div>';
          }
        }
      }
    ?>

    </main><!-- end main -->

    <?php
      // сайдбар
      gp_sidebar_off( $sidebar_loc);
    ?>
  
  </div><!-- end port -->

</div><!-- end blog-page -->

  <?php
    if ($titan->getOption( 'blog-action-loc' )) {
      // раздел с формой для получения контакта
      get_template_part ('files/front/inner-page-order-form');
    }
  ?>

<?php get_footer(); ?>
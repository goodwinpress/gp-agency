<?php
// шаблон записи
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
 
  <div class="port">
      
    <main class="main-single">
  
      <article id="post-<?php the_ID(); ?>" <?php post_class('gp-single-post'); ?> itemscope itemtype="http://schema.org/Article">
 
          <div class="post-content" itemprop="articleBody">
            <?php
              if ($titan->getOption( 'featured-img-loc' )) {
              // изображение записи
              single_thumbnail();
              }
    
              // контент записи
              the_content();
    
              // панель навигации внутри записи
              wp_link_pages(array('before' => '<div class="post-nav"><p>' . __('Продолжение', 'gp-agency') . ':</p>', 'after' => '</div>', 'next_or_number' => 'number')); 
    
              //микроразметка
              get_template_part ('files/back/microdata');
            ?>
          </div><!-- end post-content -->
  
      </article><!-- end article -->
  
        <?php 
        endwhile;  
        endif; 
        ?>
  
      <div class="blog-page__footer">
          <?php
             //метки
               if ($titan->getOption( 'tags-loc' ) ) {  
                 echo '<span class="gp-post-tags">';
                   the_tags('');  
                 echo '</span> <!-- end gp-post-tags-->';
                } 
          ?>
  
          <?php
            // поделиться в соц. сетях
            if ($titan->getOption( 'single-social-loc' ) == '1') { 
            get_template_part ('files/front/share-btns');
            }
          ?>
  
          <?php 
          // комментарии
          if ($titan->getOption( 'com-post-loc' ) ) { 
            if ( comments_open() ) { 
              comments_template();
              if ($titan->getOption( 'com-spoiler-loc' )) { 
                echo '<div id="gp-comments"  class="toggle-comments">&nbsp;</div>';
              }
            }
          }
          ?>
  
          <?php 
            // Внутренняя навигация 
            post_navigation();
          ?>
          
      </div> <!-- end blog-page__footer -->
  
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
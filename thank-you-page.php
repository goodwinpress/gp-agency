<?php
/*
 Template Name: Cтраница Спасибо
 */
$titan = TitanFramework::getInstance( 'agency' );

get_header(); 

$thankyou_title = $titan->getOption('thankyou-title'); // заголовок страницы
$thankyou_text = $titan->getOption('thankyou-text'); // текст страницы

?>
 
<main class="gp-inner-page"> 

   <div class="gp-inner-page__header">	
    
   <img src="<?php echo get_template_directory_uri(); ?>/img/bg-confetti-white.svg" alt="Спасибо" width="1920" height="400">
    
      <div class="gp-inner-page__header-wrapper">	
       
         <?php
         // хлебные крошки
         if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
         ?>

         <h1 class="gp-inner-page__title"><?php echo $thankyou_title; ?></h1>
       
      </div><!-- end gp-inner-page__header-wrapper -->
   </div><!-- end gp-inner-page__header-->
 
 
   <div class="gp-inner-page__content"> 
      <div class="port"> 
         <?php echo $thankyou_text; ?>
      </div><!-- end port -->
   </div><!-- end gp-inner-page__content -->
    

   <?php
   //выберем, что выводить для удержания посетителей
      if ($titan->getOption( 'thankyou-additions-loc' ) == '1') {
      get_template_part ('homepage-blocks/home-projects');
      }
    
      if ($titan->getOption( 'thankyou-additions-loc' ) == '2') {
      get_template_part ('files/front/recent-posts');
      }
    
      if ($titan->getOption( 'thankyou-additions-loc' ) == '3') {
      echo '<div class="socials__links thp-recent-posts-socials">';
      get_template_part ('files/front/socials');
      echo '</div>';
      }
   ?>

</main><!-- end main -->

<?php get_footer(); ?>
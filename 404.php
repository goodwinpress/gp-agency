<?php
// шаблон 404 ошибки

$titan = TitanFramework::getInstance( 'agency' );

get_header();

$error404_text = $titan->getOption( 'text404' ); // текст на странице 404

?>

<div class="blog-page"> 
 
   <div class="blog-page__header">	
     <div class="blog-page__header-wrapper">
      
      <?php
      // хлебные крошки
      if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
      ?>
      <h1 class="single__title">Упс</h1>
      
     </div><!-- end blog-page__header-wrapper-->
   </div><!-- end blog-page__header-->
     

  <div class="port">
    <main class="main-single">
      <div class="post-content">
        <?php echo $error404_text; ?>
      </div> 
    </main><!-- end main -->
  </div><!-- end port -->
  
</div><!-- end blog-page -->

   
<?php
  // раздел с формой для получения контакта
  get_template_part ('files/front/inner-page-order-form');
?>

<?php get_footer(); ?>
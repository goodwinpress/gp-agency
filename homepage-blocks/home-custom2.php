<?php
// раздел Главной страницы - Произвольный контент 2
$titan = TitanFramework::getInstance( 'agency' ); 

// получаем данные из консоли темы
$custom_content2_title = $titan->getOption( 'custom2-title' ); // заголовок
$custom_content2 = $titan->getOption( 'custom2-text' ); // произвольный контент

?>

<div class="home-custom-section"> 
    <div class="port"> 
        <h2 class="home-section__title"><?php echo $custom_content2_title; ?></h2>
        <?php echo do_shortcode( $custom_content2 ); ?>
     </div><!-- end port -->  
</div><!-- end home-custom-section -->
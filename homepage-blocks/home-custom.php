<?php
// раздел Главной страницы - Произвольный контент 1
$titan = TitanFramework::getInstance( 'agency' ); 

// получаем данные из консоли темы
$custom_content1_title = $titan->getOption( 'custom1-title' ); // заголовок
$custom_content1 = $titan->getOption( 'custom1-text' ); // произвольный контент
?>
<div class="home-custom-section"> 
    <div class="port"> 
        <h2 class="home-section__title"><?php echo $custom_content1_title; ?></h2>
        <?php echo do_shortcode( $custom_content1 ); ?>
    </div><!-- end port -->  
</div><!-- end home-custom-section -->
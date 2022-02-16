<?php
// раздел Главной страницы - видео и текст
$titan = TitanFramework::getInstance( 'agency' ); 

$video = $titan->getOption( 'video-code' ); // код видео
$video_subtitle = $titan->getOption( 'video-subtitle' ); // подзаголовок
$video_text = $titan->getOption( 'video-text' ); // текст блока

?>
   
<div class="home-video-section"> 

    <div class="port">  
     <figure><?php echo $video; ?></figure>
    </div><!-- end port -->   
    
    <div class="port"> 
        <h2 class="home-section__title"><?php echo $video_subtitle; ?></h2>
        <?php 
        // поддержка шорткодов
        echo do_shortcode( $video_text );
        ?>
    </div><!-- end port -->  

</div><!-- end home-video-section -->
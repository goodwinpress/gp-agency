<?php
// раздел Главной страницы - Отзывы
$titan = TitanFramework::getInstance( 'agency' ); 

// получаем данные из консоли темы
$home_feedback_title = $titan->getOption( 'feedback-title' ); // заголовок раздела
$url_text = __('Ссылка на объект в портфолио', 'gp-agency'); // текст в ссылке

$feedback1_img = $titan->getOption( 'feedback1-img' ); // заголовок отзыва
$feedback1_name = $titan->getOption( 'feedback1-name' ); // имя клиента
$feedback1_sub = $titan->getOption( 'feedback1-subtext' ); // тип объекта
$feedback1_text = $titan->getOption( 'feedback1-text' ); // текст отзыва
$feedback1_url = $titan->getOption( 'feedback1-url' ); // ссылка на портфолио

$feedback2_img = $titan->getOption( 'feedback2-img' ); 
$feedback2_name = $titan->getOption( 'feedback2-name' ); 
$feedback2_sub = $titan->getOption( 'feedback2-subtext' );
$feedback2_text = $titan->getOption( 'feedback2-text' );
$feedback2_url = $titan->getOption( 'feedback2-url' );

$feedback3_img = $titan->getOption( 'feedback3-img' ); 
$feedback3_name = $titan->getOption( 'feedback3-name' ); 
$feedback3_sub = $titan->getOption( 'feedback3-subtext' );
$feedback3_text = $titan->getOption( 'feedback3-text' );
$feedback3_url = $titan->getOption( 'feedback3-url' );

$feedback4_img = $titan->getOption( 'feedback4-img' ); 
$feedback4_name = $titan->getOption( 'feedback4-name' ); 
$feedback4_sub = $titan->getOption( 'feedback4-subtext' );
$feedback4_text = $titan->getOption( 'feedback4-text' );
$feedback4_url = $titan->getOption( 'feedback4-url' );

$feedback5_img = $titan->getOption( 'feedback5-img' ); 
$feedback5_name = $titan->getOption( 'feedback5-name' ); 
$feedback5_sub = $titan->getOption( 'feedback5-subtext' );
$feedback5_text = $titan->getOption( 'feedback5-text' );
$feedback5_url = $titan->getOption( 'feedback5-url' );

$feedback6_img = $titan->getOption( 'feedback6-img' ); 
$feedback6_name = $titan->getOption( 'feedback6-name' ); 
$feedback6_sub = $titan->getOption( 'feedback6-subtext' );
$feedback6_text = $titan->getOption( 'feedback6-text' );
$feedback6_url = $titan->getOption( 'feedback6-url' );

$feedback7_img = $titan->getOption( 'feedback7-img' ); 
$feedback7_name = $titan->getOption( 'feedback7-name' ); 
$feedback7_sub = $titan->getOption( 'feedback7-subtext' );
$feedback7_text = $titan->getOption( 'feedback7-text' );
$feedback7_url = $titan->getOption( 'feedback7-url' );

$feedback8_img = $titan->getOption( 'feedback8-img' ); 
$feedback8_name = $titan->getOption( 'feedback8-name' ); 
$feedback8_sub = $titan->getOption( 'feedback8-subtext' );
$feedback8_text = $titan->getOption( 'feedback8-text' );
$feedback8_url = $titan->getOption( 'feedback8-url' );
?>
  
<div class="home-feedback-section"> 
 
    <h2 class="home-section__title"><?php echo $home_feedback_title; ?></h2>
    
    <div class="flex-port">  
         
    <div class="feedback-item" 
     <?php 
     // добавляем картинку в фон ячейки
     $imgID = $feedback1_img; 
     gp_poster_img($imgID); 
     ?>>
     <div class="flex-port">
        <div class="feedback-content">
        <?php
        // имя и тип объекта
        echo '<span class="feedback-item__name">'. $feedback1_name .'</span>';
        echo '<span class="feedback-item__type">' . $feedback1_sub . '</span>';
        // текст отзыва
        echo $feedback1_text;
        if ( ! empty ($feedback1_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback1_url . '">' . $url_text .' &raquo;</a>';
        }
        ?>
        </div><!-- end feedback-content -->
        </div><!-- end flex port -->
          
        </div><!-- end feedback-item 1 -->
        
      
      <div class="feedback-item" 
     <?php 
     // добавляем картинку в фон ячейки
     $imgID = $feedback2_img; 
     gp_poster_img($imgID); 
     ?>>
     <div class="flex-port">
        <div class="feedback-content">
        <?php
        // имя и тип объекта
        echo '<span class="feedback-item__name">'. $feedback2_name .'</span>';
        echo '<span class="feedback-item__type">' . $feedback2_sub . '</span>';
        // текст отзыва
        echo $feedback2_text;
        if ( ! empty ($feedback2_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback2_url . '">' . $url_text .' &raquo;</a>';
        }
        ?>
        </div><!-- end feedback-content -->
        </div><!-- end flex port -->
          
        </div><!-- end feedback-item 2 -->
  
        
        <?php if ($titan->getOption('feedback3-loc') == '1') { ?>
         <div class="feedback-item" 
         <?php 
         // добавляем картинку в фон ячейки
         $imgID = $feedback3_img; 
         gp_poster_img($imgID); 
         ?>>
         
         <div class="flex-port">
         <div class="feedback-content">
         <?php
         // имя и тип объекта
         echo '<span class="feedback-item__name">'. $feedback3_name .'</span>';
         echo '<span class="feedback-item__type">' . $feedback3_sub . '</span>';
         // текст отзыва
         echo $feedback3_text;
         if ( ! empty ($feedback3_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback3_url . '">' . $url_text .' &raquo;</a>';
        }
         ?>
         </div><!-- end feedback-content -->
         </div><!-- end flex port -->
           
         </div><!-- end feedback-item 3 -->
        <?php } ?>  
        
        
        <?php if ($titan->getOption('feedback4-loc') == '1') { ?>
        <div class="feedback-item" 
        <?php 
        // добавляем картинку в фон ячейки
        $imgID = $feedback4_img; 
        gp_poster_img($imgID); 
        ?>>
        
        <div class="flex-port">
        <div class="feedback-content">
        <?php
        // имя и тип объекта
        echo '<span class="feedback-item__name">'. $feedback4_name .'</span>';
        echo '<span class="feedback-item__type">' . $feedback4_sub . '</span>';
        // текст отзыва
        echo $feedback4_text;
        if ( ! empty ($feedback4_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback4_url . '">' . $url_text .' &raquo;</a>';
        }
        ?>
        </div><!-- end feedback-content -->
        </div><!-- end flex port -->
          
        </div><!-- end feedback-item 4 -->
         <?php } ?> 
        
        
        <?php if ($titan->getOption('feedback5-loc') == '1') { ?>
        <div class="feedback-item" 
        <?php 
        // добавляем картинку в фон ячейки
        $imgID = $feedback5_img; 
        gp_poster_img($imgID); 
        ?>>
        
        <div class="flex-port">
        <div class="feedback-content">
        <?php
        // имя и тип объекта
        echo '<span class="feedback-item__name">'. $feedback5_name .'</span>';
        echo '<span class="feedback-item__type">' . $feedback5_sub . '</span>';
        // текст отзыва
        echo $feedback5_text;
        if ( ! empty ($feedback5_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback5_url . '">' . $url_text .' &raquo;</a>';
        }
        ?>
        </div><!-- end feedback-content -->
        </div><!-- end flex port -->
          
        </div><!-- end feedback-item 5 -->
         <?php } ?> 
         
        
        <?php if ($titan->getOption('feedback6-loc') == '1') { ?>
        <div class="feedback-item" 
        <?php 
        // добавляем картинку в фон ячейки
        $imgID = $feedback6_img; 
        gp_poster_img($imgID); 
        ?>>
        
        <div class="flex-port">
        <div class="feedback-content">
        <?php
        // имя и тип объекта
        echo '<span class="feedback-item__name">'. $feedback6_name .'</span>';
        echo '<span class="feedback-item__type">' . $feedback6_sub . '</span>';
        // текст отзыва
        echo $feedback6_text;
        if ( ! empty ($feedback6_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback6_url . '">' . $url_text .' &raquo;</a>';
        }
        ?>
        </div><!-- end feedback-content -->
        </div><!-- end flex port -->
          
        </div><!-- end feedback-item 6 -->
         <?php } ?>  
        
        
        <?php if ($titan->getOption('feedback7-loc') == '1') { ?>
        <div class="feedback-item" 
        <?php 
        // добавляем картинку в фон ячейки
        $imgID = $feedback7_img; 
        gp_poster_img($imgID); 
        ?>>
        
        <div class="flex-port">
        <div class="feedback-content">
        <?php
        // имя и тип объекта
        echo '<span class="feedback-item__name">'. $feedback7_name .'</span>';
        echo '<span class="feedback-item__type">' . $feedback7_sub . '</span>';
        // текст отзыва
        echo $feedback7_text;
        if ( ! empty ($feedback7_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback7_url . '">' . $url_text .' &raquo;</a>';
        }
        ?>
        </div><!-- end feedback-content -->
        </div><!-- end flex port -->
          
        </div><!-- end feedback-item 7 -->
        <?php } ?> 
        
        <?php if ($titan->getOption('feedback8-loc') == '1') { ?>
        <div class="feedback-item" 
        <?php 
        // добавляем картинку в фон ячейки
        $imgID = $feedback8_img; 
        gp_poster_img($imgID); 
        ?>>
        
        <div class="flex-port">
        <div class="feedback-content">
        <?php
        // имя и тип объекта
        echo '<span class="feedback-item__name">'. $feedback8_name .'</span>';
        echo '<span class="feedback-item__type">' . $feedback8_sub . '</span>';
        // текст отзыва
        echo $feedback8_text;
        if ( ! empty ($feedback8_url)) {
        echo '<a class="feedback-item__url" href="'. $feedback8_url . '">' . $url_text .' &raquo;</a>';
        }
        ?>
        </div><!-- end feedback-content -->
        </div><!-- end flex port -->
          
        </div><!-- end feedback-item 8 -->
        <?php } ?> 
         
    </div><!-- end port -->  
  
</div><!-- end home-feedback-section -->
<?php
// поп-ап в постере
$titan = TitanFramework::getInstance( 'agency' );

// получаем данные из консоли темы
$popup_title = $titan->getOption('poster-popup-title');// заголовок поп-апа
$popup_form = $titan->getOption('poster-popup-form'); // шорткод формы
$policy_url = $titan->getOption( 'policy-url' );  // ссылка на политику

$policy_anchor = __('Я даю согласие на сбор и обработку персональных данных', 'gp-agency'); // ссылка на политику конфиденциальности
$policy_name = __('Политика конфиденциальности', 'gp-agency'); // ссылка на политику конфиденциальности
 
?>

<div class="popup" id="popup-order">
  <span class="pop-title"><?php echo $popup_title; ?></span>
  <?php 
    // форма из Contact Form 7
     echo do_shortcode( $popup_form );

    // персональные данные
    if ($titan->getOption( 'agree-loc' ) == '1') { 
    echo '<div class="popup__personal-data-warning">';
    echo '<label for="check">' . $policy_anchor . '.<br /><a href="' . $policy_url .'">' . $policy_name . ' &raquo;</a></label></div>';
    }
  ?>
    <button class="close"></button>
</div><!-- end popup  -->
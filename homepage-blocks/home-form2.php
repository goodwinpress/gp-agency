<?php
// раздел Главной - Форма 2
$titan = TitanFramework::getInstance( 'agency' );

$form2_title = $titan->getOption('form2-title'); // заголовок
$form2_code = $titan->getOption('form2-shortcode'); // шорткод формы
$policy_url = $titan->getOption( 'policy-url' ); // политика конфиденциальности

$policy_anchor = __('Я даю согласие на сбор и обработку персональных данных', 'gp-agency'); // ссылка на политику конфиденциальности
$policy_name = __('Политика конфиденциальности', 'gp-agency'); // ссылка на политику конфиденциальности

?>

 <div class="home-action-section last-section"> 
   <div class="home-action__wrapper"> 
	   
		<span class="home-action__title"><?php echo $form2_title; ?></span>
	  
		<?php
			// форма contact form 7
			echo do_shortcode( $form2_code );
			 
			 // персональные данные
			 if ($titan->getOption( 'agree-loc' ) == '1') {   
			 echo '<div class="personal-data-warning"><input type="checkbox" class="custom-checkbox" id="wpcf7-checkbox2"  name="check" checked>';
			 echo '<label for="check">' . $policy_anchor . '. <a href="'. $policy_url .'">' . $policy_name . ' &raquo;</a></label></div>';
			}
	    ?>

	 </div><!-- end home-action__wrapper -->
</div><!-- end home-action-section -->
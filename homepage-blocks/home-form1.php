<?php
// раздел Главной - Форма 1
$titan = TitanFramework::getInstance( 'agency' );

$form1_title = $titan->getOption('form1-title'); // заголовок раздела
$form1_code = $titan->getOption('form1-shortcode'); // шорткод формы
$policy_url = $titan->getOption( 'policy-url' ); // ссылка на политику конфиденциальности
$policy_anchor = __('Я даю согласие на сбор и обработку персональных данных', 'gp-agency'); // ссылка на политику конфиденциальности
$policy_name = __('Политика конфиденциальности', 'gp-agency'); // ссылка на политику конфиденциальности
?>

<div class="home-action-section"> 
	<div class="home-action__wrapper"> 
		
	<span class="home-action__title"><?php echo $form1_title; ?></span>
	
	<?php
		// форма contact form 7
		echo do_shortcode( $form1_code );
		
		// персональные данные
	   if ($titan->getOption( 'agree-loc' ) == '1') {
		echo '<div class="personal-data-warning"><input type="checkbox" class="custom-checkbox" id="wpcf7-checkbox"  name="check" checked>';
		echo '<label for="check">' .  $policy_anchor  . '. <a href="'. $policy_url .'">' . $policy_name . ' &raquo;</a></label></div>';
	 }
	?>
	
	</div><!-- end home-action__wrapper -->
</div><!-- end home-action-section -->
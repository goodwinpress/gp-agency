 <?php
 // блок для сбора контактов на внутренних страницах
$titan = TitanFramework::getInstance( 'agency' );
 
 $action_title = $titan->getOption('call-to-action-title');
 $action_text = $titan->getOption('call-to-action-text');
 $action_form = $titan->getOption('call-to-action-form');
 $policy_url = $titan->getOption( 'policy-url' );  
 
 $policy_anchor = __('Я даю согласие на сбор и обработку персональных данных', 'gp-agency'); // ссылка на политику конфиденциальности
 $policy_name = __('Политика конфиденциальности', 'gp-agency'); // ссылка на политику конфиденциальности
 
 ?>
 
 <div id="toform" class="home-action-section last-section single-action"> 
   <div class="home-action__wrapper"> 
	 <span class="home-action__title"><?php echo  $action_title; ?></span>
   <p class="home-action__desc"><?php echo  $action_text; ?></p>
  
	 <?php
	 // форма contact form 7
	 echo do_shortcode(  $action_form );
	 
// персональные данные
if ($titan->getOption( 'agree-loc' ) == '1') {   
	 echo '<div class="personal-data-warning"><input type="checkbox" class="custom-checkbox" id="wpcf7-checkbox2"  name="check" checked>';
	 echo '<label for="check">' . $policy_anchor . '. <a href="'. $policy_url .'">' . $policy_name . ' &raquo;</a></label></div>';
	}
 ?>
  
	 </div><!-- end home-action__wrapper -->
</div><!-- end home-action-section -->
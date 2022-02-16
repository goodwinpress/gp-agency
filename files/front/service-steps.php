<?php
// раздел Пошаговый процесс на странице Услуги
$titan = TitanFramework::getInstance( 'agency' );

$service_steps_title = $titan->getOption('service-steps-title'); // заголовок блока 

$service1_title = $titan->getOption('step1-title'); // заголовок шага
$service1_text = $titan->getOption('step1-text'); // содержимое шага
$service2_title = $titan->getOption('step2-title');
$service2_text = $titan->getOption('step2-text');
$service3_title = $titan->getOption('step3-title');
$service3_text = $titan->getOption('step3-text');
$service4_title = $titan->getOption('step4-title');
$service4_text = $titan->getOption('step4-text');
$service5_title = $titan->getOption('step5-title');
$service5_text = $titan->getOption('step5-text');
$service6_title = $titan->getOption('step6-title');
$service6_text = $titan->getOption('step6-text');
$service7_title = $titan->getOption('step7-title');
$service7_text = $titan->getOption('step7-text');
$service8_title = $titan->getOption('step8-title');
$service8_text = $titan->getOption('step8-text');
?>

 <div class="gp-inner-page__content">	
<h2 class="inner-page__title"><?php echo $service_steps_title; ?></h2>
	 
	<div class="port">
	
		<ul class="steps-item__list flex-port">
		 
		<?php if( !empty ($service1_title)) { ?>
			<li>
				<span class="steps-item__title"><?php echo $service1_title; ?></span>
				<p><?php echo $service1_text ?></p>
			</li>
		<?php } ?>
		
		<?php if( !empty ($service2_title)) { ?>
		<li>
			<span class="steps-item__title"><?php echo $service2_title; ?></span>
			<p><?php echo $service2_text ?></p>
		</li>
		<?php } ?>
		
		<?php if( !empty ($service3_title)) { ?>
		<li>
			<span class="steps-item__title"><?php echo $service3_title; ?></span>
			<p><?php echo $service3_text ?></p>
		</li>
		<?php } ?>
		
		<?php if( !empty ($service4_title)) { ?>
		<li>
			<span class="steps-item__title"><?php echo $service4_title; ?></span>
			<p><?php echo $service4_text ?></p>
		</li>
		<?php } ?>
		
		<?php if( !empty ($service5_title)) { ?>
		<li>
			<span class="steps-item__title"><?php echo $service5_title; ?></span>
			<p><?php echo $service5_text ?></p>
		</li>
		<?php } ?>
		
		<?php if( !empty ($service6_title)) { ?>
		<li>
			<span class="steps-item__title"><?php echo $service6_title; ?></span>
			<p><?php echo $service6_text ?></p>
		</li>
		<?php } ?>
		
		<?php if( !empty ($service7_title)) { ?>
		<li>
			<span class="steps-item__title"><?php echo $service7_title; ?></span>
			<p><?php echo $service7_text ?></p>
		</li>
		<?php } ?>
		
		<?php if( !empty ($service8_title)) { ?>
		<li>
			<span class="steps-item__title"><?php echo $service8_title; ?></span>
			<p><?php echo $service8_text ?></p>
		</li>
		<?php } ?>
		
		</ul> <!-- end  steps-item__list flex port  -->
	
	</div><!-- end  port flex port  -->

</div><!-- end  gp-inner-page__content  -->
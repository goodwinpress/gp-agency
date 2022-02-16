 <?php
// раздел с табами (вкладками) на странице Услуги
$titan = TitanFramework::getInstance( 'agency' );

$tab1_title = $titan->getOption('tab1-title'); // заголовок таба
$tab1_text = $titan->getOption('tab1-text'); // содержимое таба, поддерживает шорткоды
$tab2_title = $titan->getOption('tab2-title');
$tab2_text = $titan->getOption('tab2-text');
$tab3_title = $titan->getOption('tab3-title');
$tab3_text = $titan->getOption('tab3-text');
$tab4_title = $titan->getOption('tab4-title');
$tab4_text = $titan->getOption('tab4-text'); 
 ?>

 <div class="gp-inner-page__content"> 
	<div class="port">
	
		
		<div class="tabs">
			<ul>
			  <li><a href="#tab1" class="tab1" data-toggle="tab"><?php echo $tab1_title; ?></a></li>
			  <li><a href="#tab2" class="tab2" data-toggle="tab"><?php echo $tab2_title; ?></a></li>
			  <li><a href="#tab3" class="tab3" data-toggle="tab"><?php echo $tab3_title; ?></a></li>
			  <li><a href="#tab4" class="tab4" data-toggle="tab"><?php echo $tab4_title; ?></a></li>
			</ul>
			
			</div><!-- end tabs -->
			  
		 <div class="tab-content">
		
			 <div id="tab1" class="tabs-post">
				<?php echo do_shortcode( $tab1_text ); ?>
			</div><!-- end tab 1 -->
				
			<div id="tab2" class="tabs-post">
			<?php echo do_shortcode( $tab2_text ); ?>
			</div><!-- end tab 2 -->	 
			
			<div id="tab3" class="tabs-post">
			<?php echo do_shortcode( $tab3_text ); ?>
			</div><!-- end tab 3 -->
				
			<div id="tab4" class="tabs-post">
			<?php echo do_shortcode( $tab4_text ); ?>
			</div><!-- end tab 4 -->
				
		</div><!-- end tab-content -->
	
	
	</div><!-- end  port  -->
		
</div><!-- end gp-inner-page__content  -->
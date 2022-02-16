<?php
// раздел Главной страницы - Постер
$titan = TitanFramework::getInstance( 'agency' ); 

// получаем данные из консоли темы
$poster_img = $titan->getOption( 'poster-img' ); // изображение постера
$offer = $titan->getOption( 'poster-offer' ); // оффер
$description = $titan->getOption('poster-desc'); // текст постера
$button_text = $titan->getOption('poster-btn-text'); // текст на кнопке
$button_url = $titan->getOption('poster-btn-url'); // ссылка с кнопки

?>

<div class="home-top-section"> 
	<div class="flex-port"> 
		
		<div class="home-top-section__text">
			<div class="home-top-section__wrapper">
				
				<h1 class="home-top-section__title"><?php echo $offer; ?></h1> 
				<p><?php echo $description; ?></p>
				
				<?php 
				// выбираем, либо ссылка, либо поп-ап
				if ($titan->getOption( 'poster-btn-type' ) == '1') { ?>
					<a class="gp-button" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
					<?php } else { ?>
					<button class="gp-button open_modal" rel="popup-order"><?php echo $button_text; ?></button>
				<?php } ?>
				
			</div><!-- end home-top-section__wrapper -->
				
			<?php
				if ($titan->getOption( 'poster-btn-type' ) == '2') {  
				// поп-ап на кнопке в Постере
				get_template_part ('files/front/poster-popup');
				}
			?>
				
			<?php
			// социальные сети
			if ($titan->getOption( 'poster-socials-loc' ) == '1') {    
				echo '<div class="socials__links home-top-socials">';
				get_template_part ('files/front/socials');
				echo '</div>';
			} 
			?>
			
		</div><!-- end home-top-section__text -->
		
		<div class="home-top-section__image" <?php $imgID = $poster_img; gp_poster_img($imgID); ?>>
		</div><!-- end home-top-section__image -->
		
	</div><!-- end flex-port -->
</div><!-- end home-top-section -->
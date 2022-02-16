<?php
/*
 Template Name: Cтраница Контакты
 */
$titan = TitanFramework::getInstance( 'agency' );

get_header(); 

$contact_page_img = $titan->getOption('contact-page-img'); // изображение в шапке страницы
$contact_page_title = $titan->getOption('contact-page-title'); // заголовок страницы

$profile_name = $titan->getOption('profile-name'); // название огранизации
$profile_type = $titan->getOption('profile-type'); // форма собственности
$profile_city = $titan->getOption('profile-city'); // населенный пункт
$profile_adress = $titan->getOption('profile-adress'); // адрес
$profile_phone1 = $titan->getOption('profile-phone-1'); // телефон
$profile_phone2 = $titan->getOption('profile-phone-2'); // телефон 2
$business_time = $titan->getOption('business-shedule'); // график будни
$weekend_time = $titan->getOption('weekend-shedule'); // график выходные
$contact_page_map = $titan->getOption('contact-page-map'); // карта

?>
 
<main class="gp-inner-page"> 
		
	<div class="gp-inner-page__header">	
		
		<?php
			// изображение в шапке страницы
			$imageID = $contact_page_img;
			gp_inner_page_img($imageID);
		?>
 
		<div class="gp-inner-page__header-wrapper">	
	 
			<?php
			// хлебные крошки
			if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
			?>
				
			<h1 class="gp-inner-page__title"><?php echo $contact_page_title; ?></h1>
	 
		</div><!-- end gp-inner-page__header-wrapper -->
			
</div><!-- end gp-inner-page__header-->
 
 
 
<div class="gp-inner-page__content">
	
	<div class="port flex-port">
			
		<div class="contact-page__map">
			<?php echo $contact_page_map; ?>
		</div><!-- end contact-page__map-->
		 
		<div class="contact-page__info">
			
			<span class="contact-page__company"><em><?php echo $profile_type; ?></em>
			<?php echo $profile_name; ?></span>  
			
			<span class="contact-page__adress"><em><?php _e('Адрес', 'gp-agency'); ?></em>
			<?php echo $profile_city; ?>, <?php echo $profile_adress; ?></span>
			
			<span class="contact-page__phone1"><em><?php _e('Звоните', 'gp-agency'); ?></em>
			<?php 
				$vars = array('(', ')', ' ','-');
				echo '<a href="tel:'.str_replace($vars, '', $profile_phone1).'">' . $profile_phone1 . '</a>';
			?>
		    </span>
			
			<span class="contact-page__phone2"><em><?php _e('Звоните', 'gp-agency'); ?></em>
			<?php 
				echo '<a href="tel:'.str_replace($vars, '', $profile_phone2).'">' . $profile_phone2 . '</a>';
			?>
			</span>
			
			<span class="contact-page__mail"><em><?php _e('График работы', 'gp-agency'); ?></em>
			<?php _e('пн - пт', 'gp-agency'); ?> : <?php echo $business_time; ?>, <?php _e('сб-вс', 'gp-agency'); ?> : <?php echo $weekend_time; ?></span>
		
			<?php
			// социальные сети
			if ($titan->getOption( 'contact-page-socials-loc' )) {  
				echo '<div class="contact-page__socials"><em>' .  __('Мы в социальных сетях', 'gp-agency') . '</em>';
				echo '<div class="socials__links">';
				get_template_part ('files/front/socials');
				echo '</div></div>';
				} 
			?>
			
		</div><!-- end contact-page__info -->
				
	</div><!-- end flex port -->
 
</div><!-- end gp-inner-page__content -->
	 
	 
<div class="gp-inner-page__content"> 
	<div class="port">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();  
			 
			// контент страницы
			the_content();
			 
			endwhile;  
			endif; 
		?>
	</div><!-- end  port -->
</div><!-- end gp-inner-page__content -->
 

</main><!-- end main -->

	<?php
		if ($titan->getOption( 'contact-page-action-loc' )) {
			// раздел с формой для получения контакта
			get_template_part ('files/front/inner-page-order-form');
		}
	?>

<?php get_footer(); ?>
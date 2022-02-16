<?php
/*
Template Name: Страница Услуги
*/
$titan = TitanFramework::getInstance( 'agency' );

get_header(); 

$service_page_img = $titan->getOption('service-page-img'); // изображение в шапке страницы
$service_page_title = $titan->getOption('service-page-title'); // заголовок страницы

?>
 
<main class="gp-inner-page"> 

	<div class="gp-inner-page__header">	
		
		<?php
			// изображение в шапке страницы
			$imageID = $service_page_img;
			gp_inner_page_img($imageID);
		?>
		 
		<div class="gp-inner-page__header-wrapper">	
			
		<?php
			// хлебные крошки
			if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
		?>
		
		<h1 class="gp-inner-page__title"><?php echo $service_page_title; ?></h1>
		
		</div><!-- end gp-inner-page__header-wrapper -->
	</div><!-- end gp-inner-page__header-->
 
 
	<?php
		// выводим блоки страницы Услуг
		 $service_blocks = $titan->getOption('service_page_items');
		 foreach ($service_blocks as $block) {
			 get_template_part('files/front/service', $block);
		 }
	?>
 
	<div class="gp-inner-page__content">

		<div class="port">
			<?php the_content(); ?>
		</div><!-- end  port  -->
	 
	</div><!-- end gp-inner-page__content  -->

</main><!-- end main -->

	<?php
		if ($titan->getOption( 'services-action-loc' )) {
			// раздел с формой для получения контакта
			get_template_part ('files/front/inner-page-order-form');
		}
	?>

<?php get_footer(); ?>
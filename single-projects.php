<?php
// архивная динамическая страница, витрина проектов, портфолио
$titan = TitanFramework::getInstance( 'agency' );

get_header();

// получаем данные из метабоксов
$square = get_post_meta($post->ID, 'square', true);  // площадь
$budget = get_post_meta($post->ID, 'budget', true);  // бюджет
$attr1 = get_post_meta($post->ID, 'attr1', true); // произвольный атрибут 1
$attr2 = get_post_meta($post->ID, 'attr2', true); // произвольный атрибут 2
?>
 
<main class="gp-inner-page"> 
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
	
		<div class="gp-inner-page__header">	
			
			<?php
			// изображение в шапке проекта
			single_project_header_img();
			?>
			
			<div class="gp-inner-page__header-wrapper">	
				<?php
				// хлебные крошки
				if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
				?>
				
				<?php
				// заголовок
				the_title( sprintf( '<h1 class="gp-inner-page__title" itemprop="headline">', esc_url( get_permalink() ) ), '</h1>' ); 
				?>
				 
			</div><!-- end gp-inner-page__header-wrapper -->
				
		</div><!-- end gp-inner-page__header-->
	 
		<div class="gp-inner-page__content last-section" itemprop="articleBody">
			
			<div class="port">
	 			<?php
					// атрибуты проекта
					if ($titan->getOption( 'single-project-vars-loc' )) { ?>
					
					<ul class="project-item__details">
					<li><?php echo __('Площадь', 'gp-agency') .': ' . $square . ' м²'; ?></li>
					<li><?php echo __('Бюджет', 'gp-agency') .': ' . $budget; ?></li>
					<li><?php echo $attr1; ?></li>
					<li><?php echo $attr2; ?></li>	
					</ul><!-- end project-item__details -->	 
						
				<?php } ?>
						  
				<?php
					// контент 
					the_content();
					
					//микроразметка
					get_template_part ('files/back/microdata');
				?>
				
				<?php 
				// Внутренняя навигация 
				post_navigation();
			  ?>
						
			</div><!-- end  port  -->
				
		</div><!-- end gp-inner-page__content -->	 
			
			
	
	</article><!-- end article -->

<?php 
endwhile;  
endif; 
?>



</main><!-- end main -->


	<?php
		if ($titan->getOption( 'single-project-action-loc' )) {
			// раздел с формой для получения контакта
			get_template_part ('files/front/inner-page-order-form');
		}
	?>

<?php get_footer(); ?>
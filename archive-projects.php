<?php
// архивная динамическая страница, витрина проектов, портфолио
$titan = TitanFramework::getInstance( 'agency' );

get_header(); 

// получаем данные из консоли
$projects_archive_img = $titan->getOption('projects-archive-img'); // изображение в шапке
$projects_archive_title = $titan->getOption('projects-archive-title'); // заголовок страницы
$projects_custom_text = $titan->getOption('projects_custom_text'); // произвольный контент

?>
 
<main class="gp-inner-page"> 
	
	<div class="gp-inner-page__header">	
		<?php
			// изображение в шапке страницы
			$imageID = $projects_archive_img;
			gp_inner_page_img($imageID);
			?>
		
		<div class="gp-inner-page__header-wrapper">	
			<?php
			// хлебные крошки
			if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
			?>
			<h1 class="gp-inner-page__title"><?php echo $projects_archive_title; ?></h1>
			 
		</div><!-- end gp-inner-page__header-wrapper -->
	</div><!-- end gp-inner-page__header-->


	<div class="gp-inner-page__content"> 
		<div class="port"> 
			<?php
				// произвольный контент с поддержкой шорткодов
				echo do_shortcode( $projects_custom_text );
			?>
		</div><!-- end port -->
	</div><!-- end gp-inner-page__content -->
 
 
	<div class="gp-inner-page__content last-section"> 
		<div class="port flex-port">
			
		<?php
		// начало цикла
		if ( have_posts() ) : while ( have_posts() ) : the_post();  
		?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('project-archive__item'); ?> itemscope itemtype="http://schema.org/Article">
			
				<div class="project-archive-item__thumb">
					<?php
					// Изображение проекта	
					project_item_img();	
				   
				   // заголовок
				    the_title( sprintf( '<h2 class="project-archive-item__title" itemprop="headline"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</div><!-- end project-archive-item__thumb -->
			
				<div itemprop="articleBody">
						 
					<?php  if ($titan->getOption( 'projects-budget-loc' )) { ?>
						<span class="project-archive-item__estimate">
							<?php 
							// бюджет проекта
							$budget = get_post_meta($post->ID, 'budget', true);  
								if( ! empty( $budget) )  {
									echo __('Бюджет', 'gp-agency') .': &nbsp; ' . $budget; 
								}
							?>
						 </span>
					<?php } ?>
				
					<?php 
						if ($titan->getOption( 'projects-desc-loc' )) {
							// короткое описание проекта
							$description = get_post_meta($post->ID, 'description', true); 
							if( ! empty( $description) )  {
							echo  $description; 
							}
						}
					?>
				</div><!-- end articleBody -->
		
			<?php
				//микроразметка
				get_template_part ('files/back/microdata');
			?>
					
		</article><!-- end article -->

		<?php 
		endwhile;  
		endif; 
		?>
				
		</div><!-- end flex port  -->
	
	</div><!-- end gp-inner-page__content -->
		
</main><!-- end main -->

	<?php
		if ($titan->getOption( 'project-action-loc' )) {
			// раздел с формой для получения контакта
			get_template_part ('files/front/inner-page-order-form');
		}
	?>

<?php get_footer(); ?>
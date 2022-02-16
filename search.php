<?php
// шаблон архива рубрик, меток
$titan = TitanFramework::getInstance( 'agency' );

get_header(); 
 
?>
<div class="blog-page"> 
		 
	<div class="blog-page__header">	  
		<?php
		// хлебные крошки
		if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
		?>
		<h1 class="blog-page__title"><?php _e('Вы искали', 'gp-agency'); ?>: <?php the_search_query(); ?> </h1>
		<span class="search-desc"><?php _e( 'Найдено публикаций', 'gp-agency' ); ?>: &nbsp; <?php echo $wp_query->found_posts; ?></span>
	</div><!-- end blog-page__header-->


	<div class="port">
		
		<main class="main"> 
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  
		 
			get_template_part ('files/front/search-anons'); 
			  
			endwhile; 
			else :  
			echo '<p>' . __( 'По вашему запросу ничего не найдено. Попробуйте изменить запрос и поискать снова', 'gp-agency' ) . ' </p>';
			 endif; 
			?>
			  
			<div class="gp-clearfix"></div>
			   
			<?php  
			  gp_search_pagination();
			?>
		</main><!-- end main -->
			
	  <?php 
	   get_sidebar();
	  ?>
  
  	</div><!-- end port -->
		  
</div><!-- end blog-page -->

	<?php
		// раздел с формой для получения контакта
		get_template_part ('files/front/inner-page-order-form');
	?>

<?php get_footer(); ?>
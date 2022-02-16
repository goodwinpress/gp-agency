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
		 
		// заголовок
		the_archive_title( '<h1 class="blog-page__title">', '</h1>' );
		 
		// описание архива
		$desc = get_the_archive_description();
		if( ! empty(  $desc) )  {
		echo '<div class="archive-description">' .  $desc  . '</div>';
		}
		?>
		 
	</div><!-- end blog-page__header-->

	<div class="port">
		<main class="main"> 
		 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  
			  
				// выбираем тип записей
				if ($titan->getOption( 'blog-type' ) == '1') {
				get_template_part ('files/front/blog-anons'); 
				} else {
				get_template_part ('files/front/blog-regular'); 
			  }
			  
			endwhile; 
			else :  
			echo '<p>' . __( 'На сайте пока нет записей', 'gp-agency' ) . ' </p>';
			endif; 
			?>
		
			<div class="gp-clearfix"></div>
			   
			<?php  
			if (  $wp_query->max_num_pages > 1 ) {
			echo '<div class="loadmore-section">' . __( 'Показать больше записей', 'gp-agency' ) . '  </div>'; 
			}  
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
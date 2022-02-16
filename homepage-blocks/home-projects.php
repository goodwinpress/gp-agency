<?php 
// раздел Главной страницы - Проекты (портфолио)
$titan = TitanFramework::getInstance( 'agency' ); 

// получаем данные из консоли темы
$home_projects_title = $titan->getOption( 'home-projects-title' ); // заголовок раздела
$projects_btn_text = $titan->getOption( 'home-projects-btn_text' ); // текст на кнопке
?>	


<div class="home-project-section"> 
    
  <h2 class="home-section__title"><?php echo $home_projects_title; ?></h2>
  
  <div class="flex-port"> 
  
    <?php 
    // на выбор - выводим либо все проекты подряд 	
    if ($titan->getOption( 'projects-view-loc' ) == '1') {
    $key =  '0';
    } else {
    // либо только проекты, выбранные админом
    $key =  'project_featured';
    }
    
    // начало цикла
    $query = new WP_Query( array('post_type' => 'projects', 'meta_key' => $key,  'posts_per_page' => 99 ) );
    while ( $query->have_posts() ) : $query->the_post(); 
    
    ?>	
    
    <div class="project-item" itemscope itemtype="http://schema.org/Article"> 
    <a href="<?php echo get_permalink(); ?>">
    <?php
    // изображение проекта
    home_project_thumb(); 
    ?>	
    
    <div class="project-item__caption">
    <h2 class="project-item__title"><?php the_title(); ?></h2>
    
    <?php 
    //микроразметка
    get_template_part ('files/back/microdata'); 
    ?>
    </div><!-- end project-item__caption -->
    </a>
    </div><!-- end project-item -->
    
    <?php 
      endwhile;
      wp_reset_postdata(); 
    ?>
    
    <div class="project-item flex-align-fix"></div><!-- end flex-align-fix -->
  
  </div><!-- end flex port -->
    
  <?php
    // если выводятся избранные номера, добавляем кнопку на полный архив
    if ($titan->getOption( 'projects-view-loc' ) == '2') { ?>
    <a class="gp-button home-projects-btn" href="<?php bloginfo('url'); ?>/projects/"><?php echo $projects_btn_text; ?></a>
  <?php } ?>
  
</div><!-- end home-project-section -->
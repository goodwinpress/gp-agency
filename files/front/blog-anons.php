<?php
// шаблон записи с анонсом и миниатюрой
$titan = TitanFramework::getInstance( 'agency' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gp-entry gp-clearfix'); ?> itemscope itemtype="http://schema.org/Article">

<?php
    echo '<span class="post-info">';
    // рубрики
    the_category(', ');  
   
   // дата публикации
   if ($titan->getOption( 'date-loc' )) {
   echo '&nbsp; &mdash; &nbsp;';
   echo get_the_time('d F Y'); 
   }
   echo '</span>';
?>
 
   <?php
   // заголовок
    the_title( sprintf( '<h2 class="post-title" itemprop="headline"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); 
    ?>
   
   <?php
   if ($titan->getOption( 'blog-img-loc' )) {
   // изображение записи
    single_thumbnail();
    }
    ?>
    
   <div class="post-content" itemprop="articleBody"><p><?php truncate_post(500); ?></p></div> 
   <a class="gp-button gp-entry__button" href="<?php echo get_permalink(); ?>"><?php echo __('Подробнее', 'gp-agency'); ?></a>
   
   <?php
   //микроразметка
   get_template_part ('files/back/microdata');
   ?>
 </article><!-- end entry --> 
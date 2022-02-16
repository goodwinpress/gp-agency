<?php
// анонс для вывода в поиске
$titan = TitanFramework::getInstance( 'agency' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gp-entry search-anons gp-clearfix'); ?>>

<?php
    echo '<span class="post-info">';
   // дата публикации
   if ($titan->getOption( 'date-loc' ) ) {
   echo '&nbsp; &mdash; &nbsp;';
   echo get_the_time('d F Y'); 
   }
   echo '</span>';
?>
 
   <h2 class="post-title"><a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
    
   <div class="post-content"><p><?php  truncate_post(500); ?></p></div> 
   <a class="gp-button gp-entry__button" href="<?php echo get_permalink(); ?>"> <?php echo __('Подробнее', 'gp-agency'); ?></a>
 
 </article><!-- end entry --> 
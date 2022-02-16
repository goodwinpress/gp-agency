<?php
// шаблон блога
$titan = TitanFramework::getInstance( 'agency' );

get_header();

$blog_title = $titan->getOption('blog-title'); // заголовок блога
$sidebar_loc =  get_post_meta( $post->ID, 'gp_sidebar', true); // отключение сайдбара

?>

<div class="blog-page">

    <div class="blog-page__header">

        <?php
        // хлебные крошки
        if (function_exists('dimox_breadcrumbs')) {
            dimox_breadcrumbs();
        }
        ?>

        <h1 class="blog-page__title"><?php echo $blog_title; ?></h1>

    </div><!-- end blog-page__header-->

    <div class="gp-clearfix"></div>

    <div class="port">

        <main class="main">

            <?php if (have_posts()) : while (have_posts()) : the_post();
    
            // выбираем тип записей
            if ($titan->getOption('blog-type') == '1') {
                get_template_part('files/front/blog-anons');
            } else {
                get_template_part('files/front/blog-regular');
            }
    
            endwhile;
            else :
            echo '<p>' . __('Здесь пока нет записей', 'gp-agency') . ' </p>';
            endif;
            ?>

            <div class="gp-clearfix"></div>

            <?php
              if ($wp_query->max_num_pages > 1) {
                  echo '<div class="loadmore-section">' . __('Показать больше записей', 'gp-agency') . '  </div>';
              }
            ?>

        </main><!-- end main -->

    <?php
        // сайдбар
        gp_sidebar_off( $sidebar_loc);
    ?>

    </div><!-- end port -->

</div><!-- end blog-page -->

<?php
    if ($titan->getOption( 'blog-action-loc' )) {
    // раздел с формой для получения контакта
    get_template_part ('files/front/inner-page-order-form');
    }
?>

<?php get_footer(); ?>
<?php
 /*
 Template Name: Главная страница
 */
$titan = TitanFramework::getInstance('agency');
get_header();

echo '<main>';
    $blocks = $titan->getOption('front_page_items');
    foreach ($blocks as $block) {
        get_template_part('homepage-blocks/home', $block);
    }

echo '</main>';

get_footer();

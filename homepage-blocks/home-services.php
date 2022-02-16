<?php
// раздел Главной страницы - Услуги и цены
$titan = TitanFramework::getInstance('agency');

// получаем данные из консоли темы
$home_services_title = $titan->getOption('services-title'); // заголовок раздела

$service1_title = $titan->getOption('service1-title'); // заголовок услуги
$service1_short_desc = $titan->getOption('service1-short-desc'); // короткое описание
$service1_full_desc = $titan->getOption('service1-full-desc'); // полное описание
$service1_btn_url = $titan->getOption('service1-btn-url'); // произвольная ссылка на кнопке
$service1_btn_text = $titan->getOption('service1-btn-text'); // текст на кнопке

$service2_title = $titan->getOption('service2-title');
$service2_short_desc = $titan->getOption('service2-short-desc');
$service2_full_desc = $titan->getOption('service2-full-desc');
$service2_btn_url = $titan->getOption('service2-btn-url');
$service2_btn_text = $titan->getOption('service2-btn-text');

$service3_title = $titan->getOption('service3-title');
$service3_short_desc = $titan->getOption('service3-short-desc');
$service3_full_desc = $titan->getOption('service3-full-desc');
$service3_btn_url = $titan->getOption('service3-btn-url');
$service3_btn_text = $titan->getOption('service3-btn-text');

if ($titan->getOption('service4-loc') == '1') {
    $service4_title = $titan->getOption('service4-title');
    $service4_short_desc = $titan->getOption('service4-short-desc');
    $service4_full_desc = $titan->getOption('service4-full-desc');
    $service4_btn_url = $titan->getOption('service4-btn-url');
    $service4_btn_text = $titan->getOption('service4-btn-text');
}
if ($titan->getOption('service5-loc') == '1') {
    $service5_title = $titan->getOption('service5-title');
    $service5_short_desc = $titan->getOption('service5-short-desc');
    $service5_full_desc = $titan->getOption('service5-full-desc');
    $service5_btn_url = $titan->getOption('service5-btn-url');
    $service5_btn_text = $titan->getOption('service5-btn-text');
}
if ($titan->getOption('service6-loc') == '1') {
    $service6_title = $titan->getOption('service6-title');
    $service6_short_desc = $titan->getOption('service6-short-desc');
    $service6_full_desc = $titan->getOption('service6-full-desc');
    $service6_btn_url = $titan->getOption('service6-btn-url');
    $service6_btn_text = $titan->getOption('service6-btn-text');
}
if ($titan->getOption('service7-loc') == '1') {
    $service7_title = $titan->getOption('service7-title');
    $service7_short_desc = $titan->getOption('service7-short-desc');
    $service7_full_desc = $titan->getOption('service7-full-desc');
    $service7_btn_url = $titan->getOption('service7-btn-url');
    $service7_btn_text = $titan->getOption('service7-btn-text');
}
if ($titan->getOption('service8-loc') == '1') {
    $service8_title = $titan->getOption('service8-title');
    $service8_short_desc = $titan->getOption('service8-short-desc');
    $service8_full_desc = $titan->getOption('service8-full-desc');
    $service8_btn_url = $titan->getOption('service8-btn-url');
    $service8_btn_text = $titan->getOption('service8-btn-text');
}
if ($titan->getOption('service9-loc') == '1') {
    $service9_title = $titan->getOption('service9-title');
    $service9_short_desc = $titan->getOption('service9-short-desc');
    $service9_full_desc = $titan->getOption('service9-full-desc');
    $service9_btn_url = $titan->getOption('service9-btn-url');
    $service9_btn_text = $titan->getOption('service9-btn-text');
}
if ($titan->getOption('service10-loc') == '1') {
    $service10_title = $titan->getOption('service10-title');
    $service10_short_desc = $titan->getOption('service10-short-desc');
    $service10_full_desc = $titan->getOption('service10-full-desc');
    $service10_btn_url = $titan->getOption('service10-btn-url');
    $service10_btn_text = $titan->getOption('service10-btn-text');
}
if ($titan->getOption('service11-loc') == '1') {
    $service11_title = $titan->getOption('service11-title');
    $service11_short_desc = $titan->getOption('service11-short-desc');
    $service11_full_desc = $titan->getOption('service11-full-desc');
    $service11_btn_url = $titan->getOption('service11-btn-url');
    $service11_btn_text = $titan->getOption('service11-btn-text');
}
if ($titan->getOption('service12-loc') == '1') {
    $service12_title = $titan->getOption('service12-title');
    $service12_short_desc = $titan->getOption('service12-short-desc');
    $service12_full_desc = $titan->getOption('service12-full-desc');
    $service12_btn_url = $titan->getOption('service12-btn-url');
    $service12_btn_text = $titan->getOption('service12-btn-text');
}

?>

<div class="home-service-section">
    <h2 class="home-section__title"><?php echo $home_services_title; ?></h2>
    <div class="port flex-port">

        <div class="service-item">
            <span class="service-item__title"><?php echo $service1_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service1_short_desc; ?></span>
            <?php
            echo $service1_full_desc;
            if (! empty($service1_btn_url)) {
                echo '<a class="gp-button" href="'. $service1_btn_url . '">'. $service1_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item 1 -->

        <div class="service-item">
            <span class="service-item__title"><?php echo $service2_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service2_short_desc; ?></span>
            <?php
            echo $service2_full_desc;
            if (! empty($service2_btn_url)) {
                echo '<a class="gp-button" href="'. $service2_btn_url . '">'. $service2_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item 2 -->

        <?php if ($titan->getOption('service3-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service3_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service3_short_desc; ?></span>
            <?php
            echo $service3_full_desc;
            if (! empty($service3_btn_url)) {
                echo '<a class="gp-button" href="'. $service3_btn_url . '">'. $service3_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item 3 -->
        <?php } ?>

        <?php if ($titan->getOption('service4-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service4_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service4_short_desc; ?></span>
            <?php
            echo $service4_full_desc;
            if (! empty($service4_btn_url)) {
                echo '<a class="gp-button" href="'. $service4_btn_url . '">'. $service4_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item 4 -->
        <?php } ?>

        <?php if ($titan->getOption('service5-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service5_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service5_short_desc; ?></span>
            <?php
            echo $service5_full_desc;
            if (! empty($service5_btn_url)) {
                echo '<a class="gp-button" href="'. $service5_btn_url . '">'. $service5_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item  5-->
        <?php } ?>

        <?php if ($titan->getOption('service6-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service6_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service6_short_desc; ?></span>
            <?php
            echo $service6_full_desc;
            if (! empty($service6_btn_url)) {
                echo '<a class="gp-button" href="'. $service6_btn_url . '">'. $service6_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item  6-->
        <?php } ?>

        <?php if ($titan->getOption('service7-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service7_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service7_short_desc; ?></span>
            <?php
            echo $service7_full_desc;
            if (! empty($service7_btn_url)) {
                echo '<a class="gp-button" href="'. $service7_btn_url . '">'. $service7_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item  7-->
        <?php } ?>

        <?php if ($titan->getOption('service8-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service8_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service8_short_desc; ?></span>
            <?php
            echo $service8_full_desc;
            if (! empty($service8_btn_url)) {
                echo '<a class="gp-button" href="'. $service8_btn_url . '">'. $service8_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item 8 -->
        <?php } ?>

        <?php if ($titan->getOption('service9-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service9_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service9_short_desc; ?></span>
            <?php
            echo $service9_full_desc;
            if (! empty($service9_btn_url)) {
                echo '<a class="gp-button" href="'. $service9_btn_url . '">'. $service9_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item  9-->
        <?php } ?>

        <?php if ($titan->getOption('service10-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service10_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service10_short_desc; ?></span>
            <?php
           echo $service10_full_desc;
           if (! empty($service10_btn_url)) {
               echo '<a class="gp-button" href="'. $service10_btn_url . '">'. $service10_btn_text .'</a>';
           }
           ?>
        </div><!-- end service-item 10 -->
        <?php } ?>

        <?php if ($titan->getOption('service11-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service11_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service11_short_desc; ?></span>
            <?php
           echo $service11_full_desc;
           if (! empty($service11_btn_url)) {
               echo '<a class="gp-button" href="'. $service11_btn_url . '">'. $service11_btn_text .'</a>';
           }
           ?>
        </div><!-- end service-item 11 -->
        <?php } ?>

        <?php if ($titan->getOption('service12-loc') == '1') { ?>
        <div class="service-item">
            <span class="service-item__title"><?php echo $service12_title; ?></span>
            <span class="service-item__subtitle"><?php echo $service12_short_desc; ?></span>
            <?php
            echo $service12_full_desc;
            if (! empty($service12_btn_url)) {
                echo '<a class="gp-button" href="'. $service12_btn_url . '">'. $service12_btn_text .'</a>';
            }
            ?>
        </div><!-- end service-item 12 -->
        <?php } ?>

        <div class="service-item flex-align-fix"></div><!-- end flex-align-fix -->

    </div><!-- end flex port -->
</div><!-- end home-service-section -->
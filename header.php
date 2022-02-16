<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<?php
// шаблон шапки сайта
$titan = TitanFramework::getInstance( 'agency' ); 

// получаем данные из консоли темы
$analytics = $titan->getOption( 'googlecode' ); //  статистика Google Analytics
$icon_id = $titan->getOption( 'favicon' ); // id фавикона
$verification = $titan->getOption('verification'); // верификация
$pixel = $titan->getOption('pixel'); // пиксель фейсбук
$logo_img = $titan->getOption( 'themelogo' ); // логотип, если есть
$browser_theme_bg = $titan->getOption( 'browser' ); // тема браузера, если поддерживает
$profile_city = $titan->getOption('profile-city'); // населенный пункт
$profile_adress = $titan->getOption('profile-adress'); // адрес
$profile_phone1 = $titan->getOption('profile-phone-1'); // телефон
$profile_phone2 = $titan->getOption('profile-phone-2'); // телефон 2
?>

<head>
  <?php
  //статистика Google Analytics
  echo $analytics;
  ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="<?php echo $browser_theme_bg; ?>">

<?php
  // фавикон
  favicon($icon_id);
  
  //верификация сайта
  echo $verification;
  
  //выводим facebook pixel, если есть
  echo $pixel;
  
  wp_head(); 
?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
  <?php wp_body_open(); ?>
  
  <?php 
    // выводим статистику яндекс метрики (без кнопки)
    echo $titan->getOption( 'yandexcode' ); 

    // кнопка открытия мобильного меню
    mob_menu_button();

  // меню
  gp_mobile_nav( $profile_city, $profile_adress, $profile_phone1, $profile_phone2);
  ?>
 
<div class="wrap">
 
<header itemscope itemtype="http://schema.org/WPHeader">
 
  <?php 
    // текст или логотип, на выбор
    if ($titan->getOption( 'site-title' ) == '1') {
      header_text_title();
      } else {
      header_logo($logo_img);
      }
    
    // короткое меню на внутренних страницах
    if( ! is_front_page()) { 
      short_inner_nav();
    }
      
    // кнопка с телефоном в шапке
    if ($titan->getOption( 'header-phone-btn-loc' ) == '1') {
      header_phone($profile_phone1);
    }
  ?>

</header> <!-- end header -->
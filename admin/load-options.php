<?php
//выводим на фронт изображения и стили, заданные в консоли темы в разделе Оформление в head
if ( ! defined( 'ABSPATH' ) ) { exit; // Exit if accessed directly.
}

add_action( 'wp_head', 'titan_fr_head' );
function titan_fr_head() {
$titan = TitanFramework::getInstance( 'agency' );
?>

<style>
<?php
  // берем данные из раздела Оформление в консоли
  $color = $titan->getOption( 'body-col' );
  $a_link = $titan->getOption( 'alink' );
  $a_hover = $titan->getOption( 'ahover' );
  $drop_nav_bg = $titan->getOption( 'nav-drop-bg' );
  $drop_nav_color = $titan->getOption( 'nav-drop-col' );
  $btn_color = $titan->getOption( 'btn-col-hov' );
  $btn_bg_hover = $titan->getOption( 'btn-bg-hov' );
  $tab_icon = $titan->getOption( 'service-icons-bg' );
  $tab_active_icon = $titan->getOption( 'service-icons-bg-hov' );
  $step_counter = $titan->getOption( 'service-steps-bg' );
  $inner_pages_head = $titan->getOption( 'inner-pages-head-bg' );
  $footer_bg = $titan->getOption( 'footer-bg' );
  $footer_col = $titan->getOption( 'footer-col' );
  
  // и помещаем их в свойства селекторов в head
  echo 'body {color:' .$color. '}';
  echo 'a {color:' .$a_link. '}';
  echo 'a:hover, .loadmore-section:hover {color:' .$a_hover. '}';
  echo '.loadmore-section:hover{border-color:' .$a_hover. '}';
  echo 'a.vk-icon:hover,a.fb-icon:hover,a.twi-icon:hover,a.tele-icon:hover,a.ytube-icon:hover,.odnkl-icon:hover,a.whats-icon:hover,a.viber-icon:hover{background:' .$a_hover.'}';
  echo '.sub-menu li a {color:' .$drop_nav_color. '}';
  echo '.sub-menu {background:' .$drop_nav_bg. '}';
  echo 'a.gp-button:hover,
  a.gp-button:focus,
  .comment-form input[type="submit"]:hover,
  .comment-form input[type="submit"]:focus,
  button.gp-button:hover,
  button.gp-button:focus,
  .widget_search .search-form input[type="submit"]:hover,
  .widget_search .search-form input[type="submit"]:focus,
  .wp-block-search__button:hover,
  .wp-block-search__button:focus,
  button.wpcf7-submit:hover,
  button.wpcf7-submit:focus {
  box-shadow: inset -10rem 0 0 0 ' . $btn_bg_hover . ', inset 10rem 0 0 0 ' . $btn_bg_hover .'; border-color: ' . $btn_bg_hover .'; color: ' .   $btn_color . '}';
  echo 'a.header-contact:hover,
  a.header-contact:focus {
  box-shadow: inset -8rem 0 0 0 ' . $btn_bg_hover . ', inset 8rem 0 0 0 ' . $btn_bg_hover .'; border-color: ' . $btn_bg_hover .'; color: ' .   $btn_color . '}';
  echo '.hamburger:hover,
  .hamburger:focus {
  box-shadow: inset -4rem 0 0 0 ' . $btn_bg_hover .', inset 4rem 0 0 0 ' . $btn_bg_hover .'; border-color: ' . $btn_bg_hover .'; color: ' .   $btn_color . '}';
  echo '.tabs .tab1:before,
  .tabs .tab2:before,
  .tabs .tab3:before,
  .tabs .tab4:before { background-color: ' . $tab_icon .'}';
  echo '.tabs ul li.active .tab1:before, .tabs ul li.active .tab2:before,
  .tabs ul li.active .tab3:before,
  .tabs ul li.active .tab4:before {background-color: ' . $tab_active_icon . '}';
   echo ' @media only screen and (max-width:1024px) {
  .tabs ul li.active a {
  background-color: ' . $tab_active_icon . '
  }}';
  echo '.blog-page__header {background-color:' . $inner_pages_head . '}';
  echo 'footer, .credits{background-color:' .  $footer_bg . '; color:' . $footer_col . '}';
  echo 'footer a, .credits a {color:' . $footer_col . '}';
  echo 'a.footer-button {border-color:' . $footer_col . '; color:' . $footer_col . '}';
  echo '.backtop {background-color:' .  $footer_bg . '}';
 if ($titan->getOption( 'speed-up' ) == '1') { 
 echo '@media only screen and (max-width:500px){.gp-inner-page__img{display:none}}';
 }
 echo 'ul.steps-item__list li:before {  background-color: ' . $step_counter . '}';
 if ($titan->getOption( 'com-spoiler-loc' ) == '1') { 
   echo '.toggle-comments{width:100%;float:left;text-align:center;font-size:.8rem;letter-spacing:.5px; cursor:pointer;text-transform:uppercase;padding:16px 0; transition:all 0.3s ease-in; color:' .$color. ';position:relative;margin:0 0 3rem; border:1px solid ' .$color. ';  }  ';
   echo '.toggle-comments:hover {border-color:' .$a_hover. '; color:' .$a_hover. '}';
   echo '.toggle-comments:before{content:"'. esc_attr__('Открыть обсуждение', 'gp-agency') .'"}';
   echo '.toggle-comments.opened:before{content:"'. esc_attr__('Cкрыть обсуждение', 'gp-agency') .'"}';
   echo '.toggle-comments.opened{padding:15px;display:inline-block;margin:40px 0}.comments-box.open{height:auto;display:block; margin:0;overflow:visible}.comments-box{height:0; display:none; width:100%;float:left; overflow:hidden}';
 } else {
   echo '.comments-box{height:auto; width:100%;float:left; overflow:hidden; margin:3rem 0}';
 }
 if ($titan->getOption( 'backtop-loc' ) == '1') {
 echo '.backtop{left: 30px} @media only screen and (max-width:414px){.backtop{left: 10px}}';
 } else {
 echo '.backtop{right: 30px} @media only screen and (max-width:414px){.backtop{right: 10px}}';
 }
?>
</style>
<?php
}

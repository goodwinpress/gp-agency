<?php
// шаблон подвала
$titan = TitanFramework::getInstance( 'agency' ); 
 
$logo_img = $titan->getOption( 'themelogo' ); // лого, если есть
$profile_city = $titan->getOption('profile-city'); // населенный пункт
$profile_adress = $titan->getOption('profile-adress'); // адрес
$profile_phone1 = $titan->getOption('profile-phone-1'); // телефон
$profile_phone2 = $titan->getOption('profile-phone-2'); // телефон 2
$thankyou_url = $titan->getOption( 'thankyou-url' ); // адрес страницы Спасибо

?>

<footer itemscope itemtype="http://schema.org/WPFooter">
  
  <?php
  if ($titan->getOption( 'site-title' ) == '1') {
    footer_text_title();
  } else {
    footer_logo($logo_img);
  }
  ?>
 
<div class="footer__contacts">
  <span class="footer__adress"><?php echo $profile_city; ?>, <?php echo $profile_adress; ?></span>
  <span class="footer__phones">
  <?php
  $vars = array('(', ')', ' ','-');
  echo '<a class="gp-button footer-button" href="tel:' . str_replace($vars, '', $profile_phone1) . '">'. $profile_phone1 . '</a>';
  echo '<a class="gp-button footer-button" href="tel:' . str_replace($vars, '', $profile_phone2) . '">'. $profile_phone2 . '</a>';
  ?>
  </span>
</div><!-- end footer-contacts -->

  <?php
    // меню в подвале
    footer_nav();
  ?>

  <div class="credits">
    
      &copy; <span itemprop="copyrightYear"><?php echo date('Y'); ?></span>
      <span itemprop="name"><?php bloginfo('name'); ?></span>&nbsp; &middot; &nbsp;
      <span itemprop="description"><?php bloginfo('description'); ?></span>  

      <?php if ($titan->getOption( 'gpr-loc' ) ) { 
        // авторская ссылка
        echo '<br /> <span><a class="gpress" href="https://goodwinpress.ru" target="_blank">' . __('Дизайн: GoodwinPress', 'gp-agency') . '</a></span>';
        }
      ?>

      <div class="anycode">
        <span><?php 
          // любая статистика с кнопкой
          echo $titan->getOption( 'anycode' ); 
        ?></span>
      </div><!-- end anycode -->

  </div><!-- end credits -->

</footer><!-- end footer -->

<button class="backtop"></button>

  <?php 
  // кнопка для чата
   if ($titan->getOption( 'chat-btn-loc' )) { 
     get_template_part ('files/front/chat-button');
  }
  ?>
 
<div class="overlay"></div>
<div class="overlay_popup"></div>

</div><!-- end wrap-->


  <?php wp_footer(); ?> 


  <?php if ($titan->getOption( 'com-spoiler-loc' ) == '1') { 
  // тоггл комментариев в записях и страницах
  if (is_single() || is_page() ) { ?> 
    <script>
    /* <![CDATA[ */
      jQuery(document).ready(function($) {
      $('.toggle-comments').click(function(){ 
      $('.comments-box').toggleClass('open'); 
      $(this).toggleClass('opened'); 
        return false; 
        }); 
      }); 
    /* ]]> */
    </script>
    <?php 
    } 
  } 
  ?>
  
  <script>
    /* <![CDATA[ */
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '<?php echo $thankyou_url; ?>';
    }, false );
    /* ]]> */
  </script>

</body>
</html>
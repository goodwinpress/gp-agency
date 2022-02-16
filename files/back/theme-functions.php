<?php
// фавикон
add_action( 'gp_header', 'favicon' );
function favicon($icon_id) {
  
    if ( is_numeric( $icon_id ) ) {
      $imageAttachment = wp_get_attachment_image_src( $icon_id, $size = 'full', $icon = false );
      $imageSrc = $imageAttachment[0];
    } else {
      $imageSrc = $icon_id;
    }
    
  echo '<link rel="icon" href="' . esc_url( $imageSrc ) . '" sizes="192x192" type="image/png">';
  echo '<link rel="apple-touch-icon" href="' . esc_url( $imageSrc ) . '">';
}


// логотип в шапке
add_action( 'gp_header', 'header_logo' );
function header_logo($logo_img) {
 
  if ( is_numeric( $logo_img ) ) { 
    $imageAttachment = wp_get_attachment_image_src( $logo_img, $size = 'full', $icon = false ); 
    $imageSrc = $imageAttachment[0];
  } else {
    $imageSrc = $logo_img;
  }

  echo '<div class="site-title">';
  echo '<a href="' .esc_url( home_url( '/' ) ). '"><img src="' . $imageSrc .'" alt="' . get_bloginfo('name') . '" width="250" height="60"></a>';
  echo '</div><!-- end site-title -->';
  
}


// логотип в подвале
add_action( 'gp_footer', 'footer_logo' );
function footer_logo($logo_img) {

 if ( is_numeric( $logo_img ) ) { 
   $imageAttachment = wp_get_attachment_image_src( $logo_img, $size = 'full', $icon = false ); 
   $imageSrc = $imageAttachment[0];
 } else {
   $imageSrc = $logo_img;
 }
 
  echo '<img class="footer__logo" data-src="'.$imageSrc.'" alt="' .get_bloginfo('name'). '" width="250" height="60">';
  
}


// текстовый заголовок в шапке
add_action( 'gp_header', 'header_text_title' );
function header_text_title() {
    
  echo '<div class="text-title">';
  echo '<span itemprop="name"><a href="' .esc_url( home_url( '/' ) ). '">' .get_bloginfo('name'). '</a></span>';
  echo '</div><!-- end text-title -->';

}


// номер телефона в шапке
add_action( 'gp_header', 'header_phone' );
function header_phone($profile_phone1) {

  $vars = array('(', ')', ' ','-');
  echo '<a class="header-contact" href="tel:' . str_replace($vars, '', $profile_phone1) . '">'. $profile_phone1 . '</a>';
  
}


// изображение в фоне контейнеров (в постере и отзывах)
add_action('gp_images', 'gp_poster_img');
function gp_poster_img($imgID) { 
  
  if ( is_numeric( $imgID ) ) { 
      $imageAttachment = wp_get_attachment_image_src( $imgID, $size = 'full', $icon = false ); 
      $imageSrc = $imageAttachment[0];
    } else {
      $imageSrc = $imgID;
    }   
    
  echo 'data-bg="' . $imageSrc .'"'; 

} 


// добавляем микроразметку в меню
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );
function add_menu_atts( $atts, $item, $args ) {
    
  $atts['itemprop'] = 'url';
  return $atts;
    
}


// добавляем микроразметку к изображениям
function add_image_atts($content) { 
  global $post; 
  $pattern = "<img"; 
  $replacement = '<img itemprop="image"'; 
  $content = str_replace($pattern, $replacement, $content); 
  return $content; 
} 
add_filter('the_content', 'add_image_atts'); 


// создаем анонс
function truncate_post($amount,$echo=true,$post='') {
  global $shortname; 
  if ( $post == '' ) global $post; 
  $postExcerpt = '';
  $postExcerpt = $post->post_excerpt;
  if (get_option($shortname.'_use_excerpt') == 'on' && $postExcerpt <> '') { 
  if ($echo) echo $postExcerpt;
  else return $postExcerpt; 
  } else {
  $truncate = $post->post_content;    
  $truncate = preg_replace('@\[caption[^\]]*?\].*?\[\/caption]@si', '', $truncate);   
  if ( strlen($truncate) <= $amount ) $echo_out = ''; else $echo_out = '...';
  $truncate = apply_filters('the_content', $truncate);
  $truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
  $truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);  
  $truncate = strip_tags($truncate);
  if ($echo_out == '...') $truncate = substr($truncate, 0, strrpos(substr($truncate, 0, $amount), ' '));
  else $truncate = substr($truncate, 0, $amount);
  if ($echo) echo $truncate,$echo_out;
  else return ($truncate . $echo_out);
  };
}


// декларируем совместимость с woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
  add_theme_support( 'woocommerce' );
}


// отключаем стили галереи по-умочалнию
add_filter( 'use_default_gallery_style', '__return_false' );
  
// увеличим ширину текстового поля в редакторе
function custom_admin_css() {
  
  echo '<style type="text/css">
  /* Main column width */
  .wp-block {
  max-width: 1024px;
  }
  /* Width of "wide" blocks */
  .wp-block[data-align="wide"] {
  max-width: 1024px;
  }
  /* Width of "full-wide" blocks */
  .wp-block[data-align="full"] {
  max-width: none;
  }
  </style>';
  
}
add_action('admin_head', 'custom_admin_css');


// кнопка открытия мобильного меню
add_action( 'gp_header', 'mob_menu_button' );
function mob_menu_button() {
  
  echo '<button class="hamburger hamburger--spin" type="button">
  <span class="hamburger-box"><span class="hamburger-inner"></span></span> 
  </button>';
  
}


// мобильное меню
add_action('gp_menu', 'gp_mobile_nav');
function gp_mobile_nav( $profile_city, $profile_adress, $profile_phone1, $profile_phone2 ) {
  
  echo '<div class="mob-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">';
  echo '<div class="mob-menu__wrapper">';
  $menu = wp_nav_menu( array( 
    'theme_location' => 'main',
    'menu_class' => 'top-mob-menu',
  ));
  echo strip_tags( $menu , '<ul><li><a>'); 
  $vars = array('(', ')', ' ','-');
  echo '<span class="mob-menu__contacts">'. get_bloginfo('name'). '. ' .get_bloginfo('description').'. <br />' . $profile_city .', ' . $profile_adress . '<br /><a href="tel:'.str_replace($vars, '', $profile_phone1).'">' . $profile_phone1 . '</a>, &nbsp; <a href="tel:'.str_replace($vars, '', $profile_phone2).'">' . $profile_phone2 . '</a></span>';
  echo '</div></div>';
  
}
  

// кнопка триггер для открытия субменю в мобильной навигации
function gp_menu_arrow($item_output, $item, $depth, $args) {
  
   if (in_array('menu-item-has-children', $item->classes)) {
     
     $arrow = '<div class="menu-trigger"></div>';
     $item_output = str_replace('</a>', '</a>'. $arrow .'', $item_output);
   
   }

   return $item_output;

}
add_filter('walker_nav_menu_start_el', 'gp_menu_arrow', 10, 4);


// миниатюра в блоге и рубриках
add_action( 'gp_images', 'single_thumbnail' );
function single_thumbnail() {
  
  if(has_post_thumbnail()):
    echo '<figure class="single-thumbnail"><a href="' .get_permalink(). '">';
    $thumb = get_post_thumbnail_id();
    $image_attributes = wp_get_attachment_image_src( $thumb, 'full' );
    
    echo '<img data-src="' .$image_attributes[0] . '" alt="' .get_the_title(). '" width="' . $image_attributes[1] . '" height="' . $image_attributes[2] . '">';
    echo '</a></figure>';
  endif; 

}


// описание в архивах
add_action( 'gp_archive', 'cat_description' );
function cat_description() {
  
  $description = get_the_archive_description();
  
  if( ! empty( $description) )  {
    echo '<div class="archive-desc">';
    the_archive_description();
    echo '</div>';
   } 
   
}


// метабокс для отключения сайдбара в записях и страницах
add_action('add_meta_boxes', 'gp_sidebar');
function gp_sidebar(){
  add_meta_box('gp_sidebar', 'GP Agency сайдбар', 'gp_sidebar_option', array('post', 'page'), 'normal');
}
  
function gp_sidebar_option( $post, $meta ){
  
  $screens = $meta['args'];
  wp_nonce_field( plugin_basename(__FILE__), 'gp_sidebar_nonce' );
  $value = get_post_meta( $post->ID, 'gp_sidebar', 1 );
  echo '<p><label for="gp_sidebar">Cайдбар c виджетами в данной публикации</label><p>';
  echo '<p><select name="gp_sidebar" id="gp_sidebar">';
  echo '<option' . selected( get_post_meta($post->ID, 'gp_sidebar', true), 'Включить' ) .'>Включить</option>';
  echo '<option' . selected( get_post_meta($post->ID, 'gp_sidebar', true), 'Выключить' ) . '>Выключить</option>';
  echo '</select><p>';
  
}
  
add_action( 'save_post', 'gp_sidebar_save_postdata' );
function gp_sidebar_save_postdata( $post_id ) {
  
  if ( ! isset( $_POST['gp_sidebar'] ) )
  return;
  if ( ! wp_verify_nonce( $_POST['gp_sidebar_nonce'], plugin_basename(__FILE__) ) )
  return;
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
  return;
  if( ! current_user_can( 'edit_post', $post_id ) )
  return;
  $gp_data = sanitize_text_field( $_POST['gp_sidebar'] );
  update_post_meta( $post_id, 'gp_sidebar', $gp_data );
  
}


// функция отключения сайдбара
add_action('gp_blog', 'gp_sidebar_off');
function gp_sidebar_off( $sidebar_loc) { 
  
  if ($sidebar_loc == 'Выключить') {
  } else {
  get_sidebar();
  } 
  
}


// выводим  текстовое поле комментариев по-старинке, под полями автор, почта etc
add_filter( 'comment_form_fields', 'comment_form_fields', 99 );
function comment_form_fields( $fields ) {
  
   if ( isset( $fields['comment'] ) ) {
   $comment_field = $fields['comment'];
   unset( $fields['comment'] );
   $fields['comment'] = $comment_field;
   }
   return $fields;
   
}
 
  
// устанавливаем ссылку для режима Обычный пост
function modify_read_more_link() {
  
  return '<a class="gp-button transparent-button gp-entry__button" href="' . get_permalink() . '">'. __('Подробнее', 'gp-agency') . '</a>';
  
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
 
  
// навигация в поиске
add_action('gp_search', 'gp_search_pagination');
function gp_search_pagination() { 
  
  the_posts_navigation( array(
    'prev_text'          => __('Предыдущие', 'gp-agency' ),
    'next_text'          => __('Следующие', 'gp-agency' ),
    'screen_reader_text' => __('Навигация', 'gp-agency' )
  ) ); 

}


// фото персоны в разделе Команда на главной странице
add_action('gp_images', 'gp_team_image');
function gp_team_image($imageID, $person_url) { 
 
  if ( is_numeric( $imageID ) ) { 
     $imageAttachment = wp_get_attachment_image_src( $imageID, $size = 'full', $icon = false ); 
     $imageSrc = $imageAttachment[0];
     $image = aq_resize( $imageSrc, 300, 300, true, true, true );  
  }  else {
     $image = $imageID;
  }
  
  echo '<a href="' . $person_url .'"><img class="team-img owl-lazy" data-src="' .$image. '" alt="'. get_bloginfo('name') . '" width="300" height="300"></a>';
  
} 
   

// логотип альма матер персоны из команды
add_action('gp_images', 'gp_team_logo');
function gp_team_logo($person_logo) { 
     
  if ( is_numeric( $person_logo ) ) { 
      $imageAttachment = wp_get_attachment_image_src( $person_logo, $size = 'full', $icon = false ); 
      $imageSrc = $imageAttachment[0];
      } else {
      $imageSrc = $person_logo;
    }   
    
  echo '<img class="alma-mater" data-src="' . $imageSrc . '" alt="" width="180" height="80">'; 
  
  } 
  

// выводим кнопку мессенджера в зависимости от рабочего графика
add_action('gp_chat', 'chat_button');
function chat_button($messenger_type, $chat_phone, $chat_telegram, $start, $end, $operator, $chat_img, $button_text ) {
  
  $blogtime = current_time('mysql'); // время сервера
  $current_hour = current_time('H:i'); // получаем часы и минуты
  $vars = array('+', '(', ')', ' ','-');
  
  if ('WhatsApp' == $messenger_type) {
    $chat_num = 'https://wa.me/' . str_replace($vars, '', $chat_phone);
  }
  if ('Viber' == $messenger_type) {
    $chat_num = 'viber://chat?number=%2B' . str_replace($vars, '', $chat_phone);
  }
  if ('Telegram' == $messenger_type) {
    $chat_num =  'tg://resolve?domain='. $chat_telegram;
  }
  
  if ( is_numeric( $chat_img ) ) { 
    $imageAttachment = wp_get_attachment_image_src( $chat_img, $size = 'full', $icon = false ); 
    $imageSrc = $imageAttachment[0];
  } else {
    $imageSrc = $chat_img;
  }
  
 if ($current_hour > $start && $current_hour < $end) {
     echo '<!--noindex--><a id="' . $messenger_type .'" class="chat-button" href="' . $chat_num . '" rel="nofollow">
     <img class="chat-button__img" data-src="' . $imageSrc .'" alt="' . $operator .'" width="62" height="62">
     <span class="chat-button__name">' . $operator .'</span> 
     <span class="chat-button__offer">' . $button_text . '<br />' . __('Чат в', 'gp-agency') . ' ' . $messenger_type . '</span> 
     </a><!--/noindex--><!-- end chat button --> ';
 } 
 
}


// изображение проекта в портфолио на главной
add_action( 'gp_images', 'home_project_thumb' );
function home_project_thumb() {
  
  if(has_post_thumbnail()):
    echo '<figure class="project-thumbnail">';
    $thumb = get_post_thumbnail_id();
    $img_url = wp_get_attachment_url( $thumb,'full' );  
    $image = aq_resize( $img_url, 600, 450, true, true, true );  
    echo '<img data-src="' .$image. '" alt="' .get_the_title(). '" width="600" height="450">';
    echo '</figure>';
  endif; 

}


// внутренняя навигация в записях
add_action('gp_single', 'post_navigation');
function post_navigation() { 
  
  echo '<div class="post-navigation flex-port">';
  $prev_post = get_previous_post();
  if( ! empty($prev_post) ){  
    echo '<div class="post-navigation__previous">';
    echo '<span>'. __('Назад', 'gp-agency') .'</span>';
    echo '<a href="' . get_permalink( $prev_post ) . '">'. esc_html($prev_post->post_title) .'</a>';
    echo '</div>';
  }
  $next_post = get_next_post();
  if( ! empty($next_post) ){
    echo '<div class="post-navigation__next">';
    echo '<span>'. __('Вперёд', 'gp-agency') .'</span>';
    echo '<a href="' . get_permalink( $next_post ) . '">' . esc_html($next_post->post_title) . '</a>';
    echo '</div>';
  }
  echo '</div>';
  
}


// короткое меню на внутренних страницах
add_action('gp_menu', 'short_inner_nav');
function short_inner_nav() {
  
 echo '<div class="header__inner-nav">';
 $menu = wp_nav_menu( array( 
   'theme_location' => 'secondary',
   'menu_class' => '',
 ));
 echo strip_tags( $menu , '<ul><li><a>'); 
 echo '</div>';

 }


// меню в подвале
add_action('gp_menu', 'footer_nav');
function footer_nav() {
  
  echo '<div class="footer__menu" itemscope itemtype="http://schema.org/SiteNavigationElement">';
  $menu = wp_nav_menu( array( 
    'theme_location' => 'footer',
    'menu_class' => 'footer__list',
  ));
  echo strip_tags( $menu , '<ul><li><a>'); 
  echo '</div>';
  
}


// единая функция для вывода изображения в шапке страниц проекты, услуги, контакты
add_action('gp_images', 'gp_inner_page_img');
function gp_inner_page_img($imageID) { 
    
  if ( is_numeric( $imageID ) ) { 
    $imageAttachment = wp_get_attachment_image_src( $imageID, $size = 'full', $icon = false ); 
    $imageSrc = $imageAttachment[0];
    $attachment_url =  $imageSrc;
    $image = aq_resize($attachment_url, 1920, 400, true, true, true); 
  } else {
    $image = $imageID;
  }
 
  echo '<img class="gp-inner-page__img" data-src="' . $image . '" alt="' .get_the_title(). '" width="1920" height="400">';
  
}


// миниатюра в блоке 3 последние записи
add_action( 'gp_images', 'recent_thumbnail' );
function recent_thumbnail() {
  
 if(has_post_thumbnail()):
   echo '<figure class="thp-recent-post-img"><a href="' .get_permalink(). '">';
   $thumb = get_post_thumbnail_id();
   $img_url = wp_get_attachment_url( $thumb,'full' );  
   $image = aq_resize( $img_url, 405, 230, true  ); 
   echo '<img data-src="' .  $image . '" alt="' .get_the_title(). '" width="405" height="230">';
   echo '</a></figure>';
 endif; 

}


// текстовый заголовок в подвале
add_action( 'gp_footer', 'footer_text_title' );
function footer_text_title() {
  
 echo '<div class="footer__title">';
 echo '<span itemprop="name">' .get_bloginfo('name'). '</span>';
 echo '</div><!-- end text-title -->';
 
}

// картинка для микроразметки
add_action('gp_images', 'microdata_img');
function microdata_img() { 
 
  if(has_post_thumbnail()):  
    $thumb = get_post_thumbnail_id();
    $img_url = wp_get_attachment_url( $thumb,'full' );  
    echo '<meta itemprop="image" content=" '.$img_url. '">';
  endif; 

}
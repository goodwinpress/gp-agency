<?php
/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * лицензия: MIT
 * немного поменял код под себя, с учетом добавления custom post type и выделенной страницы блога, которых нет в оригинальном коде Димокса
*/
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = '' . __( 'Главная', 'gp-agency' )  . ''; // текст ссылки "Главная"
  $text['blog'] = '' . __( 'Статьи и новости', 'gp-agency' ) . ''; // текст ссылки "Статьи"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = '' . __( 'Результаты поиска', 'gp-agency' ) . ''; // текст для страницы с результатами поиска
  $text['tag'] = '' . __( 'Записи с тегом', 'gp-agency' ) . ' "%s"'; // текст для страницы тега
  $text['404'] = '' . __( 'Ошибка 404', 'gp-agency' ) . ''; // текст для страницы 404
  $text['page'] = '' . __( 'Страница ', 'gp-agency' ) . '%s'; // текст 'Страница N'
  $text['cpage'] = '' . __( 'Страница комментариев ', 'gp-agency' ) . '%s'; // текст 'Страница комментариев N'
  $blog_url = get_permalink( get_option( 'page_for_posts' ) ); // адрес страницы блога
  $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after = '</div><!-- end breadcrumbs --><div class="gp-clearfix"></div>'; // закрывающий тег обертки
  $sep = '<span class="breadcrumbs__separator">&nbsp; / &nbsp;</span>'; // разделитель между "крошками"
  $before = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"
  $show_on_home = 1; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  if ( is_single() ) {
  $show_current = 0 ;
 }
 if ( is_singular('projects') ) {
  $show_current = 1 ;
}
  $show_last_sep = 0; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать

  global $post;
  $home_url = home_url('/');
  $link = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
  $link .= '<meta itemprop="position" content="%3$s" />';
  $link .= '</span>';
  $parent_id = ( $post ) ? $post->post_parent : '';
  $home_link = sprintf( $link, $home_url, $text['home'], 1 );

  if ( is_home() ) {
    echo $wrap_before;
    $position = 0; 
    $position += 1;
    if ( $position > 1 ) echo $sep;
    echo $home_link;
    echo $sep;
    echo sprintf($link, $blog_url, $text['blog'], $position );
    echo $before  . $after;
    echo $wrap_after; 
  } else  {
    $position = 0; 
    echo $wrap_before;
    if ($show_home_link ) {
    $position += 1;
    echo $home_link;
  }
  if ( is_category() ) {
    echo $sep;
    echo sprintf($link, $blog_url, $text['blog'], $position );
    $parents = get_ancestors( get_query_var('cat'), 'category' );
      foreach ( array_reverse( $parents ) as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $cat = get_query_var('cat');
        echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
          if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }
  } elseif ( is_search() ) {
    if ( $show_home_link && $show_current || ! $show_current && $show_last_sep ) echo $sep;
    if ( $show_current ) echo $before . sprintf( $text['search'], get_search_query() ) . $after;
  } elseif ( is_single() && ! is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $position += 1;
        $post_type = get_post_type_object( get_post_type() );
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } else {
        echo $sep;
        echo sprintf($link, $blog_url, $text['blog'], $position );
        $cat = get_the_category(); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) 
          echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'cpage' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
          echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
        } else {
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        }
        }
  } elseif ( is_post_type_archive() ) {
    $post_type = get_post_type_object( get_post_type() );
    if ( get_query_var( 'paged' ) ) {
      $position += 1;
      if ( $position > 1 ) echo $sep;
      echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
      echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
    } else {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . $post_type->label . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }
  } elseif ( is_attachment() ) {
      $parent = get_post( $parent_id );
      $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
      $parents = get_ancestors( $catID, 'category' );
      $parents = array_reverse( $parents );
      $parents[] = $catID;
      foreach ( $parents as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      $position += 1;
      echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;
  } elseif ( is_page() && ! $parent_id ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_title() . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;
  } elseif ( is_page() && $parent_id ) {
    $parents = get_post_ancestors( get_the_ID() );
    foreach ( array_reverse( $parents ) as $pageID ) {
      $position += 1;
      if ( $position > 1 ) echo $sep;
      echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
    }
    if ( $show_current ) echo $sep . $before . get_the_title() . $after;
    elseif ( $show_last_sep ) echo $sep;
  } elseif ( is_tag() ) {
    if ( get_query_var( 'paged' ) ) {
      $position += 1;
      $tagID = get_query_var( 'tag_id' );
      echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
      echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
    } else {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;
    }
  } elseif ( is_404() ) {
    if ( $show_home_link && $show_current ) echo $sep;
    if ( $show_current ) echo $before . $text['404'] . $after;
    elseif ( $show_last_sep ) echo $sep;
  } elseif ( has_post_format() && ! is_singular() ) {
    if ( $show_home_link && $show_current ) echo $sep;
    echo get_post_format_string( get_post_format() );
  }
echo $wrap_after;
 }
} // end of dimox_breadcrumbs()

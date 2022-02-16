<?php
// Изображение проекта
add_action( 'gp_images', 'project_item_img' );
function project_item_img() {
    
     if(has_post_thumbnail()):
     echo '<a href="' .get_permalink(). '">';
     $thumb = get_post_thumbnail_id();
     $img_url = wp_get_attachment_url( $thumb,'full' );  
     $image = aq_resize( $img_url, 600, 380, true  );  
     echo '<img data-src="' .$image. '" alt="' .get_the_title(). '" width="600" height="380">';
     echo '</a>';
     endif; 
     
}


// метабокс для добавления в популярные
add_action( 'add_meta_boxes', 'gp_project_featured_box' );
function gp_project_featured_box() {
     add_meta_box('gp_project_featured', 'Добавить на Главную?', 'gp_project_box', 'projects', 'normal');
}
function gp_project_box($post) {
     wp_nonce_field( 'project_featured', 'project_featured_nonce' );
     $saved = get_post_meta( $post->ID, 'project_featured', true);
     
     if( !$saved )
     $saved = 'default';
     $fields = array(
     'add_post'     => __('Поставьте галочку для вывода карточки на Главной странице', 'gp-agency'),
     );
     
        foreach($fields as $key => $label) {
               printf(
                    '<p><input type="checkbox" name="project_featured" value="%1$s" id="project_featured[%1$s]" %3$s />'.
                    '<label for="project_featured[%1$s]"> %2$s ' .
                    '</label></p>',
                    esc_attr($key),
                    esc_html($label),
                    checked($saved, $key, false)
               );
        }
}
     
add_action( 'save_post', 'project_featured_save_postdata' );
          function project_featured_save_postdata( $post_id ) {
          if ( ! isset( $_POST['project_featured_nonce'] ) ) {
          return;
          }
     
     if ( ! wp_verify_nonce( $_POST['project_featured_nonce'], 'project_featured' ) ) {
     return;
     }
     
     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
     return;
     }
     
     if ( isset($_POST['project_featured']) && $_POST['project_featured'] != "" ){
     update_post_meta( $post_id, 'project_featured', $_POST['project_featured'] );
          } else {
          delete_post_meta($post_id, 'project_featured');
          } 
}


// короткое описание проекта
add_action('add_meta_boxes', 'gp_project_description');
function gp_project_description(){
    $screens = array( 'projects' );
    add_meta_box('p_description', 'Короткое описание', 'project_description', 'projects', 'normal');
}
    
function project_description( $post, $meta ){
    $screens = $meta['args'];
    wp_nonce_field( plugin_basename(__FILE__), 'project_description_nonce' );
    $value = get_post_meta( $post->ID, 'description', 1 );
    echo '<p><label for="project_description">Разместите короткое описание проекта</label> </p>';
    echo '<textarea  rows="5" id="project_description" name="project_description" value="'. $value .'" />'. $value.'</textarea>';
}

add_action( 'save_post', 'project_description_save_postdata' );
function project_description_save_postdata( $post_id ) {
    if ( ! isset( $_POST['project_description'] ) )
    return;
    if ( ! wp_verify_nonce( $_POST['project_description_nonce'], plugin_basename(__FILE__) ) )
    return;
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return;
    if( ! current_user_can( 'edit_post', $post_id ) )
    return;
    $gp_data = sanitize_text_field( $_POST['project_description'] );
    update_post_meta( $post_id, 'description', $gp_data );
}


// метабокс для площади работ в проекте
add_action('add_meta_boxes', 'gp_project_square');
function gp_project_square(){
     $screens = array( 'projects' );
     add_meta_box('p_square', 'Площадь работ', 'project_square', 'projects', 'normal');
}

function project_square( $post, $meta ){
     $screens = $meta['args'];
     wp_nonce_field( plugin_basename(__FILE__), 'project_square_nonce' );
     $value = get_post_meta( $post->ID, 'square', 1 );
     echo '<p><label for="project_square">Укажите площадь работ</label> </p>';
     echo '<input type="text" id="project_square" name="project_square" value="'. $value .'" size="25" />';
}
      
add_action( 'save_post', 'project_square_save_postdata' );
function project_square_save_postdata( $post_id ) {
     if ( ! isset( $_POST['project_square'] ) )
     return;
     if ( ! wp_verify_nonce( $_POST['project_square_nonce'], plugin_basename(__FILE__) ) )
     return;
     if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
     return;
     if( ! current_user_can( 'edit_post', $post_id ) )
     return;
     $gp_data = sanitize_text_field( $_POST['project_square'] );
     update_post_meta( $post_id, 'square', $gp_data );
}


 // метабокс для бюджета проекта
add_action('add_meta_boxes', 'gp_project_budget');
function gp_project_budget(){
     $screens = array( 'projects' );
     add_meta_box('p_budget', 'Бюджет проекта', 'project_budget', 'projects', 'normal');
}

function project_budget( $post, $meta ){
     $screens = $meta['args'];
     wp_nonce_field( plugin_basename(__FILE__), 'project_budget_nonce' );
     $value = get_post_meta( $post->ID, 'budget', 1 );
     echo '<p><label for="project_budget">Укажите бюджет проекта</label> </p>';
     echo '<input type="text" id="project_budget" name="project_budget" value="'. $value .'" size="25" />';
}
      
add_action( 'save_post', 'project_budget_save_postdata' );
function project_budget_save_postdata( $post_id ) {
     if ( ! isset( $_POST['project_budget'] ) )
     return;
     if ( ! wp_verify_nonce( $_POST['project_budget_nonce'], plugin_basename(__FILE__) ) )
     return;
     if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
     return;
     if( ! current_user_can( 'edit_post', $post_id ) )
     return;
     $gp_data = sanitize_text_field( $_POST['project_budget'] );
     update_post_meta( $post_id, 'budget', $gp_data );
}
  

// метабокс для доп. атрибута 1
add_action('add_meta_boxes', 'gp_project_attr1');
function gp_project_attr1(){
     $screens = array( 'projects' );
     add_meta_box('p_attr1', 'Дополнительный атрибут', 'project_attr1', 'projects', 'normal');
 }
 
function project_attr1( $post, $meta ){
     $screens = $meta['args'];
     wp_nonce_field( plugin_basename(__FILE__), 'project_attr1_nonce' );
     $value = get_post_meta( $post->ID, 'attr1', 1 );
     echo '<p><label for="project_attr1">Укажите какой-либо дополнительный атрибут</label> </p>';
     echo '<input type="text" id="project_attr1" name="project_attr1" value="'. $value .'" size="25" />';
}

add_action( 'save_post', 'project_attr1_save_postdata' );
function project_attr1_save_postdata( $post_id ) {
     if ( ! isset( $_POST['project_attr1'] ) )
     return;
     if ( ! wp_verify_nonce( $_POST['project_attr1_nonce'], plugin_basename(__FILE__) ) )
     return;
     if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
     return;
     if( ! current_user_can( 'edit_post', $post_id ) )
     return;
     $gp_data = sanitize_text_field( $_POST['project_attr1'] );
     update_post_meta( $post_id, 'attr1', $gp_data );
}


// метабокс для доп. атрибута 2
add_action('add_meta_boxes', 'gp_project_attr2');
function gp_project_attr2(){
     $screens = array( 'projects' );
     add_meta_box('p_attr2', 'Второй дополнительный атрибут', 'project_attr2', 'projects', 'normal');
     }
     function project_attr2( $post, $meta ){
     $screens = $meta['args'];
     wp_nonce_field( plugin_basename(__FILE__), 'project_attr2_nonce' );
     $value = get_post_meta( $post->ID, 'attr2', 1 );
     echo '<p><label for="project_attr2">Укажите какой-либо еще дополнительный атрибут</label></p>';
     echo '<input type="text" id="project_attr2" name="project_attr2" value="'. $value .'" size="25" />';
}

add_action( 'save_post', 'project_attr2_save_postdata' );
function project_attr2_save_postdata( $post_id ) {
     if ( ! isset( $_POST['project_attr2'] ) )
     return;
     if ( ! wp_verify_nonce( $_POST['project_attr2_nonce'], plugin_basename(__FILE__) ) )
     return;
     if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
     return;
     if( ! current_user_can( 'edit_post', $post_id ) )
     return;
     $gp_data = sanitize_text_field( $_POST['project_attr2'] );
     update_post_meta( $post_id, 'attr2', $gp_data );
}


// изображение в шапке карточки проекта
add_action( 'gp_images', 'single_project_header_img' );
function single_project_header_img() {
    
     if(has_post_thumbnail()) {
         $thumb = get_post_thumbnail_id();
         $img_url = wp_get_attachment_url( $thumb,'full' );  
         $image = aq_resize( $img_url, 1920, 400, true, true, true  );  
         echo '<img class="gp-inner-page__img" data-src="' .$image. '" alt="' .get_the_title(). '" width="1920" height="400">';
     }
     
}


// установим количество карточек проектах на одной странице
add_filter('pre_get_posts', 'items_per_page');
function items_per_page( $query ) {
    
     if( is_post_type_archive('projects') ) {
         $query->set('posts_per_page',99);  
     }
     return $query;
     
} 

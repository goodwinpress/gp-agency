<?php
// подключаем post_type для Проектов

function projects() {

	$labels = array(
		'name'                  => __( 'Проекты', '', 'gp-agency' ),
		'singular_name'         => __( 'Проект', '', 'gp-agency' ),
		'menu_name'             => __( 'Проекты', 'gp-agency' ),
		'name_admin_bar'        => __( 'Проект', 'gp-agency' ),
		'archives'              => __( 'Архив Проектов', 'gp-agency' ),
		'attributes'            => __( 'Свойства', 'gp-agency' ),
		'parent_item_colon'     => __( 'Родительская карточка Проекта:', 'gp-agency' ),
		'all_items'             => __( 'Все Проекты', 'gp-agency' ),
		'add_new_item'          => __( 'Добавить новый Проект', 'gp-agency' ),
		'add_new'               => __( 'Добавить новый Проект', 'gp-agency' ),
		'new_item'              => __( 'Новый Проект', 'gp-agency' ),
		'edit_item'             => __( 'Редактировать ', 'gp-agency' ),
		'update_item'           => __( 'Обновить ', 'gp-agency' ),
		'view_item'             => __( 'Посмотреть', 'gp-agency' ),
		'view_items'            => __( 'Посмотреть', 'gp-agency' ),
		'search_items'          => __( 'Искать Проект', 'gp-agency' ),
		'not_found'             => __( 'Проекты не найдены', 'gp-agency' ),
		'not_found_in_trash'    => __( 'Не найдено', 'gp-agency' ),
		'featured_image'        => __( 'Изображение Проекта', 'gp-agency' ),
		'set_featured_image'    => __( 'Установить изображение Проекта', 'gp-agency' ),
		'remove_featured_image' => __( 'Удалить изображение Проекта', 'gp-agency' ),
		'use_featured_image'    => __( 'Использовать как изображение Проекта', 'gp-agency' ),
		'insert_into_item'      => __( 'Вставить в ', 'gp-agency' ),
		'uploaded_to_this_item' => __( 'Загружено', 'gp-agency' ),
		'items_list'            => __( 'Список Проектов', 'gp-agency' ),
		'items_list_navigation' => __( 'Навигация по Проектам', 'gp-agency' ),
		'filter_items_list'     => __( 'Фильтр Проектов', 'gp-agency' ),
	);

	$rewrite = array(
		'slug'   =>   'projects',
		'with_front'    => true,
		'pages'          => true,
		'feeds'           => false,
	);

	$args = array(
		'label'                 => __( 'Проект', 'gp-agency' ),
		'description'           => __( 'Проекты', 'gp-agency' ),
		'labels'                => $labels,
		 
		'taxonomies'      => array( 'cat' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon' => 'dashicons-yes-alt',  
		'menu_position'         => 4,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'       		=> $rewrite,
		'capability_type'       => 'post',
		'show_in_rest' 			=> true,
		'supports' 				=> array('title','editor', 'thumbnail')
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects', 0 );

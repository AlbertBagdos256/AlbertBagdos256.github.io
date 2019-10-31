<?php 
add_action('wp_enqueue_scripts', 'themeStyle');
add_action('wp_enqueue_scripts', 'themeScript');
add_action('after_setup_theme', 'themeMenu');
add_action('widgets_init', 'themeSidebar');

function themeStyle()
{
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('style1',get_template_directory_uri() . '/assets/css/style1.css');
    wp_enqueue_style('mobile',get_template_directory_uri() . '/assets/css/mobile.css');
    wp_enqueue_style('style2',get_template_directory_uri() . './style.css');
    
}
function themeScript() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('mobile',get_template_directory_uri() . '/assets/js/mobile.js');
    wp_enqueue_script('mobile',get_template_directory_uri() . '/assets/js/preoader.js');
}

function themeMenu() {
    register_nav_menu('top','Main menu');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails', ['post','port','slider']);
    
}

function themeSidebar() {
    
    register_sidebar( array(
		'name'          => 'widjets right1',
		'id'            => "right_sidebar",
		'description'   => 'place for widgets bla bla bla',
		'class'         => '',
		 'before_widget' => '<li>',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n", 
    ) );
    register_sidebar( array(
		'name'          => 'widjets on main-page',
		'id'            => "index_sidebar",
		'description'   => 'Place for widgets bla bla bla',
		'class'         => '',
		 'before_widget' => '<div class="body">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h1>',
		'after_title'   => "</h1>\n", 
    ) );
    register_sidebar( array(
		'name'          => 'widjets of socials icons',
		'id'            => "footer_sidebar",
		'description'   => 'Place for widgets bla bla bla',
		'class'         => '',
		 'before_widget' => '<div class="connect">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h1>',
		'after_title'   => "</h1>\n", 
    ) );
    
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('port', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'portfolio', // основное название для типа записи
			'singular_name'      => 'portfolio', // название для одной записи этого типа
			'add_new'            => 'Добавить portfolio', // для добавления новой записи
			'add_new_item'       => 'Добавление portfolio', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование portfolio', // для редактирования типа записи
			'new_item'           => 'Новое _portfolio', // текст новой записи
			'view_item'          => 'Смотреть portfolio', // для просмотра записи этого типа.
			'search_items'       => 'Искать portfolio', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'portfolio', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	register_post_type('slider', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'slider', // основное название для типа записи
			'singular_name'      => 'slider', // название для одной записи этого типа
			'add_new'            => 'Добавить slider', // для добавления новой записи
			'add_new_item'       => 'Добавление slider', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование slider', // для редактирования типа записи
			'new_item'           => 'Новое slider', // текст новой записи
			'view_item'          => 'Смотреть slider', // для просмотра записи этого типа.
			'search_items'       => 'Искать slider', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'slider', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}


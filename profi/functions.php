<?php
show_admin_bar( false );

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('products', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Товары',
			'singular_name'      => 'Товар',
			'add_new'            => 'Добавить товар',
			'add_new_item'       => 'Добавление товара',
			'edit_item'          => 'Редактирование товара',
			'new_item'           => 'Новый товар',
			'view_item'          => 'Смотреть товар',
			'search_items'       => 'Искать товар',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '', 
			'menu_name'          => 'Товары',
		),
		'description'         => 'Это наши товары',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-screenoptions', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','author','thumbnail','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type('team', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Специалисты',
			'singular_name'      => 'Специалист',
			'add_new'            => 'Добавить специалиста',
			'add_new_item'       => 'Добавление специалиста',
			'edit_item'          => 'Редактирование специалиста',
			'new_item'           => 'Новый специалист',
			'view_item'          => 'Смотреть специалиста',
			'search_items'       => 'Искать специалиста',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '', 
			'menu_name'          => 'Специалисты',
		),
		'description'         => 'Это наши специалисты',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-groups', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

if ( ! function_exists( 'profi_club_setup' ) ) :
	function profi_club_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'html5', array(
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'profi_club_setup' );

function style_theme() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	//wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
	//wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
	//wp_enqueue_style( 'styleMin', get_template_directory_uri() . '/assets/css/style.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
}

function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );

function scripts_theme() {
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js');
	if ( is_front_page() ) {
    wp_enqueue_script('jquery');
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery']);
		wp_enqueue_script( 'slick_conf', get_template_directory_uri() . '/assets/js/compressed.js', ['jquery', 'slick']);
		//wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js');
    }
}
function remove_menus(){
  remove_menu_page( 'index.php' );                  //Консоль
  //remove_menu_page( 'edit.php' );                   //Записи
 // remove_menu_page( 'upload.php' );                 //Медиафайлы
 // remove_menu_page( 'edit.php?post_type=page' );    //Страницы
  remove_menu_page( 'edit-comments.php' );          //Комментарии
 // remove_menu_page( 'themes.php' );                 //Внешний вид
//  remove_menu_page( 'plugins.php' );                //Плагины
  remove_menu_page( 'users.php' );                  //Пользователи
  //remove_menu_page( 'tools.php' );                  //Инструменты
 // remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menus' );

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Верхнее меню' );
	register_nav_menu( 'footer', 'Меню в подвале' );
	add_theme_support( 'post-thumbnails', array( 'post', 'products' ) );
	add_image_size( 'product_thumb', 999, 400 );
	add_image_size( 'team_thumb', 220, 350 );
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

add_action('customize_register', function($customizer) {
	$customizer->add_section(
		'section_one', array(
			'title' => 'Настройки сайта',
			'description' => '',
			'priority' => 11,
		)
	);
	$customizer->add_setting('phone1', 
		array('default' => '071 310 31 37')
	);
	
	$customizer->add_control('phone1', array(
			'label' => 'Телефон 1',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_setting('phone2', 
		array('default' => '050 651 18 41')
	);
	
	$customizer->add_control('phone2', array(
			'label' => 'Телефон 2',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_setting('adress1', 
		array('default' => 'Мира, 13')
	);
	
	$customizer->add_control('adress1', array(
			'label' => 'Адрес 1',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_setting('adress2', 
		array('default' => 'Ильича, 14к12')
	);
	
	$customizer->add_control('adress2', array(
			'label' => 'Адрес 2',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_setting('adress3', 
		array('default' => 'Постышева, 109')
	);
	
	$customizer->add_control('adress3', array(
			'label' => 'Адрес 3',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_setting('schedule', 
		array('default' => 'Пн-Вс с 8:00 до 20:00')
	);
	
	$customizer->add_control('schedule', array(
			'label' => 'Рабочие часы',
			'section' => 'section_one',
			'type' => 'text',
		)
	);

	$customizer->add_section(
		'section_two', array(
			'title' => 'Настройки обучения',
			'description' => '',
			'priority' => 12,
		)
	);

	$customizer->add_setting('telephone3', 
		array('default' => '071 475 40 41')
	);
	
	$customizer->add_control('telephone3', array(
			'label' => 'Номер школы авторских методик',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
	$customizer->add_setting('question1', 
		array('default' => 'Конечно, для Вас у нас есть базовые курсы: аппаратный педикюр (Введение в подологию); интеллектуальный аппаратный маникюр; массаж в подологии')
	);
	
	$customizer->add_control('question1', array(
			'label' => 'А можно ли начать учиться с нуля?',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
	$customizer->add_setting('question2', 
		array('default' => 'В данный момент мы проводим стажировки по актуальным вопросам подологи: стержневые мозоли; трещины, гиперкератоз; грибковые поражения ногтей и кожи; бородавки; протезирование ногтевой пластины; возрастной пациент в кабинете педикюра')
	);
	
	$customizer->add_control('question2', array(
			'label' => 'Могу ли я повысить квалификацию у вас?',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
	$customizer->add_setting('question3', 
		array('default' => 'Вы выбираете удобный день и интересующую Вас тему из предложенных выше. Вносите предоплату и приходите в назначенный день, с 9:00 до 15:00 вы проходите наши курсы по авторсим методикам')
	);
	
	$customizer->add_control('question3', array(
			'label' => 'Хочу начать учиться. Что мне делать?',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
});
	



?>
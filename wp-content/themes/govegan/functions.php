<?php
show_admin_bar(false);
remove_action('wp_head', 'rss_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_filter('the_content', 'wpautop');

//include styles and scripts
add_action( 'wp_enqueue_scripts', 'govegan_styles' );

function govegan_styles() {
    wp_enqueue_style('style', get_stylesheet_uri() );

    wp_register_style('my-style', get_stylesheet_directory_uri() . '/css/style.min.css');
    wp_enqueue_style('my-style');

    wp_deregister_script('jquery');
    wp_register_script('index', get_stylesheet_directory_uri() . '/js/index.js', array(), null, true);
    wp_enqueue_script('index');
}

add_filter( 'get_custom_logo', 'wecodeart_com' );

function wecodeart_com() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $img = wp_get_attachment_image_url($custom_logo_id);
    $html = sprintf( '<a href="%1$s"><object type="image/svg+xml" data="'. $img .'">%2$s</object></a>',
        esc_url( '/' ),
        wp_get_attachment_image( $custom_logo_id, 'full', false, array(
            'class'    => 'custom-logo',
        ) )
    );
    return $html;
}

function debug($bug) {
    echo "<pre>";
    print_r($bug);
    echo "</pre>";
}

add_filter( 'upload_mimes', 'upload_allow_types' );
function upload_allow_types( $mimes ) {
    // разрешаем новые типы
    $mimes['svg']  = 'text/plain'; // image/svg+xml
    // отключаем имеющиеся
    unset( $mimes['mp4a'] );

    return $mimes;
}

register_nav_menus(array(
    'header'    => 'Главное меню',   //Название месторасположения меню в шаблоне
    'bottom' => 'Меню в футере',
    'mobile' => 'Мобильное меню'
));

function mytheme_customize_register( $wp_customize ) {
    /*
    Добавляем секцию в настройки темы
    */
    $wp_customize->add_section(
    // ID
        'data_site_section',
        // Arguments array
        array(
            'title' => 'Данные сайта',
            'capability' => 'edit_theme_options',
            'description' => "Тут можно указать данные сайта"
        )
    );
    /*
    Добавляем поле ссылки с телефоном
    */
    $wp_customize->add_setting(
    // ID
        'theme_contacttext',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
    // ID
        'theme_contacttext_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Текст ссылки телефона",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'theme_contacttext'
        )
    );
    /*
    Добавляем поле телефона site_telephone
    */
    $wp_customize->add_setting(
    // ID
        'site_telephone',
        // Arguments array
        array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
    // ID
        'site_telephone_control',
        // Arguments array
        array(
            'type' => 'text',
            'label' => "Текст с телефоном",
            'section' => 'data_site_section',
            // This last one must match setting ID from above
            'settings' => 'site_telephone'
        )
    );

}
add_action( 'customize_register', 'mytheme_customize_register' );





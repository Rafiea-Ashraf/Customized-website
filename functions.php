<?php
function traveler_files(){
	 wp_enqueue_style('css-files', get_stylesheet_uri());
	 wp_enqueue_style('website', get_theme_file_uri('/css/style.css'));
	wp_enqueue_style('animate-css', get_theme_file_uri('/css/animate.css'));
    wp_enqueue_style('bootstrap-datepicker.min-css', get_theme_file_uri('/css/bootstrap-datepicker.min.css'));
    wp_enqueue_style('bootstrap-css',get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('flexslider-css', get_theme_file_uri('/css/flexslider.css'));
    wp_enqueue_style('icomoon-css', get_theme_file_uri('/css/icomoon.css'));
    wp_enqueue_style('slicknav-css', get_theme_file_uri('/css/slicknav.min.css'));
    wp_enqueue_style('magnific-popup-css', get_theme_file_uri('/css/magnific-popup.css'));
    wp_enqueue_style('owl.carousel.min-css', get_theme_file_uri('/css/owl.carousel.min.css'));
    wp_enqueue_style('owl.theme.default.min-css', get_theme_file_uri('/css/owl.theme.default.min.css'));
    wp_enqueue_style('style-css', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('themify-icons-css', get_theme_file_uri('/css/themify-icons.css'));

	wp_enqueue_script('bootstrap-datepicker', get_theme_file_uri('/js/bootstrap-datepicker.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('google_map', get_theme_file_uri('/js/google_map.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('jquery.countTo', get_theme_file_uri('/js/jquery.countTo.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('jquery.easing.1.3', get_theme_file_uri('/js/jquery.easing.1.3.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('jquery.easypiechart', get_theme_file_uri('/js/jquery.easypiechart.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('jquery.magnific-popup', get_theme_file_uri('/js/jquery.magnific-popup.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('jquery.stellar', get_theme_file_uri('/js/jquery.stellar.min.js'), array('jquery'), 1.0, true);


}
add_action('wp_enqueue_scripts','traveler_files');
?>

<!-- Add support for navigation menus -->
<?php
function theme_register_menus() {
    register_nav_menus(
        array(
            'Menu' => __( 'Menu', 'your-theme-textdomain' ),
        )
    );
}
add_action( 'after_setup_theme', 'theme_register_menus' );

// Add support for widgets
function theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'your-theme-textdomain' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'your-theme-textdomain' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'theme_widgets_init' );

?>

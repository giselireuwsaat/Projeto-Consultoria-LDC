<?php




function apoena_style()
{
    
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans:wght@300&family=Philosopher&display=swap');
    wp_enqueue_style('font_brand', get_template_directory_uri() . '/assets/fonts/narkisim.ttf');
    wp_enqueue_style('bootstrap-grid_css', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
    wp_enqueue_style('bootstrap-grid_min_css', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap-reboot_css', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css');
    wp_enqueue_style('bootstrap-reboot_min_css', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('bootstrap_min_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-grid_css_map', get_template_directory_uri() . '/assets/css/bootstrap-grid.css.map');
    wp_enqueue_style('bootstrap-grid_min_css_map', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css.map');
    wp_enqueue_style('bootstrap-reboot_css_map', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css.map');
    wp_enqueue_style('bootstrap-reboot_min_css_map', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css.map');
    wp_enqueue_style('bootstrap_css_map', get_template_directory_uri() . '/assets/css/bootstrap.css.map');
    wp_enqueue_style('bootstrap_min_css_map', get_template_directory_uri() . '/asset/css/bootstrap.min.css.map');
    wp_enqueue_style('style', get_stylesheet_uri());
    

    wp_enqueue_script('bootstrap_bundle_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array('jquery'), '', true);
    // wp_enqueue_script('bootstrap_bundle_js_map', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js.map', array(), '', true);
    wp_enqueue_script('bootstrap_bundle_min_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '', true);
    // wp_enqueue_script('bootstrap_bundle_min_js_map', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js.map', array(), '', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '', true);
    // wp_enqueue_script('bootstrap_js_map', get_template_directory_uri() . '/assets/js/bootstrap.js.map', array(), '', true);
    wp_enqueue_script('bootstrap_min_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true);
    // wp_enqueue_script('bootstrap_min_js_map', get_template_directory_uri() . '/assets/js/bootstrap.min.js.map', array(), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
    // wp_enqueue_script('main_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');

    
    }

    add_theme_support( 'post-thumbnails' );
    

add_action('wp_enqueue_scripts','apoena_style',0);

add_action('widgets_init','side_bar');

function side_bar() {
    register_sidebar(
        array(
            'name' => 'Barra Lateral Blog',
            'id' => 'barra_lateral1',
            'description' => 'Barra Lateral Blog',
            'before_widget' => '<div class="card my-4">',
            'after_widget' => '</div>',
            'before_title'=>'<h4 class="card-header">',
            'after_title'=>'</h4>',

        )

        );
}

?>
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


add_action('wp_enqueue_scripts','apoena_style');
add_action( 'widgets_init', 'resultados_sidebars');  




function resultados_sidebars(){
register_sidebar(
array(
'name' => 'resul1',
'id' => 'resul1', 
'description' => 'Type any text here',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title'=>'<h2 class="widget-title">',
'after_title'=>'</h2>'
)
);
register_sidebar(
    array(
    'name' => 'resul2',
    'id' => 'resul2', 
    'description' => 'Type any text here',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title'=>'<h2 class="widget-title">',
    'after_title'=>'</h2>'
    )
    );
    register_sidebar(
        array(
        'name' => 'resul3',
        'id' => 'resul3', 
        'description' => 'Type any text here',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
        )
        );
        register_sidebar(
            array(
            'name' => 'resul4',
            'id' => 'resul4', 
            'description' => 'Type any text here',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title'=>'<h2 class="widget-title">',
            'after_title'=>'</h2>'
            )
            );
}

function config_theme(){    
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support(
        'post-formats',
        array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        )
    );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );
}


add_action('config_theme',0);



// function add_favicon() {
//     echo '<link rel="shortcut icon" sizes="32x32" type="image/png" href="'.get_template_directory_uri().'/img/Logo Alta Resolucao PPT.png">;
// }

// add_action('add_favicon')
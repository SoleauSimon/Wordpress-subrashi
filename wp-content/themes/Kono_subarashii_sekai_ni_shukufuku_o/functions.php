<?php


add_theme_support('post-thumbnails');




add_action('wp_enqueue_scripts', 'sk_wp_enqueue_scripts');

function sk_wp_enqueue_scripts() {
    $path = get_stylesheet_directory_uri();

    $css = array(
        'main'  => $path . '/assets/css/main.css'
    );


    foreach ($css as $id => $path_file) {
        wp_register_style($id, $path_file, array(), false, 'all');
        wp_enqueue_style($id);
    }


    $js = array(
        'jquery'   => $path . '/assets/js/jquery.min.js',
        'scrolly'   => $path . '/assets/js/jquery.scrolly.min.js',
        'scrollex'   => $path . '/assets/js/jquery.scrollex.min.js',
        'skel'   => $path . '/assets/js/skel.min.js',
        'util'   => $path . '/assets/js/util.js',
        'main'  => $path . '/assets/js/main.js'
    );


    wp_deregister_script('jquery');

    foreach ($js as $id => $path_file) {
        wp_register_script($id, $path_file, array(), false, true);
        wp_enqueue_script($id);
    }

}

function bonjour() {
    register_nav_menu('header-menu',__( 'Header Menu', 'subarashii' ));
}
add_action( 'init', 'bonjour' );


function wpc_colonne($columns) {
    return array_merge( $columns,
        array('thumb' => __('Images à la une')) );
}
add_filter('manage_posts_columns' , 'wpc_colonne');
add_action('manage_posts_custom_column', 'data_colonne');
function data_colonne($name) {
    global $post;
    switch ($name) {
        case 'thumb':
            if(has_post_thumbnail($post->ID))
            {
                ?>
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <?php the_post_thumbnail(array(70,70));?>
                </a>
                <?php
            }
            else
            {
                _e('No Thumbnail','twentyeleven');
            }
            break;
    }
}
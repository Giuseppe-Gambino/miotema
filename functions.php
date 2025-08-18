<?php
function mio_tema_enqueue() {
    

    wp_enqueue_style(
        'mio-stile', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        '1.0'
    );

    wp_enqueue_style(
        'mio-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/src/output.css',
    );

    wp_enqueue_script(
        'mio-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'mio_tema_enqueue');
?>
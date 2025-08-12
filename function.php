<?php
function mio_tema_enqueue() {
    wp_enqueue_style(
        'mio-stile', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'mio_tema_enqueue');

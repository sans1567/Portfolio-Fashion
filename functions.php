<?php

    function portfolio_fashion_enqueue_scripts() {

        wp_enqueue_style(
            'Portfolio_Fashion-main',
            get_template_directory_uri() . '/assets/css/main.css',
            array(),
            '1.0'
        );
    }

    add_action('wp_enqueue_scripts', 'portfolio_fashion_enqueue_scripts');

    add_action('wp_body_open', function(){
        //挿入したいソースコード記述//
    })
    
?>
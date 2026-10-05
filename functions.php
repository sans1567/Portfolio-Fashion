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
    });

    function portfolio_register_post_types() {

        register_post_type('collection', [
            'labels' => [
                'name'          => 'Collection',
                'singular_name' => 'Collection',
                'add_new_item'  => 'Collectionを追加',
                'edit_item'     => 'Collectionを編集',
            ],

            'public' => true,
            'has_archive' => true,

            'supports' => [
                'title',
                'editor',
                'thumbnail',
            ],

            'rewrite' => [
                'slug' => 'collection',
            ],

            'show_in_rest' => true,
        ]);
    }

    add_action('init', 'portfolio_register_post_types');
    
?>
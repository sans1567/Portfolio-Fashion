<?php

    function portfolio_fashion_enqueue_scripts() {

        wp_enqueue_style(
            'Portfolio_Fashion-main',
            get_template_directory_uri() . '/assets/css/main.css',
            array(),
            '1.0'
        );

        wp_enqueue_script(
            'main-js',
            get_template_directory_uri() . '/assets/js/main.js',
            array(),
            '1.0',
        );
    }

    add_action('wp_enqueue_scripts', 'portfolio_fashion_enqueue_scripts');

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
                'custom-fields',
            ],

            'rewrite' => [
                'slug' => 'collection',
            ],

            'show_in_rest' => true,
        ]);

        register_post_type('news', [
            'labels' => [
                'name'          => 'News',
                'singular_name' => 'News',
                'add_new_item'  => 'Newsを追加',
                'edit_item'     => 'Newsを編集',
            ],

            'public' => true,
            'has_archive' => true,

            'supports' => [
                'title',
                'editor',
                'thumbnail',
            ],

            'rewrite' => [
                'slug' => 'news',
            ],

            'show_in_rest' => true,
        ]);
    }

    add_action('init', 'portfolio_register_post_types');

    add_action('after_setup_theme', function() {
        add_theme_support('post-thumbnails');
    });

?>
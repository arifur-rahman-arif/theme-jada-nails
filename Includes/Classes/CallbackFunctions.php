<?php

namespace JadaNails\Includes\Classes;

trait CallbackFunctions {

    public function enqueueAssetFiles() {
        $this->loadStyles();
        $this->loadScripts();
    }

    // // Load all the css files here
    public function loadStyles() {
        wp_enqueue_style('jada-nails-googleFont', '//fonts.googleapis.com/css2?family=Fjalla+One&display=swap');
        wp_enqueue_style('jada-nails-fontawesome', JADA_NAILS_URL . 'Public/Assets/fontawesome/css/all.min.css', [], JADA_NAILS_VERSION, 'all');
        wp_enqueue_style('jada-nails-main', JADA_NAILS_URL . 'Public/Css/main.min.css', [], JADA_NAILS_VERSION, 'all');
        wp_enqueue_style('jada-nails-themeCss', get_stylesheet_uri());
    }

    // // Load all the javascript files here
    public function loadScripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('vmh-main', JADA_NAILS_URL . 'Public/Scripts/main.min.js', ['jquery'], JADA_NAILS_VERSION, true);
    }

    // These are the callback functions after theme initialization
    public function themeInitCallbacks() {
        $this->themeSupport();
        $this->registerMenus();
    }

    // Add all required theme support for wordpress
    public function themeSupport() {
        add_theme_support('menus');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-background');
        add_theme_support('custom-header');
        add_theme_support('custom-logo');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }

    public static function registerMenus() {
        register_nav_menus(array(
            'headerMenu' => __('Header Menu'),
            'footerMenu' => __('Footer Menu')
        ));
    }
}
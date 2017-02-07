<?php

/*
 * Plugin Name:       WP Rest Api V2 Multiple PostTypes
 * Plugin URI:        https://github.com/elevati/wp-api-multiple-posttype
 * Description:       Extension of wp/v2/posts api to allow query multiple post types
 * Version:           1.0.0
 * Author:            ElevatiInfotech
 * Author URI:        https://github.com/elevati
 * License:           GPL-2.0+
 */

/**
 * WP_REST_Multiple_PostType_Controller class.
 */
if (!class_exists('WP_REST_Multiple_PostType_Controller')) {

    require_once dirname(__FILE__) . '/lib/endpoints/class-wp-rest-multiple-posttype-controller.php';
}

function init_wp_rest_multiple_posttype_endpoint() {
    $controller = new WP_REST_Multiple_PostType_Controller();
    $controller->register_routes();
}

/**
 * REST INIT
 */
add_action('rest_api_init', 'init_wp_rest_multiple_posttype_endpoint');


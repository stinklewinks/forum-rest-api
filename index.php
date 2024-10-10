<?php
/*
* Plugin Name: bbPress REST API
* Description: REST API for bbPress
* Version: 1.0
* Author: Drew Winkles
* 
*/

// if ( ! defined( 'ABSPATH' ) ) {
// 	exit;
// }

add_action( 'rest_api_init', function(){

    // Register the route for FORUMS
    register_rest_route('bbpress/v1', '/forums', array(
        'methods' => 'GET',
        'callback' => 'get_forums',
        'permission_callback' => '__return_true' // Allow all users to access the route'
    ));

    // Register route for TOPICS
    register_rest_route('bbpress/v1', '/topics', array(
        'methods' => 'GET',
        'callback' => 'get_topics',
        'permission_callback' => '__return_true' // Allow all users to access the route'
    ));

    // Register route for REPLIES
    register_rest_route('bbpress/v1', '/replies', array(
        'methods' => 'GET',
        'callback' => 'get_replies',
        'permission_callback' => '__return_true' // Allow all users to access the route'
    ));
});

// Get functions for FORUMS
function get_forums()
{
    $args = array(
        'post_type' => 'forum',
        'posts_per_page' => -1 // Get all forums
    );

    $forums = get_posts( $args);
    return rest_ensure_response($forums);
}

// Get TOPICS
function get_topics()
{
    $args = array(
        'post_type' => 'topic',
        'posts_per_page' => -1 // Get all topics
    );
    $topics = get_posts( $args);
    return rest_ensure_response($topics);
}

// GET REPLIES
function get_replies()
{
    $args = array(
        'post_type' => 'reply',
        'posts_per_page' => -1 // Get all replies
    );
    $replies = get_posts( $args);
    return rest_ensure_response($replies);
}
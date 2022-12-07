<?php

/*
Plugin Name: Wordpress Polling
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A WordPress plugin that allows users to create polls for their website.
Version: 1.0
Author: Jack Rogers, Jakob Crossland
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

include 'poll.php';
include 'data.php';

/* creates tab in dashboard */
function makePoll()
{
    $stuff = array(
        'labels' => array(
            'name' => 'Polls',
            'singular_name' => 'Poll',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'polls'),
        'supports' => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('poll', $stuff);
}

add_action('init', 'makePoll');

function metaBox()
{
    add_meta_box(
        'poll-options',
        'Poll Options',
        'displayBox',
        'poll',
        'normal',
        'default'
    );
}

add_action('add_meta_box', 'metaBox');

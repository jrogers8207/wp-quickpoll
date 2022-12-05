<?php

/*
Plugin Name: Wordpress Polling
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Jack Rogers, Jakob Crossland
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

include 'poll.php'; /* can't make new files for some reason */
include 'data.php';

if ( /* user adds another option to poll */ ) {
    appendPoll();
}


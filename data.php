<?php

/* when poll is created set new variables */
function new_results($list)
{
    foreach ($list as $value) {
        ${"$value"} = array("$value", 0);
    }
}

/* when post check results and add to total */
function results()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["poll"])) {
            echo "Please select an option.";
        } else {
            $id = get_the_ID();
            $list = get_post_meta($id, '', false);
            foreach ($list as $value) {
                if (${"$value"}[0] == "$value") {
                    ${"$value"}[1]++;
                }
            }
        }
    }
}

add_action('get_post_meta', 'results');

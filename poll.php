<?php

/* makes the poll */
function displayBox()
{
    ?>
    <form action='data.php' method="POST"><?php
        $id = get_the_ID();
        $list = get_post_meta($id, '', false);
        foreach ($list as $value) {
            ?>
            <input type="radio" name="poll" value="<?php echo $value; ?>"><?php echo $value; ?><br>
            <?php
        }
        ?>
    </form>
    <?php
    new_results($list);
}

add_action('get_post_meta', 'displayBox');
/* Doesn't seem to work. HTML does not mesh with WordPress post editor? */

<?php
include 'data.php';

$row = 0;
function appendPoll($results, $row): void
{
    $getName = $getUserInput;
    $row++;
    array_push($results, 0);
    go_to_html_form_somehow();
}

?>
<form action="send_to_Data.php" method="post">
    <div>
        <input type="radio" name="poll" id="poll<?php echo $row; ?>" value="<?php echo $ ?>"/>
        <label for="poll<?php echo $row; ?>"><?php echo $getName; ?></label>
        <br>
    </div>
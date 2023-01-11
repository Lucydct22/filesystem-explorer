<?php
$formats   = array('.jpg', '.png', '.gif', '.doc', '.csv', '.txt', '.pdf', '.zip', '.rar', '.mp4', '.mp3');
$directory = 'root/assets';
if (isset($_POST['boton'])) {
    $name  = $_FILES['archivo']['name'];
    $saved = $_FILES['archivo']['tmp_name'];
    $ext              = substr($name, strrpos($name, '.'));
    if (in_array($ext, $formats)) {
        if (move_uploaded_file($saved, "$directory/$name")) {
            echo "Congratulations! $name uploaded correctly";
        } else {
            echo ' sorry, an error occurred';
        }
    }
}


if ($dir = opendir($directory)) {
    while ($archive = readdir($dir)) {
        if ($archive != '.' && $archive != '..') {
            echo '<div class="col-sm-3 col-xs-12">';
            echo "Archive: <strong>$archive</strong><br />";

            echo '</div>';
        }
    }
}

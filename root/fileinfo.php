<?php

$archive = $_FILES["uploadedFile"]['name'];
$saved = $_FILES["uploadedFile"]['tmp_name'];
$btn = $_POST["uploadBtn"];


if (!file_exists("uploadBtn")) {
    mkdir("uploadBtn", 0777, false);
    if (file_exists("uploadBtn")) {
        if (move_uploaded_file($saved, "uploadBtn/" . $archive)) {
            echo "Archive saved succesfully";
        } else {
            echo "Archive could not be saved";
        }
    }
} else {
    if (move_uploaded_file($saved, "uploadBtn/" . $archive)) {
        echo "Archive saved succesfully";
    } else {
        echo "Archive could not be saved";
    }
    ;
}
?>
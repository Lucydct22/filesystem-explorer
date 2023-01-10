<?php

print_r($_FILES);

$name = $_FILES['uploadBtn']['name'];
$saved = $_FILES['uploadBtn']['tmp_name'];

if (!file_exists("uploadBtn")) {
    mkdir("uploadBtn", 0777, true);
    if (file_exists("uploadBtn")) {
        if (move_uploaded_file($saved, "uploadBtn/" . $name)) {
            echo "Archive saved succesfully";
        } else {
            echo "Archive could not be saved";
        }
    }
} else {
    if (move_uploaded_file($saved, "uploadBtn/" . $name)) {
        echo "Archive saved succesfully";
    } else {
        echo "Archive could not be saved";
    }
};

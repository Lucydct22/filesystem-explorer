<?php
$old = 'old.txt';
$new = 'new.txt';
$rename = rename($old, $new);

if($rename){
    echo "succes";
}else{
    echo "not succes";
}

?>
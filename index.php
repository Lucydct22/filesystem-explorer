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


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="card">

            <div class="card-block">
                <div class="row">
                    <?php
                    if ($dir = opendir($directory)) {
                        while ($archive = readdir($dir)) {
                            if ($archive != '.' && $archive != '..') {
                                echo '<div class="col-sm-3 col-xs-12">';
                                echo "Archive: <strong>$archive</strong><br />";
<<<<<<< HEAD

=======
                                echo $_FILES['archivo']['size']/1000000 . 'bytes';
>>>>>>> 1d2d22f0552e7dc5f109dd79d7f76680460f02ca
                                echo '</div>';
                            }
                        }
                    }
<<<<<<< HEAD
                    echo $_FILES['archivo']['size'] / 1000000;
=======
>>>>>>> 1d2d22f0552e7dc5f109dd79d7f76680460f02ca
                    ?>
                </div>
            </div>
        </div>
        <h1>Selecciona tu archivo</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="archvio">File</label>
                <input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">

            </div>
            <button type="submit" class="btn btn-primary" name="boton">Upload</button>
        </form>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>
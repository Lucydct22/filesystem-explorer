<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <form method="POST" action="fileinfo.php" enctype="multipart/form-data">
        <div>
        <div class="form-group">
      <label for="formFile" class="form-label mt-4">Upload a File</label>
      <input class="form-control" type="file" id="formFile" name="uploadedFile">
      <input type="submit" name="uploadBtn" value="Upload" />
       </div>
</div>
    </form>

    <div class="options">
        <a href="">Edit</a>
        <a href="">Upload</a>
        <a href="">Create</a>
        <a href="">Delete</a>


    </div>
    <div class="main-container">
        <div class="files-container">
            <p>Root</p>

        </div>

        <div class="content-container">

        </div>

        <div class="edition-container">
            <ul>
                <li>Creation date</li>
                <li>Last modified date</li>
                <li>Extension</li>
                <li>Size</li>
            </ul>
        </div>
        <div class="erase-container">
            <ul>
                <li>Trash</li>
            </ul>
        </div>
    </div>
</body>

</html>
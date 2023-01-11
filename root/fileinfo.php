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
            echo "Sorry, file already exists.";
            $uploadOk = 0;
            echo "Archive could not be saved";
        }
    }
} else {
    if (move_uploaded_file($saved, "uploadBtn/" . $archive)) {
        echo "Archive saved succesfully";
    } else {
        echo "Archive could not be saved";
    }
};





//move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]); 
//if( $filetype == "image" ) 

//if ($_FILES['file']['size'] > 0) {
   // if ($_FILES['file']['size'] <= 183400) {
//if (move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . $_FILES['file']['name'])) {
//
 //           <script type="text/javascript">             parent.document.getElementById("message").innerHTML = "";
         //       parent.document.getElementById("file").value = "";
          //      window.parent.uploadpic("<?php echo 'img/' . $_FILES['file']['name']; ")
      //</script>
      //  <?php
      //  } else {
        //    <script type="text/javascript">
           //     parent.document.getElementById("message").innerHTML = '<font color="#dedeff">file upload error</font>';
          //  </script>
     //   <?php
     //   }
  //  } else {
      
       // <script type="text/javascript">
        //    alert('$file size is too big');
          //  parent.document.getElementById("message").innerHTML = '<font color="#dedeff">file size is too big</font>';
       // </script>

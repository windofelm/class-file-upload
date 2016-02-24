
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP File Uploader Class V01</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="fileImage" id="fileImage"/>
    <input type="submit" name="submit" value="Yükle"/>
</form>


<?php

    // index

    error_reporting(E_ALL);

    include 'classes/FileUploader.php';

    $uploader = new FileUploader();

    if($_POST){

        $image = $uploader->uploadFile('images',2048000,$_FILES['fileImage'],'yeniDosya');

        //echo json_encode($image);

        if ($image['error'] == true){

            echo '<div class="alert alert-danger" role="alert">'.json_encode($image).'</div>';
        }else{
            echo '<div class="alert alert-success" role="alert">'.json_encode($image).'</div>';
        }

    }


?>



</body>
</html>

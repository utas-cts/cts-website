<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Add poster</title>
    <meta name='viewport' content ='width=device-width,initial-scale=1,user-scalable=yes' />
    <link rel='stylesheet' href='/css/style.css'>
  </head>
 <body>
<?php
    require 'check_login.php';
    require 'db_connect.php';
if (!isset($_POST['submit'])) {
    header('Location: index.php');
    die();
}
    require 'navbar.php';
    $uploadOk = true;
    $file_exists = false;
    $poster_directory = 'posters/';
    $check = getimagesize($_FILES['poster_image']['tmp_name']);
if ($check !== false) {
    $tempfile_name=$_FILES['poster_image']['tmp_name'];
    $convertedImage = new Imagick($tempfile_name);
    $convertedImage->setImageFormat('jpg');
    if ($convertedImage->getImageWidth() > 1500 || $convertedImage->getImageHeight() > 1500) {
        $convertedImage->resizeImage(1500, 1500, imagick::FILTER_CATROM, 1, true);
    }
    $convertedImage->writeImages($tempfile_name, true);
    $hash = sha1_file($tempfile_name);
    $poster_filename = $hash . '.jpg';
    $poster_file = $poster_directory . $poster_filename;
    if (file_exists($poster_file)) {
        echo "File exists";
        $file_exists = true;
    }
    if ($_FILES['poster_image']['size'] > 20000000) {
        echo "File is too large";
        $uploadOk = false;
    }
} else {
    echo 'File is not an image';
    $uploadOk = false;
}
if ($uploadOk) {
    if ($file_exists) {
        $query = $mysqli->prepare(
            'INSERT INTO posters (filename, event_date, event_type, short_name) values (?, ?, ?, ?)'
        );
        $query->bind_param(
            'ssss',
            $poster_filename,
            $_POST['event_date'],
            $_POST['event_type'],
            $_POST['short_name']
        );
        $query->execute();
        header('Location: index.php');
    } else {
        if (move_uploaded_file($tempfile_name, $poster_file)) {
            $query = $mysqli->prepare(
                'INSERT INTO posters (filename, event_date, event_type, short_name) values (?, ?, ?, ?)'
            );
            $query->bind_param(
                'ssss',
                $poster_filename,
                $_POST['event_date'],
                $_POST['event_type'],
                $_POST['short_name']
            );
            $query->execute();
            header('Location: index.php');
        } else {
            echo 'File could not be moved. Contact the admin';
        }
    }
}
?>
 </body>
</html>

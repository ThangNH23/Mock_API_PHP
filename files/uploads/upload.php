<?php
error_reporting(0);
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file'] ['name'];
        $fileTmpName = $_FILES['file'] ['Tmp_name'];
        $fileSize = $_FILES['file'] ['Size'];
        $fileError = $_FILES['file'] ['Error'];
        $fileType = $_FILES['file'] ['Type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: index.php?uploadsuccess");
                }
                else {
                    echo "your file is too big!";
                }
            }
            else {
                echo "There was an error uploading your file!";
            }
        }
        else {
            echo "you can not upload files of this type!";
        }

    }
?>
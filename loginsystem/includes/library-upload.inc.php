<?php

if (isset($_POST['submit'])) {

    $newFileName = $_POST['filename'];

    if (empty($_POST['submit'])) {
        $newFileName = "library";
    } else {
        $newFileName = strtolower(str_replace(" ", "_", $newFileName));
    }
    $fileTitle = $_POST['filetitle'];
    $fileDesc = $_POST['filedesc'];

    $file = $_FILES['file'];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];


}
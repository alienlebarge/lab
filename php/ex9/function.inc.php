<?php

function download() {
    $filename = 'monkey.gif';
    $mimetype = 'image/gif';
    $data = file_get_contents($filename);
    $size = strlen($data);

    header('Content-Disposition:attachment;filename='.$filename);
    header('Content-Length: ' . $size);
    header('Content-Type: ' . $mimetype);
    echo $data;
}

function upload() {
    $uploaddir = '/lab/php/ex9';
    $uploadfile = $_SERVER['DOCUMENT_ROOT'] . $uploaddir . '/' . basename($_FILES['userfile']['name']);

    if (
        file_exists($_FILES['userfile']['tmp_name'])
        && is_uploaded_file($_FILES['userfile']['tmp_name'])
    ) {
        move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile);
    }

}
?>
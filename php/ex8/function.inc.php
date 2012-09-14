<?php

function checkName($name) {
    $pattern = '/^[[:alpha:] -]{3,}$/';
    return preg_match($pattern, $name);

}

function checkPhone($phone) {
    $pattern = '/^([[:digit:]]){10}$/';
    return preg_match($pattern, $phone);
}


function checkUser($redirect=0) {

    if ((isset($_SESSION['username'])) && (isset($_SESSION['password']))) {

        if (($_SESSION['username'] === 'aellen') && ($_SESSION['password'] === 'aellen')) {
            return true;
        } else {
            // redirect
            if ($redirect == 1) {
                header('Location: ./login.php');
            }
        }
    } else {
        // redirect
        if ($redirect == 1) {
            header('Location: ./login.php');
        }
    }
}
?>
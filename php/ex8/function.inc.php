<?php

function checkName($name) {
    $pattern = '/^[[:alpha:] -]{3,}$/';
    return preg_match($pattern, $name);

}

function checkPhone($phone) {
    $pattern = '/^([[:digit:]]){10}$/';
    return preg_match($pattern, $phone);
}

?>
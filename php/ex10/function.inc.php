<?php

$link = mysqli_connect('localhost', 'root', 'root','adb');

if ((isset($_POST['submitted'])) && ($_POST['submitted'] == 1)) {
    insertPeople($link);
}


$query = 'SELECT * FROM people';

$result = mysqli_query($link, $query);


/*
 * Affichage
 */
function listPeople($result) {

    while($line = mysqli_fetch_row($result)) {
        foreach($line as $val){
            echo $val . '<br />';
        }
    }
}

function insertPeople($link){

    $query = 'INSERT INTO people (first, name, phone) VALUES ("';
    $query.= mysqli_real_escape_string($link, $_REQUEST['first_name']) . '","';
    $query.= mysqli_real_escape_string($link, $_REQUEST['last_name']) . '","';
    $query.= mysqli_real_escape_string($link, $_REQUEST['phone']) . '")';

    $res = mysqli_query($link, $query) or die ('Query ERROR : ' . mysqli_error($link));

}



?>
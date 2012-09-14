<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<form method="post" action="ex7.php">
    <label>First Name</label><input type="text" name="first_name" value="first name"/><br />
    <label>Last Name</label><input type="text" name="last_name" value="last name"/><br />
    <label>Phone</label><input type="text" name="phone" value="phone"/><br />
    <label>Male</label><input type="radio" name="gender" value="M" checked="checked" />
    <label>Female</label><input type="radio" name="gender" value="F" /><br />
    <label>Hobbie(s)</label><select name="hobbie[]" multiple="multiple">
        <option value="sport">Sport</option>
        <option value="games">Games</option>
        <option value="food">Food</option>
        <option value="music">Music</option>
    </select><br />
    <input type="hidden" name="submitted" value="1">
    <input type="submit" value="Submit" />
</form>

<h2>Resultat</h2>

<?php

require ('function.inc.php');


// check si le formulaire a été soumis
if ($_POST['submitted']==1) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];


    if (/*checkName($first_name) && checkName($last_name) &&*/ checkPhone($phone)) {

        echo 'Prenom : ' . $_POST['first_name'] . '<br>';
        echo 'Nom : ' . $_POST['last_name'] . '<br>';
        echo 'Telephone : ' . $_POST['phone'] . '<br>';
        echo 'Genre : ' . $_POST['gender'] . '<br>';

        // chech si il y a au moins un hobbie
        if (isset($_POST['hobbie'])){

            $hobbie = $_POST['hobbie'];
            $nb = count($hobbie);

            for ($i = 0; $i < $nb; $i++) {
                echo 'Hobbie ' . $i . ' : ' . $hobbie[$i];
            }
        }
    } else {
        echo 'Il y a une erreur dans le formulaire';
    }
}

?>

</body>
</html>
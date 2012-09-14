<?php
require ('function.inc.php');

// check si le formulaire a été soumis
if ((isset($_POST['submitted'])) && ($_POST['submitted']==1)) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];


    if (checkName($first_name) && checkName($last_name)) {

        // Cookie
        setcookie('first_name',$first_name,time() + 30);
        setcookie('last_name',$last_name,time() + 30);

    } else {

        echo 'Il y a une erreur dans le formulaire';
    }

    // Suppression du Cookie
    if (isset($_POST['forgetMe'])) {
        setcookie('first_name', '', time() - 3600);
        $first_name = 'Prenom';
        setcookie('last_name', '', time() - 3600);
        $last_name = 'Nom';
    }

} else {

    if (isset($_COOKIE['first_name'])) {
        $first_name = $_COOKIE['first_name'];
    } else {
        $first_name = 'Prenom';
    }

    if (isset($_COOKIE['last_name'])) {
        $last_name = $_COOKIE['last_name'];
    } else {
        $last_name = 'Nom';
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<form method="post" action="index.php">
    <label>First Name</label><input type="text" name="first_name" value="<?php echo $first_name; ?>" /><br />
    <label>Last Name</label><input type="text" name="last_name" value="<?php echo $last_name; ?>" /><br />
    <label>Obliez-moi</label><input type="checkbox" name="forgetMe" /><br />
    <input type="hidden" name="submitted" value="1">
    <input type="submit" value="Submit" />
</form>

<h2>Resultat</h2>

<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

?>

</body>
</html>
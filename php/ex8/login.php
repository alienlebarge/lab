<?php
// démarrage de la session
session_start();

require ('function.inc.php');

checkUser();


// gestion du formulaire
// check si le formulaire a été soumis
if ((isset($_POST['submitted'])) && ($_POST['submitted']==1)) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    if (($_POST['process'] == 'in') && (checkUser(0))) {
        session_destroy();
    }
}

if (checkUser()) {
    $button = 'Logout';
} else {
    $button = 'Login';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<h1>Login</h1>
<form method="post" action="login.php">
    <label>Utilisateur</label><input type="text" name="username" value="" /><br />
    <label>Mot de passe</label><input type="password" name="password" value="" /><br />
    <input type="hidden" name="submitted" value="1">
    <input type="hidden" name="process" value="<?php echo checkUser() ? 'in' : 'out'; ?>">
    <input type="submit" value="<?php echo $button; ?>" />
</form>

<?php

echo '<h2>POST</h2><pre>';
print_r($_POST);
echo '</pre>';
echo '<h2>SESSION</h2><pre>';
print_r($_SESSION);
echo '</pre>';

if (checkUser($_SESSION['username'], $_SESSION['password'])) {echo '<p>Vous y etes !</p>';}

?>

</body>
</html>
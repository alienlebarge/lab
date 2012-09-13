<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php
echo "<h1>Mon premier script PHP</h1>";

$prenom = 'Cedric';
$nom = 'Aellen';
$nom_var = 'prenom';

$date = date("d m Y");

$length = strlen($$nom_var);

echo '<p>Bonjour, '.$$nom_var.'</p>';
echo '<p>Nous sommes le '.$date.'</p>';

echo '<p>Longeur : '.$length.'</p>';

?>

</body>
</html>
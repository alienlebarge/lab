<?php
require('function.inc.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<h2>Resultat</h2>

<?php
listPeople($result);
?>

<h2>Formulaire</h2>

<form method="post" action="index.php">
    <label>First Name</label><input type="text" name="first_name" value="first name"/><br />
    <label>Last Name</label><input type="text" name="last_name" value="last name"/><br />
    <label>Phone</label><input type="text" name="phone" value="phone"/><br />
    <input type="hidden" name="submitted" value="1">
    <input type="submit" value="Submit" />
</form>

</body>
</html>

<?php

mysqli_free_result($result);
mysqli_close($link);

?>
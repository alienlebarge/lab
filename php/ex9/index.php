<?php
require ('function.inc.php');

if ((isset($_GET['download'])) && ($_GET['download'] == 1)) {
    download();
}

if ((isset($_POST['process'])) && ($_POST['process'] == 1)) {
    upload();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<h1>Gestion de fichier</h1>

<h2>Download</h2>
<img src="monkey.gif" alt="un singe" width="100px" />

<p><a href="?download=1" >T&eacute;l&eacute;charger cette image.</a></p>

<h2>Upload</h2>

<form method="post" action="index.php" enctype="multipart/form-data">
    <input type="file" name="userfile"/><br />
    <input type="hidden" name="MAX_FILE_SIZE" value="1024">
    <input type="hidden" name="process" value="1">
    <input type="submit">
</form>

<h3>POST</h3>
<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<h3>FILE</h3>
<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
?>
<h3>SERVER</h3>
<?php
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

echo '<h1>Semaine</h1>';

$tabsemaine = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
$nbrjours = count($tabsemaine);

echo '<pre>';
print_r($tabsemaine);
echo '</pre>';

echo '<p>la semaine compte '.$nbrjours.' jours.</p>';

$last = array_shift($tabsemaine);
// supprime le premier élément du du tableau
array_shift($tabsemaine);

echo '<pre>';
print_r($tabsemaine);
echo '</pre>';

echo $last.' est supprim&eacute;.';

echo '<h1>Phone</h1>';

$tabphone = array('Bruce' => '0791234567', 'Clark' => '0796548732', 'Mike' => '0781112233');

echo '<pre>';
print_r($tabphone);
echo '</pre>';

echo '<p>Le num&eacute;ro de Mike est : '.$tabphone['Mike'].'</p>';

echo '<h1>Server</h1>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';


?>

</body>
</html>
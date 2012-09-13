<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <style>
        .red {
            color: red;
        }
        .blue {
            color: blue;
        }
    </style>
</head>
<body>

<?php

date_default_timezone_set('Europe/Zurich');
$time = date("H:s");
$sec = date("s");

echo '<p>Il est ' . $time . '</p>';

// test si impair ou pair
if ($sec%2==0) {
    $sectext = '<span class="blue">paires</span>';
} else {
    $sectext = '<span class="red">impaires</span>';
}

echo '<p>Les seconde sont ' . $sectext . '.</p>'
?>
</body>
</html>
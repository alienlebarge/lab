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

        .odd {
            background-color: #ccc;
        }

        .even {
            background-color: #fff;
        }
    </style>
</head>
<body>

<?php

echo '<h1>Les multiples de 3</h1>';

/*
 * Multiple de trois
 * Boucle For
 */

echo '<h2>Boucle FOR</h2>';
echo '<ul>';
for($i = 1 ; $i <= 100 ; $i++) {


    if($i % 3 == 0) {
        echo '<li><span class="red">' . $i . '</span></li>';
    } else {
        echo '<li>' . $i . '</li>';
    }

}
echo '</ul>';

/*
 * Multiple de 3
 * Boucle While
 */

echo '<h2>Boucle WHILE</h2>';

echo '<ul>';

$y = 1;
while ($y <= 100) {
    if($y % 3 == 0) {
        echo '<li><span class="red">' . $y . '</span></li>';
    } else {
        echo '<li>' . $y . '</li>';
    }
    $y++;
}

echo '</ul>';

/*
 * Table de multiplication 20*20
 */



$multiple = 20;

/*
echo '<ul>';
for($m = 0 ; $m <=21 ; $m++) {

    if($m % 2 == 0) {
        $class = 'red';
    } else {
        $class = 'blue';
    }

    $resultat = $m * $multiple;
    echo '<li class="' . $class . '">' . $multiple . ' * ' . $m . ' = ' . $resultat . '</li>';

}
echo '</ul>';
*/

echo '<table>';

for($x = 1; $x <= 20 ; $x++) {

    // odd / even
    if($x % 2 == 0) {
        $class = 'odd';
    } else {
        $class = 'even';
    }

    echo '<tr class="' . $class . '">';
    for($y = 1 ; $y <= 20 ; $y++) {
        $resultat = $x * $y;

        // recherche des multiples de 10
        if($resultat % 10 == 0) {
            $resultat = '<span class="red">' . $resultat . '</span>';
        }

        echo '<td>' . $resultat . '</td>';
    }
    $y = 0;
}
echo '</tr>';



echo '</table>';
?>
</body>
</html>
<?php

/*
 * Table demultiplication de deux nombre
 */
function mulTable ($x, $y) {

    echo '<table>';

    for($i = 1; $i <= $x ; $i++) {


        echo '<tr>';

        for($j = 1 ; $j <= $y ; $j++) {
            $resultat = $i * $j;
            echo '<td>' . $resultat . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

}

/*
 * Multiplier un nombre quelconque d'argument
 */

function multiPlus () {

    // nbr d'args
    $vals = func_get_args();
    $res = 1;

    foreach($vals as $oneVal) {

        // Vérifie qu'on n'a pas une string
        // $oneVal + 0 force le type num
        if ($oneVal + 0) {
            $res *= $oneVal;
        }
        // peut s'écrire
        // $rea *= ($oneVal + 0 ? $oneVal : 1);
    }

    return $res;

}

function multiMul($t) {

    // on prend le 1er élément du array
    $val = array_shift($t);

    // check si on est au dernier élément
    if ($val === NULL) {
        return 1;
    }

    //
    return $val * multiMul($t);
}

?>
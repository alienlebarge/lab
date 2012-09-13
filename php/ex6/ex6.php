<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <style>
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

require('function.inc.php');

echo '<h1>Table de multiplication</h1>';

mulTable(2,3);
mulTable(12,30);

echo '<h1>multiPlus</h1>';
echo multiPlus(0,0,0,0);

echo '<h1>multiMul</h1>';
echo multiMul(array(4,6,7,8));
?>
</body>
</html>
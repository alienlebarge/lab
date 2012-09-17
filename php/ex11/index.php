<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

class People{
    public $first;
    public $name;

    function __construct($first = '', $name = '') {
        $this->first = $first;
        $this->name = $name;
    }

    public function sayHello() {
        echo 'Hello, I am ' . $this->first . ' ' . $this->name . '!<br />';
    }

    public static function doSomething($var) {
        echo 'Do something ' . $var . '<br />';
    }
}

$ced = new People();
$bru = new People('Bruce','Wayne');


$ced->first = 'Cedric'; //set les variable mais focntionne uniquement sur les variabel sont public
$ced->name = 'Aellen';

$ced->sayHello();
$bru->sayHello();


People::doSomething('Yop');

?>

</body>
</html>a
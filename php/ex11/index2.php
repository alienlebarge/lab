<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

class Form {

    protected $area;

    function __construct($area) {
        $this->area = $area;
    }

    public function affiche() {
        echo $this->area . '<br/>';
    }

    public function sayHello() {
        echo 'Hello world !<br />';
    }
}


class Round extends Form {

    protected $side;

    function __construct($side) {
        parent::__construct(3);
        $this->side = $side;
    }

    public function affiche() {
        parent::affiche();
        echo $this->side . '<br/>';
    }
}


$r = new Round(4);

$r->affiche();

$r->sayHello();

?>

</body>
</html>
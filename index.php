<?php
class Cat {
    public $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday() {
        $this->age++;
    }

    public function getAge() {
        return $this->age;
    }
}

$mincis = new Cat("Mincis", 0);
$bincis = new Cat("Bincis", 0);

echo $mincis->name;
echo $bincis->name;

$mincis->birthday();
?>

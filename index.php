<?php
class Cat {
    public $name;
    private $age;

    public function birthday() {
        $this->age++;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

$mincis = new Cat();
$mincis->name = "Mincis";
$mincis->setAge(3);

$bincis = new Cat();
$bincis->name = "Bincis";
$bincis->setAge(23);

echo $mincis->name;
echo $bincis->name;

$mincis->birthday();
echo $mincis->name . " age: " . $mincis->getAge();
echo $bincis->name . " age: " . $mincis->getAge();
?>

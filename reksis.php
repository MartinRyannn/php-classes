<?php
class Dog {
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

$reksis = new Dog("Reksis", 6);

echo $reksis->name;
echo $reksis->getAge(); 

$reksis->birthday();
echo $reksis->getAge();


?>

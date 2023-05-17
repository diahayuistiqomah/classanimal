<?php
class Animal {
    private $name;
    private $jenis;

    public function __construct($name, $jenis) {
        $this->name = $name;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah {$this->name} jenis {$this->jenis}.";
    }
}

class Cat extends Animal {
    public function __construct($name) {
        parent::__construct($name, 'kucing');
    }

    public function getInfo() {
        return parent::getInfo() . " Kucing adalah hewan yang suka bermain dan bersih.";
    }
}
class Dog extends Animal {
    public function __construct($name) {
        parent::__construct($name, 'anjing');
    }

    public function getInfo() {
        return parent::getInfo() . " Anjing adalah hewan yang setia dan cerdas.";
    }
}

// Contoh penggunaan class Cat
$animal = new Animal("Harimau", "Karnivora");
echo $animal->getInfo() ."\n";
$cat = new Cat("Kitty");
echo $cat->getInfo() ."\n";
$dog = new Dog("Doggy");
echo $dog->getInfo();


?>
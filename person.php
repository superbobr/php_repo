<?php
class Person {
    function __construct($name, $year, $gender) {
        $this->name = $name;
        $this->year = $year;
        $this->gender = $gender;
        echo "Человек $this->name создан" . PHP_EOL;
    }
    
    public function getName() {
        echo "Имя: $this->name" . PHP_EOL;
    }
    
    public function getYear() {
        echo "Возраст: $this->year" . PHP_EOL;
    }
    
    public function getGender() {
        echo "Пол: $this->gender" . PHP_EOL;
    }
    
    function __destruct() {
        echo "Человек $this->name кикнут";
    }
    
    
}

$person = new Person(readline(), readline(), readline());
$person->getName();
$person->getYear();
$person->getGender();
unset($person);

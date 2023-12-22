<?php

class SuperStar {
    public $name;
    public $age;
    public $fansCount;

    public $info;
    public function __construct($array) {
        $this->info = json_decode($array);
        $this->name = $this->info[0];
        $this->age = $this->info[1];
        $this->fansCount = $this->info[2];
    }

    public function __get($name) {
        if($name == 'name') {
            return $this->name;
        } elseif ($name == 'age') {
            return $this->age;
        } elseif ($name == 'fansCount') {
            return $this->fansCount;
        }
    }

    public function __set($name, $value) {
        if($name == 'name') {
            $this->name = $value;
        } elseif ($name == 'age') {
            $this->age = $value;
        } elseif ($name == 'fansCount') {
            $this->fansCount = $value;
        }
    }

}

class Singer extends SuperStar {

    public $soldAlbums;

    public $awards;

    public $genre;
    public function __construct($array)
    {
        parent::__construct($array);
        $this->info = json_decode($array);
        $this->soldAlbums = $this->info[3];
        $this->awards = $this->info[4];
        $this->genre = $this->info[5];
    }

    public function __toString() {
        return "Певец: " . PHP_EOL .
            "Имя: $this->name
Возраст: $this->age
Количество фанатов: $this->fansCount
Количество проданных альбомов: $this->soldAlbums
Количество наград: $this->awards
Жанр музыки: $this->genre";
    }
}

class Actor extends SuperStar {
    public $movies;
    public $awards;
    public $genre;

    public function __construct($array)
    {
        parent::__construct($array);
        $this->info = json_decode($array);
        $this->movies = $this->info[3];
        $this->awards = $this->info[4];
        $this->genre = $this->info[5];
    }

    public function __toString() {
        return "Актер: " . PHP_EOL .
            "Имя: $this->name
Возраст: $this->age
Количество фанатов: $this->fansCount
Количество снятых фильмов: $this->movies
Количество наград: $this->awards
Жанр кино: $this->genre";
    }
}

class Dancer extends SuperStar {
    public $concerts;
    public $awards;
    public $genre;

    public function __construct($array)
    {
        parent::__construct($array);
        $this->info = json_decode($array);
        $this->concerts = $this->info[3];
        $this->awards = $this->info[4];
        $this->genre = $this->info[5];
    }

    public function __toString() {
        return "Актер: " . PHP_EOL .
            "Имя: $this->name
Возраст: $this->age
Количество фанатов: $this->fansCount
Количество выступлений: $this->concerts
Количество наград: $this->awards
Стиль танца: $this->genre";
    }
}

$singer = new Singer(readline());
echo $singer;

$actor = new Actor(readline());
echo $actor;

$dancer = new Dancer(readline());
echo $dancer;
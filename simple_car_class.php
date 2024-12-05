class Car {
    public $brand;
    public $model;
    public $year;
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        echo <<<HEREDOC
Объект создан
Марка автомобиля: $this->brand
Модель автомобиля: $this->model
Год выпуска: $this->year\n
HEREDOC;
    }

    public function __destruct() {
        echo 'Объект удален';
    }
}

$brand = readline();
$model = readline();
$year = (int)readline();


$new_car = new Car($brand, $model, $year);

unset($new_car);

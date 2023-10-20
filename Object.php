An object is an instance of the class.
<?php
class Bike {
public $color;
public $model;
public function __construct($color, $model) {
$this->color = $color;
$this->model = $model;
}
public function message() {
return "My bike is a " . $this->color . " " . $this->model . "!";
}
}
$myBike = new Bike("red", "Honda");
echo $myBike -> message();
?>
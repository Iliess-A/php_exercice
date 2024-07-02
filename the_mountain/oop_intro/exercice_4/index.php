<?php
/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/
class beverage {
    protected string $color; // Change to protected
    private float $price;
    private string $temp;

    public function __construct($color, $price, $temp = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temp = $temp;
    }

    public function return_string() {
        echo "This beverage is $this->temp and $this->color.\n";
    }
}

class beer extends beverage {
    private string $name;
    private float $alcoholPercentage;

    public function __construct($color, $price, $alcoholPercentage, $name, $temp = 'cold') {
        parent::__construct($color, $price, $temp);
        $this->alcoholPercentage = $alcoholPercentage;
        $this->name = $name;
    }

    public function return_alcoholPercentage() {
        echo "This $this->name alcohol percentage is $this->alcoholPercentage %.\n";
        $this->beerInfo();
    }

    private function beerInfo() {
        echo "Hi, I'm $this->name. My alcohol percentage is $this->alcoholPercentage, and I have a $this->color color.\n";
    }
}

$sakra = new beer('light', 3.5, 8.5, 'Duvel');

$sakra->return_alcoholPercentage();
$sakra->return_string();

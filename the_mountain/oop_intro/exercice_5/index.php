<?php
/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
class beverage{

    private string $color;
    private float $price;
    private string $temp;

    public function __construct($color,$price,$temp ='cold')
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temp = $temp;
    }

    public function return_string()
    {
        echo "This beverage is $this->temp and $this->color and it's price is $this->price .";
    }

    public function setPrice(float $p){
        $this->price = $p;
    }

}
$coca = new beverage('black',2);

$coca->return_string();

$coca->setPrice(3.5);

$coca->return_string();


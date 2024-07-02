<?php 
/* EXERCISE 3

// TODO: Copy the code of exercise 2 to here and delete everything related to cola.
// TODO: Make all properties private.
// TODO: Make all the other prints work without error.
// TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
// TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

// TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
class beverage{

    private string $color;
    private float $price;
    private string $temp;

    public function __constructor($color,$price,$temp ='cold')
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temp = $temp;
    }

    public function return_string()
    {
        echo "This beverage is $this->temp and $this->color.\n";
    }

};
//------------------------------------------------------------------------
class beer extends beverage{
    
    private string $name;
    private float $alcoholPercentage;

    public function __construct($color, $price, $alcoholPercentage, $name, $temp='cold') {
        parent::__constructor($color, $price, $temp); // Call the parent class constructor
        $this->alcoholPercentage = $alcoholPercentage;
        $this->name = $name;
    }

    public function return_alcoholPercentage()
    {
        echo "This $this->name alcohol percentage is $this->alcoholPercentage % $this->alcoholPercentage pourcentage\n";
        $this->beerInfo();
    }
    private function beerInfo()
    {
        echo "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color.\n";
    }
}

$sakra = new beer('light',3.5,8.5,'Duvel');

$sakra->return_alcoholPercentage();
$sakra->return_string();


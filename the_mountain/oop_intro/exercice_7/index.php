<?php
/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

class beverage{

    private string $color;
    private float $price;
    private string $temp;

    private const barName = 'Het Vervolg';


    public function __construct($color,$price,$temp ='cold')
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temp = $temp;
    }

    public function return_string()
    {
        echo "This beverage is $this->temp and $this->color.{$this->barname()}";
    }

    public function barname() :string {
        return self::barName;
    }

}

class beer extends beverage{

    private string $name;
    private float $alcoholPercentage;
    private const barname = 'Het Vervolg';

    public function __construct($color, $price, $alcoholPercentage, $name, $temp='cold') {
        parent::__construct($color, $price, $temp); // Call the parent class constructor
        $this->alcoholPercentage = $alcoholPercentage;
        $this->name = $name;
    }

    public function return_alcoholPercentage()
    {
        echo "This $this->name alcohol percentage is $this->alcoholPercentage % $this->alcoholPercentage pourcentage \nand come from : {$this->barname()}\n";
    }
}

$coca = new beer('blonde',3.5,5,'duval');

$coca->return_alcoholPercentage();
// $coca->return_string();

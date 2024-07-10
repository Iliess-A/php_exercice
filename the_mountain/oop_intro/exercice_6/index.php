<?php 
/* EXERCISE 6

Copy the classes of exercise 2.

// TODO: Change the properties to private.
// TODO: Make a const barname with the value 'Het Vervolg'.
// TODO: Print the constant on the screen.
// TODO: Create a function in beverage and use the constant.
// TODO: Do the same in the beer class.
// TODO: Print the output of these functions on the screen.
// TODO: Make sure that every print is on a new line.

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

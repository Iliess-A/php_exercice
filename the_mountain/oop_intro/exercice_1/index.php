<?php 

// // TODO: Create a class beverage.
// // TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
// // TODO: Have a default value "cold" in the construct for temperature.

// Remember for now we will use properties and methods that can be accessed from everywhere.
// // TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
// // TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//  print the getInfo on the screen.
// // TODO: Print the temperature on the screen.
class beverage{

    public string $color;
    public float $price;
    public string $temp;

    public function __construct($color,$price,$temp ='cold')
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temp = $temp;
    }

    public function return_string()
    {
        echo "This beverage is $this->temp and $this->color.";
    }

}


// $coca = new beverage('black',2);

// $coca->return_string();
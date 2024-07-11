<?php
class marketItems{

public string $name;

public float $price;

public static float $Tva =0.21;

public int $quantity;


public function __construct(string $name,float $price,int $quantity){

    $this->name=$name;
    $this->price=$price;
    $this->quantity=$quantity;

}

public function getTotalPricehtv():float
{
    return $this->quantity*$this->price;
}

public function getTotalPriceTvc():float
{
    return round($this->getTotalPricehtv()+$this->getTotalPricehtv()*self::$Tva,2);
}


}

class fruit extends marketItems{
    public static float $Tva =0.06;
    public static $discount = 0.5;

    public function getTotalPriceTvc():float{
        return parent::getTotalPriceTvc()*self::$discount;
    }

}

$banana = new fruit('banana',1,6);
$apple = new fruit('apple',1.5,3);
$wine = new marketItems('wine',10,2);

var_dump($wine->getTotalPriceTvc());
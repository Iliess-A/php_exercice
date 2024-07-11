<?php
$basket = [['apple', 1.5, 3], ['banana', 1, 6], ['wine', 10, 2]];

function basketamount($basket) {
    $totalCart = 0;
    $sous_total = [];
    foreach ($basket as $key => $item) {
        switch ($item[0]) {
            case 'banana':
                $thtva = sum($item[1], $item[2]);
                $ttvac = tva($thtva,0.06);
                $totalCart += $ttvac;
                $sous_total[] = [$item[0], $thtva, $ttvac];
                break;
            case 'apple':
                $thtva = sum($item[1], $item[2]);
                $ttvac = tva($thtva,0.06);
                $totalCart += $ttvac;
                $sous_total[] = [$item[0], $thtva, $ttvac];
                break;
            case 'wine':
                $thtva = sum($item[1], $item[2]);
                $ttvac = tva($thtva,0.21);
                $totalCart += $ttvac;
                $sous_total[] = [$item[0], $thtva, $ttvac];
                break;
            default:
                echo "wtf ??";
                break;
        }
    }
    var_dump($sous_total, $totalCart);
}

function sum($nub, $qt) {
    return $nub * $qt;
}
function tva($som,$prcnt){
    return $som + $som*$prcnt;
}

basketamount($basket);

//========================================================== same code with classes :

class marketItems{

    public string $name;
    public float $price;
    public float $tva;
    public int $quantity;

    public function __construct(string $name,float $price,float $tva,int $quantity){

        $this->name=$name;
        $this->price=$price;
        $this->tva=$tva;
        $this->quantity=$quantity;

    }

    public function getTotalPricehtv():float
    {
        return $this->quantity*$this->price;
    }

    public function getTotalPriceTvc():float
    {
        return $this->getTotalPricehtv()+$this->getTotalPricehtv()*$this->tva;
    }
}

$banana = new marketItems('banana',1,0.06,6);
$apple = new marketItems('apple',1.5,0.06,3);
$wine = new marketItems('wine',10,0.21,2);

var_dump( $banana->getTotalPriceTvc() + $apple->getTotalPriceTvc() + $wine->getTotalPriceTvc());
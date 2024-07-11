<?php
class student{
    
public string $name;

public float $score;

public function __construct(string $name,float $score){

    $this->name=$name;

    $this->score=$score;

}

public function getScore(){

    return $this->score;

}

public function getName(){

    return $this->name;
    
}

}
//=========================================================== seconde class
class classe{

public array $nb_student;

public function __construct(array $nb_student)
{
    $this->nb_student=$nb_student;
}

public function getNbOfStudent(){

return count($this->nb_student);

}

public function getAverageScore(){
    $tot=0;
    foreach( $this->nb_student as $stud){
        $tot +=$stud->getScore();
    }
    return $tot/$this->getNbOfStudent();
}
}

//===================================================== lastly the overall

$iliess=new student('iliess',3);
$abdou=new student('iliess',3);
$jordi=new student('iliess',5);
$manu=new student('iliess',7);
$Tom=new student('iliess',7);

$classe1 = new classe([$iliess,$abdou,$jordi,$manu,$Tom]);

echo $classe1->getAverageScore().$classe1->getNbOfStudent();
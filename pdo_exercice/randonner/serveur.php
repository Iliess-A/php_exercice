<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ======================================================get the table
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=becode;charset=utf8', 'root', 'password');

    $result = $bdd->query('SELECT * FROM hiking ;');
    $res=$result->fetchAll();
}
catch(Exception $e)
{
    
    die('Erreur : '.$e->getMessage());
}
//========================================================sanitize function 
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// ======================================================== data processing
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['add'])) {

        // recup + sanitize les info 
        $name = sanitizeInput($_POST['name']);
        $difficulty = sanitizeInput($_POST['difficulty']);
        $distance = sanitizeInput($_POST['distance']);
        $duration = sanitizeInput($_POST['duration']);
        $height = sanitizeInput($_POST['height']);

        $do = $bdd->prepare("INSERT INTO hiking ( name,difficulty,distance,duration,height_difference ) VALUES (:name,:difficulty,:distance,:duration,:height)");
        $do->bindParam(':name', $name);
        $do->bindParam(':difficulty', $difficulty);
        $do->bindParam(':distance', $distance);
        $do->bindParam(':duration', $duration);
        $do->bindParam('height', $height);
        $do->execute();

        header("Location: ./read.php");
        exit;
    }//elsif(isset($_POST[''])){

    //}
}

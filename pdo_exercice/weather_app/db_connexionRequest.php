<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ======================================================get the table
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=pdo_exercice;charset=utf8', 'root', 'password');

    $result = $bdd->query('SELECT * FROM Météo ;');
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

//====================================================== if post value delet than do this.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['delete'])) {
        
        $ville = sanitizeInput($_POST['delete']);
        $do = $bdd->prepare("DELETE FROM Météo WHERE ville=:ville");
        $do->bindParam(':ville', $ville);
        $do->execute();
        header("Location: ./index.php");
        exit;

    } elseif (isset($_POST['update'])) {

        $ville = sanitizeInput($_POST['update']);
        $haut = sanitizeInput($_POST['newhaut']);
        $bas = sanitizeInput($_POST['newbas']);
        $do = $bdd->prepare("UPDATE Météo SET haut=:haut, bas=:bas WHERE ville=:ville");
        $do->bindParam(':ville', $ville);
        $do->bindParam(':haut', $haut);
        $do->bindParam(':bas', $bas);
        $do->execute();
        header("Location: ./index.php");
        exit;

    } elseif (isset($_POST['add'])) {

        $ville = sanitizeInput($_POST['ville']);
        $haut = sanitizeInput($_POST['haut']);
        $bas = sanitizeInput($_POST['bas']);
        $do = $bdd->prepare("INSERT INTO Météo (ville, haut, bas) VALUES (:ville, :haut, :bas)");
        $do->bindParam(':ville', $ville);
        $do->bindParam(':haut', $haut);
        $do->bindParam(':bas', $bas);
        $do->execute();
        header("Location: ./index.php");
        exit;
    }
}
// $result = $bdd->query('SELECT * FROM Météo ;');
// $res = $result->fetchAll();


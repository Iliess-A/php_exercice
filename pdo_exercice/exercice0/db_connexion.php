<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost:3306;dbname=pdo_exercice;charset=utf8', 'root', 'password');

    // Execute a SQL query
    $result = $bdd->query('SELECT * FROM Météo ;');

    // Fetch all rows from the result
    $rows = $result->fetch();
    echo"<pre>";
    print_r($rows);
    echo "</pre>";

    //will delet the row with name iliess
    // $query = 'DELETE FROM user WHERE name LIKE "iliess"';
    // $rowCount = $bdd->exec($query);
    
    // echo"<pre>";// Print all rows
    // print_r($rowCount);
    // echo "</pre>";
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$servername = "localhost:3306";
$username = "root";
$password = "password";
$dbname = "mvc_exercice";

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    echo "Connected successfully";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



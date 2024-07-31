<?php

namespace Rooter\Model;

class database{

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $pdo;

    public function __construct(string $servername, string $username, string $password, string $dbname){
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        // Create a new PDO instance
        $dsn = "mysql:host=$this->servername;dbname=$this->dbname";
        try {
            $this->pdo = new \PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function requestPdo(string $query, array $params = []){
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }
}

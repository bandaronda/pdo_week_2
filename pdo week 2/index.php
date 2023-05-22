<?php

// dit zijn de gegevens van de database
$host = 'localhost:3307';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


// als het geconnect is
 


// de variabelen zijn toegevoegd aan de dsn
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "connection succes";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


 ?>
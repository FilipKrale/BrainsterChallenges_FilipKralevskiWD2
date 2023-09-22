<?php


try {
    $pdo = new PDO('mysql:host=localhost;dbname=challenge-15-php-pdo', 'root' , '');
   
} catch (\PDOException $e) {
    echo "Could not connect to database please try again latter";
    die();
}



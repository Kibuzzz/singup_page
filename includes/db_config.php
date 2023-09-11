<?php

$db_host = "localhost";
$db_name = "first_db";
$db_user = "root";
$db_password = "root";

$dsn = "mysql:host=$db_host;dbname=$db_name";
try {
    $pdo = new PDO($dsn, $db_user, $db_password);
    if ($pdo) {
        echo "Connected to the $db_name succesfully";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

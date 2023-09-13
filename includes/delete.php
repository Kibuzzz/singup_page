<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    try {
        require_once "db_config.php";
        $sql = "DELETE FROM users WHERE username = :username AND pwd = :pwd";
        $stm = $pdo->prepare($sql);
        $stm->execute(['username' => $username, 'pwd' => $pwd]);
        $stm = null;
        $pdo = null;
        header("Location: ../pages/success.php");
        die();
    } catch (PDOException $e) {
        die("Query failed ") . $e->getMessage();
    }
} else {
    header("Location: ../pages/fail.php");
}

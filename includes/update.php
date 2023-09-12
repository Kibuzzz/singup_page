<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $new_username = $_POST["new_username"];
    try {
        require_once "db_config.php";
        $query = "UPDATE users SET username = :new_username WHERE username = :username AND pwd = :pwd;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':new_username' => $new_username, ':username' => $username, ':pwd' => $pwd]);
        $pdo = null;
        $stmt = null;
        header("Location: ../pages/success.php");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../pages/fail.php");
}

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    require_once "db.ini.php";
    $sql = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
    $stm = $pdo->prepare($sql);
    $stm->execute([":username" => $username, ":pwd" => $pwd, ":email" => $email]);
    $pdo = null;
    $stm = null;
    header("Location: ./pages/succsess.php");
    die();
} else {
    header("Location: ../index.php");
}

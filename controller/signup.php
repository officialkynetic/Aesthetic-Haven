<?php
session_start();
require '../config/connection.php';
// print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedPassword = md5($password);

    $statement = "INSERT INTO users (name, email, password) VALUE ('$name', '$email', '$hashedPassword')";
    
    
    if ($result = $connection->query($statement)) {
        $_SESSION["user"] = true;
        $_SESSION["name"] = $name;
        return header("Location: ../dashboard.php");
    } else {
        # code...
    }
    

} else {
    die("Unable to add a users");
    // or 
    header("Location: ../createacc.php");
}

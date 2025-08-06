<?php
session_start();

function login($connection, $email, $password)
{
    $statement = "SELECT * FROM users WHERE email = '$email'  AND password = '$password'";
    $query = $connection->query($statement);
    // print_r($query);
    if ($query->num_rows > 0) {
        while ($rows = $query->fetch_assoc()) {
            $_SESSION["user"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $rows["name"];
        }
        return true;
    } else {
        return false;
    }
}

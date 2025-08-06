<pre>
<?php
session_start();
require '../config/connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $statement = "SELECT * FROM users";
    $query = $connection->query($statement);
    // print_r($query);
    if ($query->num_rows > 0) {
        while ($rows = $query->fetch_assoc()) {
            // print_r($rows);
            if ($email == $rows["email"] && $password == $rows["password"]) {
                return header("Location ../dashboard.php");
            }
        }
    }
    
?>
<pre>
<?php
require '../config/connection.php';
require '../models/User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $hashedPassword = md5($password);

    // var_dump($email, $password);

    if(login($connection, $email, $hashedPassword) == true){
        
        return header("location:../dashboard.php");
    } else {
        echo "invalid email or password";
    }
}
    
?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "aesthetic";


$connection = new mysqli($host, $username, $password, $db);
if($connection->connect_error){
    die("Unable to connect");
}
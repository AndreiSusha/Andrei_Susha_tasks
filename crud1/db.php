<?php
$servername = "db";
$username = "capp1";
$password = "Password";
$dbname = "capp1";

//create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check the connection
if ($conn->connect_error){
    die("Connection faild:" . $conn->connect_error);
}

?>
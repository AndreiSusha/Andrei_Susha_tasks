<?php
$title = "Exercise 4";
include "header_ex2.php";

$fname = $_POST['fname'];
$age = $_POST['age'];

echo "Hi, $fname, ";
if ($age >= 18){
    echo "you are eligible for voting!";
    }
    else {
        echo "you are nor eligible for voting!";
    }
?>

<?php include "footer_ex2.php"?>
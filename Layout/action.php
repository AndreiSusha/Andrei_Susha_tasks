<?php
$title = "Exercise 3";
include "header_ex2.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$color = $_POST['color'];

echo "<h3> Hello $fname $lname, You are welcome to my site. <br>
Your birth date is $bdate and your fav color is $color</h3>";

?>

<?php include "footer_ex2.php"?>
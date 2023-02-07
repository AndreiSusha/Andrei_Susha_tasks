<?php 
$title = "Exercise 3";
include "header_ex2.php";
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>

<h3>In-class Task Variable & Operators</h3>

<h2>Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    tag: Hello …., You are welcome to my site.</h2>

<form action="action.php" method="post">
    <div class="row">

        <div class="col">
            <input type="text" name="fname" required placeholder="First Name" class="form-control">
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="date" name="bdate" placeholder="Birth Date" class="form-control">
        </div>
    </div>
    Select fav color: <input type="color" name="color"> <br>
    <input type="submit" value="Submit">



</form><br>

<h3>Table</h3>
<?php
    echo "<table class='table table-bordered'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>S.N</th>
        <th scope='col'>Name</th>
        <th scope='col'>Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Pekka</td>
        <td>$g1</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Johanna</td>
        <td>$g2</td>
      </tr>
      <tr>
        <td>2</td>
        <td>John</td>
        <td>$g3</td>
      </tr>
    </tbody>
  </table>"
?>
<br>
<h3>String variables</h3>

<?php

$text1 = "Hello mr ";
$text2 = "How do u do mr?";

echo $text1 . "" . $text2; 
echo strlen($text1." ".$text2);
?>
<br>

<h3>Numbers</h3>

<?php
$n1 = 298;
$n2 = 234;
$n3 = 46;
echo "298 + 234 + 46 = ";
echo $n1 + $n2 + $n3;
?>
<br>
<h3>Write a PHP script to detect the browser being used to view your pages.</h3>

<?php

$host = $_SERVER['HTTP_USER_AGENT'];
echo $host

?>
<br>
<h3>Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h3>

<?php include "footer_ex2.php" ?>
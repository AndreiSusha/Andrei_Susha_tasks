<?php
$title = "Exercise 5";
include "header_ex2.php" ?>
<h3>A simple calculator</h3><br>
<form action="" method="get">
    <input type="number" placeholder="Enter ur first number" name="n1" required>
    <input type="number" placeholder="Enter ur second number" name="n2" required>
    <select name="operator">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
    <input type="submit" name="cal" value="Calculate">
</form>

<?php
if (isset($_GET["cal"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $operator = $_GET["operator"];
    switch ($operator) {
        case "add":
            $result = $n1 + $n2;
            break;
        case "sub":
            $result = $n1 - $n2;
            break;
        case "mul":
            $result = $n1 * $n2;
            break;
        case "div":
            $result = $n1 / $n2;
            break;
        default:
            $result = "Error: U have not selected the correct operator";
    }
}
if (isset($result)) {
    echo "<h2>Result: $result</h2>";
}
?>
<hr>
<h3>1. Write a php script to display courses as list. Use "li"</h3><br>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$num = count($courses);

for($i = 0; $i < $num; $i++) {
    echo "<li> $courses[$i] </li>";
}
?>

<hr>
<h3>2. Delete an element from the array</h3><br>

<?php

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);
$courses1 = array_values($courses1);
$n1 = count($courses1);

for ($i = 0; $i < $n1; $i++) {
    echo $courses1[$i] . "<br>";
}

?>

<hr>
<h3>3. Sort the array</h3><br>
<h4>a) ascending order sort by value</h4>
<?php

$courses3=array("c " => "PHP", "b " => "HTML", "a " => "JavaScript", "d " => "CMS", "e " => "Project");
asort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}

?><br>
<h4>b) ascending order sort by Key</h4>
<?php

$courses3=array("c " => "PHP", "b " => "HTML", "a " => "JavaScript", "d " => "CMS", "e " => "Project");
ksort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}

?><br>
<h4>c) descending order sort by Value</h4>
<?php

$courses3=array("c " => "PHP", "b " => "HTML", "a " => "JavaScript", "d " => "CMS", "e " => "Project");
arsort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}

?><br>
<h4>d) descending order sort by Key</h4>
<?php

$courses3=array("c " => "PHP", "b " => "HTML", "a " => "JavaScript", "d " => "CMS", "e " => "Project");
krsort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}
?><br>
<hr>
<h3>4. Change the following array's all values to upper case.</h3><br>
<?php

$courses4=array("php","html", "javascript", "cms", "project");
$num = count($courses4);

for($i = 0; $i < $num; $i++) {
    echo strtoupper ($courses4[$i] . "<br>");
}

?><br>
<hr>
<h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3><br>
<?php
$color = array("Yellow" => "#FFFF00", "Sunset Orange" => "#FA5F55", "Lawngreen" => "#7CFC00");
foreach ($color as $cl => $code){
    echo "My favorite color is " . $cl . " its code is " . $code . "<br>";
}

?><br>
<hr>
<h3>6. Write comments</h3><br>
<?php 
//
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : this is a built-in function that splits a string into different strings. 
//This function is binary-safe and returns an array of strings as a result of splitting the original string. 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count? This inbuilt function of PHP is used to count the current elements in the array. 
//The function might return 0 for the variable that has been set to an empty array. 
//Also for the variable which is not set the function returns 0. 
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do? The sort() function sorts an indexed array in ascending order.
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>


<?php include "footer_ex2.php" ?>
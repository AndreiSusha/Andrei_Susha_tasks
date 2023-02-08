<?php
$title = "Exercise 4";
include "header_ex2.php" ?>
<h3>Write a script that gets the current month and prints one of the following responses, depending on whether it's
    August or not</h3><br>
<?php
$f = date("M");
if ($f == "August") {
    echo "It's August, so it's still holiday";
} else {
    echo "Not August, this is $f so I don't have any holidays";
}
?>
<hr>

<h3>Assign colour red to a variable name $color and check to print one the following responses</h3><br>
<?php
$color = "red";
if ($color == "black") {
    echo "The color is red.";
} else {
    echo "The color is not red.";
}
?>
<hr>

<h3>Write a program to grade students based on their total score for a subject. Use variable to hold the total score
</h3><br>
<?php
$g = 85;
if ($g >= 81) {
    echo "Excellent";
} elseif ($g >= 71 && $g <= 80) {
    echo "Great";
} elseif ($g >= 61 && $g <= 70) {
    echo "Good";
} elseif ($g >= 51 && $g <= 60) {
    echo "Pass";
} else {
    echo "Fail";
}
?>
<hr>
<h3>Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for
    voting</h3><br>

<form action="action4.php" method="post">
    <div class="row">

        <div class="col">
            <input type="text" name="fname" required placeholder="Name" class="form-control">
        </div>
        <div class="col">
            <input type="number" name="age" placeholder="Age" class="form-control">
        </div>
    </div><br>
    <input type="submit" value="Submit">
</form><br>
<hr>
<h3>Use $_SERVER['HTTP_USER_AGENT']; to get the browser name.</h3><br>

<?php
$popular_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE"];

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_browser = 'Other less popular browsers';
foreach ($popular_browsers as $browser) {
    if (strpos($user_agent, $browser) !== false) {
        $user_browser = $browser;
        break;
    }
}

switch ($user_browser) {
    case 'Chrome':
        $user_browser = 'Chrome';
        break;
    case 'Safari':
        $user_browser = 'Safari';
        break;
    case 'Edg':
        $user_browser = 'Microsoft Edge';
        break;
}

echo "Your browser: " . $user_browser;

?>

<?php include "footer_ex2.php" ?>
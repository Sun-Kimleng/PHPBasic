<!DOCTYPE html>

<html>
<head>
	<style>
    	.a{
        color: red;
        }
    </style>
</head>
<body>

<?php
$txt = "PHP";
echo "I love $txt!";

$allMonth =['January', 'February', 'March', 'April', 5 , 6];

$date = date("m");

if($date = 2){
$date = $allMonth[1];
}

echo "<br>";
echo "<h1 class='a'>"."this month is ".$date."</h1>";



$allDay = ['Monday', 'Tuesday', 'Wednesday', 'Thursday','Friday', 'Saturday', 'Sunday'];
print_r ($allDay);
echo count($allDay);
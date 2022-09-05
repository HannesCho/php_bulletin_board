<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Small Stuffs<h1><hr>";
echo "<h2>Simple Calculator<h2><br>";
?>
<form action="basic.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <input type="submit">
</form>    
<?php 
$num1 = $_GET["num1"];
$num2 =  $_GET["num2"];
echo $num1 + $num2;
?>
</body>
</html>
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
if (isset($num1, $num2)){ 
    $num1 = $_GET["num1"];
    $num2 =  $_GET["num2"];
    echo $num1 + $num2;
} else {
    echo "0";
}
?>

<?php
echo "<h2>Mad Libs Game<h2><br>";
?>
<form action="basic.php" method="get">
    Color : <input type="text" name="color">
    <br>
    Plural Noun : <input type="text" name="pluralNoun">
    Celebrity : <input type="text" name="celebrity">
    <input type="submit">
</form>    
<?php 
if (isset($color, $pluralNoun, $celebrity)){ 
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];
    echo "Roses are $color <br>";
    echo "$pluralNoun are blue<br>";
    echo "I love $celebrity<br>";
} else {
    echo "";
}
?>
</body>
</html>
<?php 
include_once "connectdb.php";
$table_name = "php_board.topic";
$sql = "SELECT * FROM ".$table_name;
$result = mysqli_query($conn, $sql);
$list = "";
while($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"article.php?id={$row["id"]}\">{$row["title"]}</a></li>";
    }
?>
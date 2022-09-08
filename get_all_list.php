<?php 
include_once "connectdb.php";
$table_name = "php_board.topic";
$sql = "SELECT * FROM ".$table_name;
$result = mysqli_query($conn, $sql);
$list = "";
while($row = mysqli_fetch_array($result)) {
    $escaped_title = htmlspecialchars($row["title"]);
    $list = $list."<li><a href=\"article.php?id={$row["id"]}\">{$escaped_title}</a></li>";
    }
?>
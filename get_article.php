<?php 
include_once "connectdb.php";
$table_name = "php_board.topic";
$sql = "SELECT * FROM ".$table_name." WHERE id={$_GET["id"]}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$article = array(
    "title"=>$row["title"],
    "contents"=>$row["contents"]
);
?>
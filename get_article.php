<?php 
include_once "connectdb.php";
$table_name = "php_board.topic";
$edit_link = "";
$del_link = "";
if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM ".$table_name." WHERE id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article = array(
        "title"=>htmlspecialchars($row["title"]),
        "contents"=>htmlspecialchars($row["contents"]),
        "author"=>htmlspecialchars($row["author"])
    );
    $edit_link = '<p><a href="update.php?id='.$_GET['id'].'">Edit this article</a></p>';
    $del_link = '
    <form action="process_delete.php" method="post">
    <input type="hidden" name="id" value="'.$_GET['id'].'">
    <input type="submit" value="Delete this article">
    </form>
    ';
}
?>
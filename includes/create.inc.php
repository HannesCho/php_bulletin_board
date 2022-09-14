<?php
include_once "../database/connectdb.php";
try {
    $table_name = "php_board.topic";
    $filtered = array(
        'title' =>mysqli_real_escape_string($conn, $_POST['title']),
        'contents' =>mysqli_real_escape_string($conn, $_POST['contents']),
        'author' =>mysqli_real_escape_string($conn, $_POST['author']),
    );
    $sql = "INSERT INTO {$table_name}
            (title, contents, created, author)
            VALUES(
                '{$filtered['title']}',
                '{$filtered['contents']}',
                NOW(),
                '{$filtered['author']}')";
    $result = mysqli_query($conn, $sql);
    if($result === false) {
        echo "Failed!, Somethings Wrong!";
    } else {
        echo "You successfully create new article!";
        echo "<p><a href='../index.php'>Go back to Home</a></p>";
    }
}
catch(Exception $e) {
    var_dump($e);
}
?>

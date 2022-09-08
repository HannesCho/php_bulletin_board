<?php
include_once "connectdb.php";
try {
    $table_name = "php_board.topic";
    settype($_POST['id'], 'integer');
    $filtered = array(
        'id' =>mysqli_real_escape_string($conn, $_POST['id']),
        'title' =>mysqli_real_escape_string($conn, $_POST['title']),
        'contents' =>mysqli_real_escape_string($conn, $_POST['contents']),
        'author' =>mysqli_real_escape_string($conn, $_POST['author']),
    );
    $sql = "UPDATE {$table_name}
                SET
                    title = '{$filtered['title']}',
                    contents = '{$filtered['contents']}',
                    author = '{$filtered['author']}'
                WHERE
                    id = '{$filtered['id']}'
        ";
    $result = mysqli_query($conn, $sql);
    if($result === false) {
        echo "Failed!, Somethings Wrong!";
    } else {
        echo "You successfully update new article!";
        echo "<p><a href='index.php'>Go back to Home</a></p>";
    }
}
catch(Exception $e) {
    var_dump($e);
}
?>
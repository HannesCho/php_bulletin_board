<?php
include_once "connectdb.php";
try {
    $table_name = "php_board.topic";
    settype($_POST['id'], 'integer');
    $filtered = array(
        'id' =>mysqli_real_escape_string($conn, $_POST['id']) 
    );
    $sql = "DELETE FROM {$table_name} WHERE id= {$filtered['id']}";
    $result = mysqli_query($conn, $sql);
    if($result === false) {
        echo "Failed!, Somethings Wrong!";
    } else {
        echo "You successfully delete article!";
        echo "<p><a href='index.php'>Go back to Home</a></p>";
    }
}
catch(Exception $e) {
    var_dump($e);
}
?>
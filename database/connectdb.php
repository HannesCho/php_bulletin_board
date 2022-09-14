<?php
include_once "hidden.php";
try {
    $conn = mysqli_connect(
        $host, $user, $password, $database
    );
}
catch(Exception $e) {
    var_dump($e);
}
?>
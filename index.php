<?php 
include_once "database/get_all_list.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Simple Board</h1>
    <a href="pages/create.php">Create Article</a>
    <ul>
        <?=$list?>
    </ul>
</body>
</html>
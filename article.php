<?php 
include_once "get_article.php";
include_once "get_all_list.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2><?=$article["title"]?></h2>
    <p><?=$article["contents"]?></p>
    <h3>Whole Articles</h3>
    <ul>
        <?=$list?>
    </ul>
</body>
</html>
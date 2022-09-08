<?php 
include_once "get_article.php";
include_once "get_all_list.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
    <h2><?=$article["title"]?></h2>
    <p><?=$article["contents"]?></p>
    <?=$edit_link?>
    <?=$del_link?>
        
    <h3>Whole Articles</h3>
    <a href="create.php">Create new article</a>
    <ul>
        <?=$list?>
    </ul>
</body>
</html>
<?php 
include_once "../database/get_article.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Article</title>
</head>
<body>
    <form action="../includes/update.inc.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" placeholder="Title" 
        value="<?=$article['title']?>"></p>
        <p><textarea name="contents" 
        placeholder="Write the texts"><?=$article['contents']?></textarea></p>
        <p><input type="txet" name="author" placeholder="Author" 
        value="<?=$article['author']?>"></p>
        <p><input type="submit" value="Update!"></p>
    </form>
</body>
</html>
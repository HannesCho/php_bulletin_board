<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Your Article</title>
</head>
<body>
    <form action="../includes/create.inc.php" method="POST">
        <p><input type="text" name="title" placeholder="Title"></p>
        <p><textarea name="contents" placeholder="Write the texts"></textarea></p>
        <p><input type="txet" name="author" placeholder="Author"></p>
        <!-- <p>Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"></p> -->
        <p><input type="submit" value="Create!"></p>
    </form>
</body>
</html>
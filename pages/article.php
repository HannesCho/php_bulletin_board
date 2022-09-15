<?php 
include_once "core/header.php";
include_once "../database/get_article.php";
?>

<div class="article-wrapper">
    <h1><?=$article["title"]?></h1>
    <div class="create-btn-container">
        <a href="create.php"><button>Create Article</button></a>
    </div>
    <p class="content"><?=$article["contents"]?></p>
    <div class="btns-container">
        <?=$edit_link?>
        <?=$del_link?>
    </div>
</div>
<?php 
include_once "core/footer.php";
?>
<?php 
include_once "core/header.php";
include_once "../database/get_all_list.php";
?>
    <div class="article-wrapper">
        <h1>Avo Board</h1>
        <div class="create-btn-container">
            <a href="create.php"><button>Create Article</button></a>
        </div>
        <div class="article-container">
            <?=$list?>
        </div>
    </div>
        
<?php 
include_once "core/footer.php";
?>
<?php 
    function print_title() {
        if (isset($_GET["id"])){
            echo $_GET["id"];
        } else {
            echo "Welcome";
        }
    }
    function print_contents() {
        if (isset($_GET["id"])) {
            echo file_get_contents("data".$_GET["id"]);
        } else {
            echo "None";
        }
    function print_list() {
        $list = scandir("./data");
        $i = 0;
        while ($i < count($list)) {
            if ($list[$i] != ".") {
                if ($list[$i] != "..") {
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a><li>";
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php print_title() ?>
    </title>
</head>
<body>
<?php print_list() ?>
<?php print_title() ?>
<?php print_contents() ?>
</body>
</html>
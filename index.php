<?php
include connectdb.php;
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = "";
while($row = mysqli_fetch_array($result)) {
    echo "hi";
    $list = $list."<li>{$row["title"]}</li>";
    }

// function print_list() {
//     $list = scandir("data");
//     $i = 0;
//     while ($i < count($list)) {
//         if ($list[$i] != ".") {
//             if ($list[$i] != "..") {
//                 echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a><li>";
//             }
//         }
//         $i = $i + 1;
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <ul>
        <?=$list?>
//         <?php 
//         print_list()
//      ?>
    </ul>
    
</body>
</html>

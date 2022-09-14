<?php

if(isset($_POST["submit"])) {
     
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once "../database/connectdb.php";
    require_once "../functions.inc.php";

    if (emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false) {
        header("location: ../pages/signup.php?error=emptyinput");
        exit();
    }  
    if (invalidUid($username) !== false) {
        header("location: ../pages/signup.php?error=invalieduid");
        exit();
    }  
    if (invalidEmail($email) !== false) {
        header("location: ../pages/signup.php?error=invaliedemail");
        exit();
    }  
    if (pwdMatch($pwd,$pwdRepeat) !== false) {
        header("location: ../pages/signup.php?error=pwddontmatch");
        exit();
    }
    if (uidExists($conn, $username) !== false) {
        header("location: ../pages/signup.php?error=usernametaken");
        exit();
    }

    // here no error

}
else {
    header("location: ../signup.php");
    exit();
}
<?php 

    function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat)  {
        $result;
        if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ) {
            $result = true;
        }
        else {
            $result = false;
        }
    }
    function invalidUid($username)  {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
        else {
            $result = false;
        }
    }
    function invalidEmail($email)  {

    }
    function pwdMatch($pwd,$pwdRepeat){

    }
    function uidExists($conn, $username){

    }

    // here no error
    createUser($conn, $name,$email,$username,$pwd);
?>
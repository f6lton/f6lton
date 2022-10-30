<?php

if (isset($_POST["submit"])){
   
    $name = $_POST["name"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["passwordrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.php';

    if (pwdMatch($password, $passwordrepeat) !== false){
        header("location: register.php?error=passswordsdontmatch");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false){
        header("location: register.php?error=usernametaken");
        exit();
    }

    /*if (invalidUsername($username) !== false){
        header("location: register.php?error=invalidusername");
        exit();
    }*/

    
    createUser($conn, $name, $email, $username, $password);
  
}

else {
    header("location: register.php");
}
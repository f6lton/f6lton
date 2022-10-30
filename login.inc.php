<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.php';

   if (emptyInputLogin($username, $password) !== false){
        header("location: login.php?error=passswordsdontmatch");
        exit();
    }

    loginuser($conn, $username, $password);

    }
    
    else {
        header("location: index.php");
        exit();
    }
   

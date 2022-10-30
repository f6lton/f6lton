<?php

if (isset($_POST["submit"])){
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    require_once 'dbh.inc.php';
    require_once 'functions.php';
   
    createmessage($conn, $name, $email, $subject, $message);

}
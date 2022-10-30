<?php

function invalidUsername($username){
    $result;
    if (preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $passwordrepeat){
    $result;
    if ($password !== $passwordrepeat) {
        $result = true;
    }
    else {
       $result = false;
    }
    return $result;
}

function uidExists($conn, $username ,$email) {
    $sql = "SELECT * FROM users WHERE userUId = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password) {
    $sql = "INSERT INTO users (userName, userEmail, userUId, userPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: register.php?error=stmtfailed");
        exit();
    }

    $HashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $HashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: register.php?error=");
    exit();
}
function createmessage($conn, $name, $email, $subject, $message) {
    $sql = "INSERT INTO contactusmessage (contactName, contactEmail, contactSubject, contactMessage) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: contactus.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: contactus.php?error=");
    exit();
}



function emptyInputLogin($username, $password){
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginuser($conn, $username, $password){
    $uidExists = uidExists($conn, $username ,$username);

    if ($uidExists === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false){
        header("location: login.php?error=wrongpassword");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userId"] = $uidExists["userId"];
        $_SESSION["userUId"] = $uidExists["userUId"];
        header("location: admin.php");
        exit();
    }
}
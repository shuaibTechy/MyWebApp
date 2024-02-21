<?php

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat= $_POST["pwdrepeat"];

    require_once 'dbh.inc.php'
    require_once 'functions.inc.php'
    
    if(emptyInputSign($name,$email,$username,$pwd,$pwdRepeat) != false){
        header("location: ../signup.php?error=emptyinput"); 
        exit();
    }
    if(invalidUid($username) != false){
        header("location: ../signup.php?error=einvalidemail"); 
        exit();
    }
    if(invalidEmail($email) != false){
        header("location: ../signup.php?error=passworddontmatch"); 
        exit();
    }
    if(pwdMatch($pwd,$pwdRepeat) != false){
        header("location: ../signup.php?error=emptyinput"); 
        exit();
    }
    if(uidExists($conn, $username) != false){
        header("location: ../signup.php?error=usernametaken"); 
        exit();
    }
    
    createUser($conn, $username, $email, $username, $pwd);


} else{
    header("location: ../signup.php");
}
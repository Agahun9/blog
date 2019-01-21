<?php
session_start();
include "classes/user.php";
$identifity=substr($_SERVER['REQUEST_URI'],11);
PRINT $identifity;
if(isset ($_POST["login"])){
    $login=new user();
    $login->loginuser($_POST["login"],md5($_POST["pass"]));
    header("location: index.php");
}


if(isset ($_GET["logout"]))
{
    $login=new user();
    $login->logout($_GET["logout"]);
    header("location: index.php");
}

if(isset ($_POST["register"]))
{
    $register=new user();
    $register->register($_POST["reglogin"],md5($_POST["regpass"]));
    header("location: index.php");
}


?>
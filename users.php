<?php
session_start();
include "classes/user.php";

if(isset ($_POST["login"])){
    
    $login=new user();
    $loginstatus=$login->loginuser($_POST["login"],md5($_POST["pass"]));
    if ($loginstatus==true){
        print "zalogowany";
    }
    else{
        print "bląd przy logowaniu";
    }
    
    header("refresh:1 index.php");
}


if(isset ($_GET["logout"]))
{
    $login=new user();
    $logoutstatus=$login->logout($_GET["logout"]);
    if ($loginstatus==true){
        print "Pomyślnie wylogowano";
    }
    else {
        print "Błąd przy wylogowaniu";
    }
    header("refresh:1 index.php");
}

if(isset ($_POST["register"]))
{
    $register=new user();
    $registerstatus=$register->register($_POST["reglogin"],md5($_POST["regpass"]));
    if ($registerstatus==true){
        print "zarejestrowany";
    }
    else {
        print "błąd przy rejestracji";
    }
    
    header("refresh:1 index.php");
}


?>
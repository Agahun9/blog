<?php
include "../classes/SqlService.php";
if(isset ($_POST["add"])){
    $add=new SqlService();
    $title=$_POST["title"];
    $shortdesc=$_POST["shortdesc"];
    $image=$_POST["image"];
    $article=$_POST["article"];
    $add->zapytanie("INSERT into artykuly values('','$article','$image','$title','$shortdesc')");
    header("refresh:1 /admin/admin.php");
}

if(isset ($_POST["delete"])){
    $delete=new SqlService();
    $id=$_POST["ID"];
    $query=$delete->zapytanie("DELETE FROM artykuly where ID=$id");
    if ($query==true){
        print "Usuniety artykul o id ".$id;
    }
    else{
        print "Błąd w usuwaniu artykułu";
    }
    header("refresh:1 /admin/admin.php");
}

if(isset ($_POST["edit"])){
    $id=$_POST["ID"];
    header("refresh:0 edit.php?ID=$id"); 
}

if(isset ($_POST["editarticle"])){
    $edit=new SqlService();
    $id=$_POST["ID"];
    $title=$_POST["title"];
    $shortdesc=$_POST["shortdesc"];
    $image=$_POST["image"];
    $article=$_POST["article"];
    $edit=$edit->zapytanie("UPDATE `artykuly` SET `artykul` = '$article', `zdj` = '$image', `tytul` = '$title', `shortart` = '$shortdesc' WHERE `artykuly`.`ID` ='$id'")
    or die("bład");
    header("refresh:1 /admin/admin.php");
}


<?php
include "../classes/admin.php";
if(isset ($_POST["add"])){
    $article=new Article();
    $article->art($_POST["title"],$_POST["shortdesc"],$_POST["article"],$_POST["image"]);
    $article->saveart();
    
}

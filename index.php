<?php
session_start();
include "classes/articles_table.php";
include "head.php";
include "header.php";
include "classes/querytest.php";

$query=new queryclass();
$query->sqlConnect();
print $query->zapytanie();







// $article_table = new article_table();
// print $article_table->articles();


?>
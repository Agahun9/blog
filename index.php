<?php
include "classes/articles_table.php";
include "header.php";
include "classes/dbquery.php";
include "classes/showarticles.php";
$query=new queryclass();
$query->sqlConnect();
$zapytanie=$query->zapytanie("select * from artykuly");
print $zapytanie['0'];
webarticle();
    







// $article_table = new article_table();
// print $article_table->articles();


?>
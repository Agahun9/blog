<?php
session_start();
include "classes/articles_table.php";
include "head.php";
include "header.php";


$article_table = new article_table();
print $article_table->articles();


?>
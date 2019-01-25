<?php
include "../head.php";
if($_SESSION["verify"]==1){



      
require_once "../classes/dbquery.php";
$query=new DataBase();
?>
<a href="add.php"><button>Add article</button></a>
<?php
$zapytanie = $query->zapytanie("select * from artykuly");


      while($r = mysqli_fetch_object($zapytanie)){
            print <<<END
                  <a href="/article_$r->ID">
<table class="table table-bordered";>
<tr>
<td class="table_img"><img style="width:150px;" src="$r->zdj"></img></td>
<td class="table_desc">$r->tytul<br>$r->shortart

</td>
</tr>
</table>
</a>
END;
}






}
<?php
include "header.php";
require_once "classes/SqlService.php";
$query=new SqlService();
$zapytanie = $query->zapytanie("select * from artykuly");

if (!strrpos($_SERVER['REQUEST_URI'],"article")){
      while($r = mysqli_fetch_object($zapytanie)){
            print <<<END
                  <a href="article_$r->ID">
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
else{
     $zapytanie=$query->webarticle($identifity=substr($_SERVER['REQUEST_URI'],9));
     while($r = mysqli_fetch_object($zapytanie)){
     print <<<END
      <img src=$r->zdj><br><br>
      $r->tytul<br>
      $r->shortart<br>
      $r->artykul


END;

      }
}






    







// $article_table = new article_table();
// print $article_table->articles();


?>
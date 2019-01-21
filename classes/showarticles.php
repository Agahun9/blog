<?php
function webarticle(){
    $identifity=substr($_SERVER['REQUEST_URI'],19);
    print $identifity;
   include "DB.php";
    $zapytanie=mysqli_query($conn,"SELECT * FROM artykuly WHERE id='$identifity' ");

    while($r = mysqli_fetch_array($zapytanie)) {
        print <<<END
<table class="table table-bordered";>
<tr>
<td width="150px"><img style="width:150px; height:60px;" src="$r[2]"></img></td>
<td width="550px" style=" padding-left:50px;">$r[4]</td>
</tr>
</table>
<div id="tytul">
$r[3]<br>
</div>
<br>
$r[1]




</a>

END;
 }
}





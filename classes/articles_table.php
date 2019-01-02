<?php 


class article_table {
    function articles(){
        include "DB.php";
    $zapytanie=mysqli_query($conn,"select * from artykuly");
    
    if(mysqli_num_rows($zapytanie) > 0) {
        while($r = mysqli_fetch_array($zapytanie)) {
               print <<<END
                         <a href="articles/$r[0].php">
       <table class="table table-bordered";>
    <tr>
    <td class="table_img"><img style="width:150px;" src="$r[2]"></img></td>
    <td class="table_desc">$r[3]<br>$r[1]
    
    </td>
    </tr>
    </table>
       </a>
       
    END;
        }
    }
    }
    
}

?>
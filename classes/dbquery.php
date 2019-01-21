<?php

class queryclass{
    var $dbhost;
    var $dbname;
    var $dblogin;
    var $dbpass;
    var $connection;
    var $query;
    var $row;
    var $result;
    var $records_rows;
  
    
    function __construct(){
        $this -> dbhost="localhost";
        $this -> dbname='blog';
        $this -> dblogin='root';
        $this -> dbpass='';
        $this -> connection;
        $this -> records_rows;
        $this -> result = '';
        $this -> row = '';
    }

    function sqlConnect(){
       
        $this -> connection = mysqli_connect($this -> dbhost,$this -> dblogin, $this -> dbpass, $this -> dbname);
        return $this -> connection;
    }

    function zapytanie($query){
        $this -> query = $query;
        $this -> result=mysqli_query($this -> connection,$this -> query);
   


            
                while($r = mysqli_fetch_object($this -> result)) {
                    print <<<END
                              <a href="?article_$r->ID">
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
    
      
   

    function sqlRows() 
       { 
           $this -> records_rows = mysqli_num_rows($this -> result);
            return $this -> records_rows; 
           
          
     } 
     
     
}
?>
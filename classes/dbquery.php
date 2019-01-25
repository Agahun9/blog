<?php
require_once "DB.php";
class DataBase extends DB{

    function zapytanie($query){
        $this -> sqlConnect();
        $this -> query = $query;
        $this -> result=mysqli_query($this -> connection,$this -> query);
        return $this -> result;
        
       }

       function webarticle($id){
        $this -> sqlConnect();
        $this -> result=mysqli_query($this -> connection,"SELECT * FROM artykuly WHERE id='$id' ");
        return $this -> result;

         }

     
}
?>
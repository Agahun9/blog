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

    function zapytanie(){
     
        $result=mysqli_query($this -> connection,"select * from artykuly");
        while($r = mysqli_fetch_object($result)){
        return $r->tytul."<br>";   
        }
    }
    function sqlRows() 
       { 
           $this -> records_rows = mysqli_num_rows($this -> result);
            return $this -> records_rows; 
           
          
     } 

}
?>
<?php
class DB {
    var $dbhost;
    var $dbname;
    var $dblogin;
    var $dbpass;
    var $connection;

    function __construct(){
        $this -> dbhost="localhost";
        $this -> dbname='blog';
        $this -> dblogin='root';
        $this -> dbpass='';
        $this -> connection;
    }
    
    function sqlConnect(){
       
        $this -> connection = mysqli_connect($this -> dbhost,$this -> dblogin, $this -> dbpass, $this -> dbname);
        return $this -> connection;
    }
}
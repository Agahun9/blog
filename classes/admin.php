<?php
include "DB.php";

class Article extends DB{
    var $title;
    var $shortdesc;
    var $fullarticle;
    var $image;

    function __construct(){
        $this -> title;
        $this -> shortdesc;
        $this -> fullarticle;
        $this -> image;
    }

    public function art($title,$shortdesc,$fullarticle,$image){
        $this -> title = $title;
        $this -> shortdesc = $shortdesc;
        $this -> fullarticle = $fullarticle;
        $this -> image = $image;
        
    }

   
    function saveart(){
     $this -> sqlConnect();
     
       
     $query = mysqli_query($this->connection,"INSERT into artykuly values('','$this -> fullarticle','$this -> image','$this -> title','$this -> shortdesc')");
    }

}
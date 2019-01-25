<?php
include "dbquery.php";
class user extends DataBase{
    function loginuser($login,$pass){
        
        $this -> sqlConnect();
        $query=mysqli_query($this -> connection,"SELECT login FROM user WHERE login='$login' AND haslo='$pass'");
        $r=mysqli_fetch_array($query);   
        if (isset ($r[0]))
        {
            
            $_SESSION["verify"]= 1;
            $_SESSION["user_login"]= $r[0];
            return True;
        }
        else{
            return false;
        }
      
        
    }
    function logout($logout){
        if (isset($logout)){
            $_SESSION["verify"]= 0;
            return true;
        }
        else{
            return false;
        }
    }

    function register($login,$pass){
        $this -> sqlConnect();
        
        $query=mysqli_query($this -> connection,"SELECT login FROM user WHERE login='$login'");
        $r=mysqli_fetch_array($query);   
             if ($r[0]==$login)
            {
            return false;
             }  
           else {
           
        $query=mysqli_query($this -> connection,"INSERT into user(ID, login, haslo) values ('','$login','$pass')");
        if ($query==true){
            return true;
        }
            
        }
    }
}

?>
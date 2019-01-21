<?php
class user{
    function loginuser($login,$pass){
        
        include "DB.php";
        $query=mysqli_query($conn,"SELECT login FROM user WHERE login='$login' AND haslo='$pass'");
        $r=mysqli_fetch_array($query);   
        if (isset ($r[0]))
        {
            
            $_SESSION["verify"]= 1;
	        $_SESSION["user_login"]= $r[0];
        }
      
        
    }
    function logout($logout){
        if (isset($logout)){
            $_SESSION["verify"]= 0;
        }
    }

    function register($login,$pass){
       include "DB.php";
        $query=mysqli_query($conn,"SELECT login FROM user WHERE login='$login'");
        $r=mysqli_fetch_array($query);   
        if ($r[0])
        {
            return false;
        }  
        else {
           
        $query=mysqli_query($conn,"insert into user(ID, login, haslo) values ('','$login','$pass')");
            if ($query==true)
            {
                return true;
            }
        }
    }
}

?>
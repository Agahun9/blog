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
        else {
            echo "<script>window.alert('Nie prawidłowe dane logowania');</script>";
        }
        
    }
    function logout($logout){
        if (isset($logout)){
            $_SESSION["verify"]= 0;
        }
    }
}

?>
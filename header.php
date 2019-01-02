<?php
include "head.php";
include "classes/user.php";

if(isset ($_POST["login"])){
$login=new user();
$login->loginuser($_POST["login"],md5($_POST["pass"]));
}
if(isset ($_GET["logout"]))
{
    $login=new user();
    $login->logout($_GET["logout"]);
    header("location: index.php");
}
?>

<div class="nav-bar">
    <div class="nav-bar-menu">
<span class="menu">Home</span>
<span class="menu">About</span>
<span class="menu">Contact</span>
<?php if($_SESSION["verify"]==0){
   print <<<END
<span class="menu">Register</span>
<span class="menu" onclick="openform()">login</span>

<div class="login-form-pop" id="pop">
    <form action="" class="form-container" method="post">

    <label for="email"><b>login</b></label>
    <input type="text" placeholder="Enter name" name="login" required="">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required="">

    <button type="submit" class="btn-login">Login</button>
    <button type="button" class="btn-cancel" onclick="closeForm()">Close</button>
<form>

</div>
END;
}
else{
    print "<span class='userName'>".$_SESSION['user_login']."</span>";
    print "<a href='?logout'>Logout</a>";
}
?>



<span class="social-icons-square">
<i class="fab fa-facebook-f social-icons"></i>
<i class="fab fa-instagram social-icons"></i>
<i class="fab fa-twitter social-icons"></i>
</span>
</div>
</div>
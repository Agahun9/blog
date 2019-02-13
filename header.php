<?php
include "head.php";

?>

<div class="nav-bar">
    <div class="nav-bar-menu">
<a href="/index.php" class="menu">Home</a>
<?php 
if($_SESSION["verify"]==0){
   print <<<END
   <a href="register.php" class="menu">Register</a>

<a class="menu" id=login onclick="openform(this.id)">login</a>

<div class="login-form-pop" id="loginForm">
    <form action="users.php" class="form-container" method="post">

    <label for="email"><b>login</b></label>
    <input type="text" placeholder="Enter name" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" class="btn-login">Login</button>
    <button type="button" id="login" class="btn-cancel" onclick="closeForm(this.id)">Close</button>
    </form>

</div>
END;
}
else{
    print "<span class='menu'>".$_SESSION['user_login']."</span>";
    print "<a class='menu' href='/users.php?logout'>Logout</a>";
    print "<a class='menu' href='admin/admin.php'>Admin Panel</a>";
}
?>



<span class="social-icons-square">
<i class="fab fa-facebook-f social-icons"></i>
<i class="fab fa-instagram social-icons"></i>
<i class="fab fa-twitter social-icons"></i>
</span>
</div>
</div>
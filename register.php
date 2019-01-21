<?php
require_once "header.php";
?>

<form id="register" action="/users.php" class="form-container" method="post">
<b>Login</b>
<input type="text" placeholder="Enter login" name="reglogin" required>
<b>Password</b>
<input type="password" placeholder="Enter Password" name="regpass" required>
<input type="submit" value="login" name="register">
</form>
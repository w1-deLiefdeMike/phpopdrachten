<?php
include "../Includes/Header.php";
?>
<form action="checkLogin.php" method="post">
    <label>Username: </label>
    <label>
    <input type="text" name="Username">
    </label>
    <br>
    <label>Password: </label>
    <label>
    <input type="password" name="Password">
    </label>
    <br>
    <input type="submit" value="Verzend">
</form>
<br>
<?php
include "../Includes/Footer.php";
?>
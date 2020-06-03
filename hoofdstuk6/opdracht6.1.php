<?php
include "../includes/header.php";
?>
<form action="checkLogin.php" method="post">
    <label>Username: </label>
    <label>
        <input type="text" name="username">
    </label>
    <br>
    <label>Password: </label>
    <label>
        <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="Verzend">
</form>
<br>
<?php
include "../includes/footer.php";
?>
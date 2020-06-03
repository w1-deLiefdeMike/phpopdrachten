<?php
$authUsers = array
(
    "Mike" => "onbekend",
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);
foreach ($authUsers as $user => $password)
{
    if ($_POST['username'] == $user && $_POST['password'] == $password)
    {
        $_SESSION['username'] = $_POST['username'];
        header("location: welkom.php");
    }
    else
    {
        $message = "Ongeldige username/wachtwoord {$_POST['username']}, probeer het nog eens.";
        include "opdracht6.1.php";
    }
}
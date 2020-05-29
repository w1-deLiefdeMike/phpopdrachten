<?php
    echo  "<div class=\"footer\"> -- $year -- $name -- MdL Productions -- </div>";
    echo  "</body>
           </html>";
?>
<?php
session_start();
if(isset($_SESSION['username']))
{
    $bezoeker = $_SESSION['username']. "&nbsp;<a href='../hoofdstuk6/loguit.php'>Loguit</a>";
}
else
{
    $bezoeker = "onbekende bezoeker". "&nbsp;<a href='../hoofdstuk6/opdracht6.1.php'>Login</a>";
}
print $bezoeker;
?>
<?php date_default_timezone_set("Europe/Amsterdam");
$uur = date("H");
$jaar = date("Y");
$moment ='';
if($uur >= 0 && $uur <= 5)
{
    $moment = 'Goedenacht';
}
elseif ($uur >= 5 && $uur < 12)
{
    $moment = 'Goedemorgen';
}
elseif($uur >= 12 && $uur <= 18)
{
    $moment = 'Goedemiddag';
}
elseif($uur >= 18 && $uur <= 0)
{
    $moment = 'Goedeavond';
}
echo $moment . ' bezoeker, &copy; Mike de Liefde -- MdL Productions -- ' . $jaar;

if(isset($_SESSION['username']))
{
    $bezoeker = $_SESSION['username']. "&nbsp;<a href='../hoofdstuk6/loguit.php'>Loguit</a>";
}
else
{
    $bezoeker = " onbekende bezoeker". "&nbsp;<a href='../hoofdstuk6/opdracht6.1.php'>Login</a>";
}
echo $bezoeker;
echo "</body></html>";
<?php
/**
 * User: Mike de Liefde
 * Date: 17-02-2020
 * Time: 11:00
 * File: opdracht3.2.php
 */
?>
<?php
    $trafficLightColor = "Groen";
    $ambulanceComing = false;
    $driveOn = true;
    $result = " ";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
    </title>
    <meta name="description" content="Mijn eerste poging in php">
    <meta name="keywords" content="plz, help, me">
    <meta charset="utf-8">
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<?php
 /**   if ($driveOn == true && $trafficLightColor == "Groen" && $ambulanceComing == false)
    {
        $result = "U mag doorrijden";
    }
    else if ($driveOn == true && $trafficLightColor == "Groen" && $ambulanceComing == true)
    {
        $result = "Pas op, alles lijkt er op dat je mag doorrijden, maar er komt een ambulance aan!";
    }
    else if ($driveOn == true && $trafficLightColor == ("Oranje" || "Rood") && $ambulanceComing == false)
    {
        $result = "Pas op, pas op, het stoplicht staat niet op groen!!1!";
    }
    else if ($driveOn == false)
    {
        $result = "Ik weet dat ik deze variabel anders had moeten gebruiken, maar als dit terug komt met de return, gaat er iets heel fout Mike";
    }
    else if ($driveOn == false && $trafficLightColor == ("Oranje" || "Rood") && $ambulanceComing == true)
    {
        $result = "Je weet niet wat er daadwerkelijk gebeurt, maar de wereld implodeert tot een Lego-blokje";
    }
    else
    {
        $result = "Als je dit ziet, dan dacht je Mike dat ie het begreep maar heeftt ie toch een foutje in zijn if/else statement/logica gemaakt";
    }
  */
    if ($trafficLightColor == "Groen" && $ambulanceComing == false)
    {
        $driveOn = true;
    }
    else
    {
        $driveOn = false;
    }

    if ($driveOn == true)
    {
        $result = "U mag doorrijden";
    }
    else
    {
        $result = "U moet stoppen";
    }
?>
<p><?php echo $result ?></p>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>
            <a href="../index.php">Home</a>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
</main>
</body>
</html>

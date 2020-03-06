<?php
/**
 * User: Mike de Liefde
 * Date: 10-02-2020
 * Time: 11:30
 * File: opdracht3.1.php
 */
?>
<?php
// Aanmaken van de variabelen.
    $welkeTocht = "Elfstedentocht";
    $alternatieveTochtnaam = "Alvestêdetocht";
    $hoeLang = 200;
    $watIsDit = "schaatstocht";
    $opWat = "natuurijs";
    $georganiseerdDoor = "Koninklijke Vereniging De Friesche Elf Steden";
    $welkeStad = "Leeuwarden";
    $welkeRegio = "Friesland";
    $hoeVaakGereden = 15;
    $eersteKeerIn = 1909;
    $hoeVaakPerWinter = 1;

    $verhaal = "De $welkeTocht (Fries: $alternatieveTochtnaam) is een $hoeLang kilometer lange $watIsDit over $opWat die wordt georganiseerd door de $georganiseerdDoor. $welkeStad, de hoofdstad van $welkeRegio, is start- en aankomstplaats. De $welkeTocht is inmiddels $hoeVaakGereden maal verreden en werd voor het eerst in $hoeLang gereden en wordt maximaal $hoeVaakPerWinter keer per winter gehouden.";
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
    <p><?php echo "$verhaal" ?></p>
</header>
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

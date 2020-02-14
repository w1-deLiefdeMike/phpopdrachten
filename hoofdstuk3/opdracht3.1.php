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
    $text1 = "Elfstedentocht";
    $text2 = "Alvestêdetocht";
    $text3 = 200;
    $text4 = "schaatstocht";
    $text5 = "natuurijs";
    $text6 = "Koninklijke Vereniging De Friesche Elf Steden";
    $text7 = "Leeuwarden";
    $text8 = "Friesland";
    $text9 = "Elfstedentocht";
    $text10 = 15;
    $text11 = 1909;
    $text12 = 1;

    $verhaal = "De $text1 (Fries: $text2) is een $text3 kilometer lange $text4 over $text5 die wordt georganiseerd door de $text6. $text7, de hoofdstad van $text8, is start- en aankomstplaats. De $text9 is inmiddels $text10 maal verreden en werd voor het eerst in $text11 gereden en wordt maximaal $text12 keer per winter gehouden.";
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

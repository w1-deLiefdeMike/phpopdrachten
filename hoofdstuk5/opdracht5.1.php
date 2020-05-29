<?php
    include '../includes/header.php'
?><!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
        </title>
        <meta name="description" content="Mijn eerste poging in php">
        <meta name="keywords" content="plz, help, me">
        <meta charset="utf-8">
        <!-- <link href="CSS/style.css" type="text/css" rel="stylesheet"> -->
    </head>
    <body>
        <header>
        <h1><?php echo "Uitwerking van PHP-opdracht 5.1"; ?></h1>
        </header>
        <!-- Dit is niet de echte opdracht, maar overgenomen van de oefening -->
            <form action='form_data5.1.php' method='get' target="_blank">
                <label for="naam">Naam: </label> <br>
                    <input name="naam" type="text" id="naam"> <br>
                <label for="opdracht5.1">Opdracht 5.1</label> <br>
                    <input name="opdracht5.1" type="text" id="opdracht5.1"> <br>
                <label for="stadOefening">Stad oefening</label> <br>
                    <input name="cityOefening" type="text" id="stadOefening"> <br>
                <br>
                <input type="submit" name="verzend"  value="verzend">
        </form>
    </body>
</html>
<?php
    include '../includes/footer.php'
?>
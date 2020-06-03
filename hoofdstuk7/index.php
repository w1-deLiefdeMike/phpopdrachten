<?php
// Inladen functies bestand
include("functions.php");
// Starten van een database connectie
startConnection();
// Executeren van een SQL query
$query = "SELECT * FROM joke";
$jokes = executeQuery($query);
if (isset($_GET['search']) == false)
{
    $query = "SELECT * FROM joke";
}
else
{
    $query = "SELECT * FROM joke WHERE joketext ". "'%" . $_GET['search'] . "%'";
}
echo "<p> $query </p>";
executeQuery($query);

// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{
    echo $row["jokedate"] .  $row["joketext"] . $row["jokeclou"] . "<br>";
}
?>
<form method="get">
    <label>Zoekterm</label>
    <label>
        <input type="text" name="search">
    </label>
    <input type="submit" value="verzend"> <br>
</form>
<hr> <br>
<table>
    <tr>
        <th>ID</th>
        <th>Joketext</th>
        <th>Jokeclou</th>
        <th>Jokedate</th>
    </tr>
</table>


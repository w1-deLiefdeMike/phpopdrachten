<?php
    include "../includes/header.php";
?>
<?php // ik heb nu wel heel 'schattig' de SELECT statement gemaakt in mySQL, maar ik heb niet kunnen vinden waar ik die verder moest gebruiken voor PHP
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
    echo "Connection success <br>";
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
?>
<?php
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Helaas, er is iets mis gegaan. ' . $e->getMessage();
    exit();
}
$aJokes = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    $aJokes[] = $row;
    $counter = $row['id'];
}
?>
<table>
    <tr>
        <th>ID</th>
        <th>Joketext</th>
        <th>Jokeclou</th>
        <th>Jokedate</th>
    </tr>
<?php
    for($i=0; $i<$counter; $i++)
    {
        echo "<tr><td>" . $aJokes[$i]['id'] . "</td><td>" . $aJokes[$i]['joketext'] . "</td><td>" .$aJokes[$i]['jokeclou'] . "</td><td>" . $aJokes[$i]['jokedate'] . "</td></tr>";
    }
?>
</table>
<?php
    include "../includes/footer.php";
?>
<?php
include "../includes/header.php";
?>
<style>
    img
    {
        width: 150px; /* ik voel me vies dat ik de style op deze manier doe, vergeef me */
    }
</style>
<form id="gameFrm" method="get" action="opdracht6.2.php">
    <div class="float">
        <label><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">Steen</label>
            <img src="../images/steen.jpg" alt="steen">
    </div>
    <div class="float">
        <label><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">Papier</label>
            <img src="../images/papier.jpg" alt="papier">
    </div>
    <div class="float">
        <label><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">Schaar</label>
            <img src="../images/schaar.jpg" alt="schaar">
    </div>
</form>
<hr>
<?php
if (isset($_SESSION['playah']) == false) //Blijkbaar moet je een session ook nog aanmaken ofzo? Hier gaat waarschijnlijk nog iets mis...
{
    $_SESSION['playah'] = 0;
    $_SESSION['RN'] = 0;
}
if (isset($_GET['keuze']))
{
    $playah = $_GET["keuze"];
    echo "Jij koos: <img src='../images/$playah.jpg' alt='foto'> $playah <br>";

    //Keuzebepaling voor en met een Random Number Generator.
    $opties = array("steen","papier","schaar");
    $RNG = rand(0,2);
    $RN = $opties[$RNG];
    echo "De computer koos: <img src='../images/$RN.jpg' alt='foto'> $RN";

    // Winstbepaling
    if ($playah == 'steen' && $RN == 'papier')
    {
        $_SESSION['RN'] += 1;
        echo "<br>Computer wint!";
    }
    elseif ($playah == 'papier' && $RN == 'steen')
    {
        $_SESSION['playah'] += 1;
        echo "<br>Jij wint!";
    }
    elseif ($playah == 'papier' && $RN == 'schaar')
    {
        $_SESSION['RN'] += 1;
        echo "<br>Computer wint!";
    }
    elseif ($playah == 'schaar' && $RN == 'papier')
    {
        $_SESSION['playah'] += 1;
        echo "<br>Jij wint!";
    }
    elseif ($playah == 'schaar' && $RN == 'steen')
    {
        $_SESSION['RN'] += 1;
        echo "<br>Computer wint!";
    }
    elseif ($playah == 'steen' && $RN == 'schaar')
    {
        $_SESSION['playah'] += 1;
        echo "<br>Jij wint!";
    }
    elseif ($playah == $RN)
    {
        echo "<br>!!!Gelijkspel!!!";
    }
}
    // Puntentelling
    echo "<br>Momenteel heb jij ", $_SESSION['playah'], " punten tegen ", $_SESSION['RN'], " punten van de computer";
if($_SESSION['RN'] == 5)
{
    echo 'Helaas, de computer heeft gewonnen :-(';
    unset($_SESSION['RN']);
    unset($_SESSION['playah']);
}
elseif($_SESSION['playah'] == 5)
{
    echo 'GEFELICITEERD! Je hebt gewonnen van de computer!';
    unset($_SESSION['RN']);
    unset($_SESSION['playah']);
}
?>
<?php
include "../includes/footer.php";
?>

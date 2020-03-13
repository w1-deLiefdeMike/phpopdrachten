<?php
    // Hieronder staan de counters die ik gebruik voor de taken daaronder
$task2 = "Lancering in: ";
$counter = 19;
$counter3 = 1;
$counter5 = 2020;
$counter6 = 2020;

$ageCounter = 30;
$ageCounter2 = 30;

$lifePhase = "";

    // While loop voor taak 2
while ($counter > 0)
{
    $task2 = $task2.$counter.",";
    $counter--;
    if ($counter == 0)
    {
        $task2 = $task2."0".".";
    }
}

    // Code voor taak 3
$task3 = "Lancering in: ";

for ($counter2 = 19; $counter2 > 0; $counter2--)
{
    $task3 = $task3.$counter2.",";
    if ($counter2 == 1)
    {
        $task3 = $task3."0".".";
    }
}

    // Code voor taak 4
$task4 = "";

while ($counter3 < 7)
{
    $task4 = $task4."<h".$counter3.">Dit is de ".$counter3."e iteratie</h".$counter3.">"."<br>";
    $counter3++;
}

    // Code voor taak 5
$task5 = "";

for ($counter4 = 1; $counter4 < 10; $counter4++)
{
    if ($counter4 == 1)
    {
        $task5 = $task5."<table><tr>";
    }
    $task5 = $task5."<td>Dit is de ".$counter4."e iteratie</td>";
    if ($counter4 == 10)
    {
        $task5 = $task5."</tr></table>";
    }
}

    // Code voor taak 6
$task6 = "";

while ($counter5 > 1989)
{

    if ($ageCounter == 30)
    {
        $task6 = $task6."<p>In ".$counter5." word ik ".$ageCounter." jaar oud. </p>";
        $counter5--;
        $ageCounter--;
    }
    $task6 = $task6."<p>In ".$counter5." was ik ".$ageCounter." jaar oud. </p>";
    $counter5--;
    $ageCounter--;
    if  ($ageCounter == 0)
    {
        $task6 = $task6."<p>In ".$counter5." ben ik geboren!</p>";
    }

}

    // Code voor taak 7
$task7 = "";

while ($counter6 > 1989) {
    switch ($ageCounter2) {
        case 30:
            $task7 = $task7 . "<p>In " . $counter6 . " word ik " . $ageCounter2 . " jaar oud. </p>";
            break;
        case 20:
            $task7 = $task7 . "<p>In " . $counter6 . " was ik " . $ageCounter2 . " jaar oud en werd ik een volwassene. </p>";
            break;
        case 18:
            $task7 = $task7 . "<p>In " . $counter6 . " was ik " . $ageCounter2 . " jaar oud en werd ik een adolescent. </p>";
            break;
        case 12:
            $task7 = $task7 . "<p>In " . $counter6 . " was ik " . $ageCounter2 . " jaar oud en werd ik een puber. </p>";
            break;
        case 8:
            $task7 = $task7 . "<p>In " . $counter6 . " was ik " . $ageCounter2 . " jaar oud en werd ik een tiener. </p>";
            break;
        case 4:
            $task7 = $task7 . "<p>In " . $counter6 . " was ik " . $ageCounter2 . " jaar oud en werd ik een kleuter. </p>";
            break;
        case 2:
            $task7 = $task7 . "<p>In " . $counter6 . " was ik " . $ageCounter2 . " jaar oud en werd ik een peuter. </p>";
            break;
        case 0:
            $task7 = $task7 . "<p>In " . $counter6 . " ben ik geboren, en was ik natuurlijk " . $ageCounter2 . " jaar oud en was ik een baby. </p>";
            break;
        default:
            $task7 = $task7 . "<p>In " . $counter6 . " was ik " . $ageCounter2 . " jaar oud. </p>";
            break;
    }
    $counter6--;
    $ageCounter2--;
}





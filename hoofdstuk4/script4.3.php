<?php

$task2 = "Lancering in: ";
$counter = 19;
$counter3 = 1;
$counter5 = 2020;
$counter6 = 2020;

$ageCounter = 30;
$ageCounter2 = 30;

$lifePhase = "";

while ($counter > 0)
{
    $task2 = $task2.$counter.",";
    $counter--;
    if ($counter == 0)
    {
        $task2 = $task2."0".".";
    }
}

$task3 = "Lancering in: ";

for ($counter2 = 19; $counter2 > 0; $counter2--)
{
    $task3 = $task3.$counter2.",";
    if ($counter2 == 1)
    {
        $task3 = $task3."0".".";
    }
}

$task4 = "";

while ($counter3 < 7)
{
    $task4 = $task4."<h".$counter3.">Dit is de ".$counter3."e iteratie</h".$counter3.">"."<br>";
    $counter3++;
}

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

$task6 = "";

while ($counter5 > 1990)
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

$task7 = "";

while ($counter6 > 1990)
{
    if ($ageCounter2 == 30)
    {
        $task7 = $task7 . "<p>In " . $counter6 . " word ik " . $ageCounter2 . " jaar oud. </p>";
        $counter6--;
        $ageCounter2--;
    }
}
    switch ($lifePhase)
    {
        case $ageCounter2 == 20:
            $lifePhase = "volwassen";
            break;
        case $ageCounter2 == 18:
            $lifePhase = "adolescent";
            break;
        case $ageCounter2 == 12:
            $lifePhase = "puber";
            break;
        case $ageCounter2 == 8:
            $lifePhase = "tiener";
            break;
        case $ageCounter2 == 4:
            $lifePhase = "kleuter";
            break;
        case $ageCounter2 == 2:
            $lifePhase = "peuter";
            break;
        case $ageCounter2 == 0:
            $lifePhase = "baby";
            break;
    }
    if ($lifePhase == "baby")
    {
        $task7 = $task7."<p>In ".$counter6." ben ik geboren en was ik een ".$lifePhase."</p>";
        // return ?
    }
    $task7 = $task7."<p>In ".$counter6." was ik ".$ageCounter2." jaar oud en werd ik een ".$lifePhase." </p>";
    $counter6--;
    $ageCounter2--;

    // Chrome preview werkt niet mee && via Edge lijkt er ergens een infinite loop te zitten



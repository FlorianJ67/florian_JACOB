<h1>Exercice 13</h1>

<?php

$table = [
    10,
    12,
    8,
    19,
    3,
    16,
    11,
    13,
    9
];

$i = 0;
$Tnote = 0;
foreach ($table as $exo => $note) {
    $i++;
    $Tnote += $note; 
} 

$moyenne = $Tnote / $i;
echo "Sa moyenne générale est donc de : $moyenne " ;
?>
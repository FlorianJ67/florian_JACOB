<h1>Exercice 4</h1>

<?php

$phrase = "Engage le jeu que je le gagne";
$Strphrase = mb_strtoupper($phrase);
$paltest = str_replace(" ","",$Strphrase);

if($paltest == strrev($paltest)){
    echo "La phrase « $phrase » est un palindrome";
} else echo "La phrase $phrase n'est pas un palindrome";

?>
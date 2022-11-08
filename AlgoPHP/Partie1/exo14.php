<h1>Exercice 14</h1>

<?php

$birthDay=date_create("1985-01-17");
$today=date_create("2018-05-21");
$age=date_diff($birthDay,$today);

echo "Age de la personne : " .$age->y. "ans " .$age->m. "mois " .$age->d. "jours";


?>
<h1>Exercice 12</h1>

<?php

$userT = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

foreach ($userT as $user => $langue) {
    if ($langue == "FRA") {
        echo "Salut ";
    } else if ($langue == "ESP") {
        echo "Hola ";
    } else if ($langue == "ENG") {
        echo "Hello ";
    }
    echo $user. "<br>";
}

ksort($userT);
foreach ($userT as $user => $langue) {
    if ($langue == "FRA") {
        echo "Salut ";
    } else if ($langue == "ESP") {
        echo "Hola ";
    } else if ($langue == "ENG") {
        echo "Hello ";
    }
    echo $user. "<br>";
}

?>
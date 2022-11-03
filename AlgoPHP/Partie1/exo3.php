
<h1>Exercice 3</h1>

<?php

$phrase = "Notre formation DL commence aujourd’hui";

//remplacer une chaine de charactère citer par une autre dans une chaine de charactère prédefini
echo $phrase. "<br>"
.str_replace("aujourd’hui","demain",$phrase);

?>
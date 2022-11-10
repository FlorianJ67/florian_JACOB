<h1>Exercice 15</h1>

<?php

//creation de la classe
class Personne {

    private $_name;
    private $_fname;
    private $_birthday;

    public function __construct($name,$fname,$bday) {
        $this->_name = $name;
        $this->_fname = $fname;
        $this->_birthday = $bday;
    }

    public function getName(){
        return $this->_name;
    }
    public function getFirstName(){
        return $this->_fname;
    }
    public function getBirthDay(){
        return $this->_birthday;
    }
            
};

//creation des utilisateur
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

//fonction d'affichage utilisateur
function displayuser ($user) {
    $bd=$user->getBirthDay();
    $today=date("Y-m-d");
    echo $bd;
    echo "<br>" .$today;
    $age= date_diff($bd,$today);


    echo $user->getFirstName() ." ". $user->getName() ." a " ./*$age->y.*/ " ans<br>";

}

displayuser($p1);

?>
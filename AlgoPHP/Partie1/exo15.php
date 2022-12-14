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

    //get
    public function getName(){
        return $this->_name;
    }
    public function getFirstName(){
        return $this->_fname;
    }
    public function getBirthDay(){
        return $this->_birthday;
    }
    //set
    public function setName($name){
        $this->_name=$name;
    }
    public function setFirstName($name){
        $this->_fname=$fname;
    }
    public function setBirthDay($name){
        $this->_birthday=$bday;
    }
    //calcule de l'age
    private function calcAge(){

        $today=date_create();
        $bd=$this->getBirthDay();
        $bd=date_create($bd);
            
        $age= date_diff($bd,$today);

        return $age;
    }

    public function displayUser () {
       
        $age = $this->calcAge();
    
        echo $this->getFirstName() ." ". $this->getName() ." a " .$age->y. " ans<br>";
    
    }
};

//creation des utilisateur
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

//test remplacement NOM
$p1->setName("DUPOND");

//fonction d'affichage utilisateur
$p1->displayUser();

?>
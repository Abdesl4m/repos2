<?php
include "../modele/modelePersonne.php";

class controllerPersonne
{
    private $model; 

    public function __construct($m)
    {
        $this->model = $m;
    }

    public function getPersonnes()
    {
        return $this-> model-> getPersonnes();
    }
}

$servername = "localhost";
$username = "root";
$mdp = "";

try
{
 $connexion = new PDO("mysql:host=$servername;dbname=e_com2",$username,$mdp);
 $model = new modelePersonne($connexion);
 $controller = new controllerPersonne($model);

 $personnes = $controller->getPersonnes();
 include "../vue/vuePersonne.php";
 //var_dump($personnes);
}
catch(PDOException $e)
{
    echo "erreur : ".$e-> getMessage();
}


?>
<?php
include "../classe/personne.php";

class modelePersonne
{
    private $db;

    public function __construct(PDO $_db)
    {
        $this->db = $_db;
    }

    public function getPersonnes()
    {
        try
        {
            $reponse = $this-> db ->prepare("select * from personne2");
            $reponse->execute();
            while($row = $reponse->fetch(PDO::FETCH_ASSOC))
            {
                $personne[] = new Personne($row['nom'], $row['prenom'], $row['age'], $row['adresse']);
            }
            return $personne;
        }
        catch(PDOException $e)
        {
            echo "erreur : ".$e-> getMessage();
        }
    }
}


?>
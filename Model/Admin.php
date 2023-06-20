<?php
require_once("Connexion.php");
class Admin{
    private $ad_nom;
    private $ad_email;
    private $ad_mdp;

    public function __construct(){
        $this-> ad_nom = "votre nom";
        $this-> ad_email="votre email";
        $this-> ad_mdp = "votre mots de passe";

    }
    public function getAdnom(){
        return $this -> ad_nom;
    }
    public function getAdemail(){
        return $this -> ad_email;
    }
    public function getAdmdp(){
        return $this -> ad_mdp;
    }
    public function setAdnom($ad_nom){
        $this -> ad_nom = $ad_nom;
    }
    public function setAdemail($ad_email){
        $this -> ad_email = $ad_email;
    }
    public function setAdmdp($ad_mdp){
        $this -> ad_mdp = $ad_mdp;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO admins VALUES(:ad_nom, :ad_email, :ad_mdp);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "ad_nom"=>$this->getAdnom(),
                "ad_email"=>$this->getAdemail(),
                "ad_mdp"=>$this->getAdmdp()
            )
        );
        $etat->closeCursor();
    }
    public function read() {
        $base = Connection::getConnection();
        $requete = "SELECT * FROM admins;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    public function update() {
        $base = Connection::getConnection();
        $requete = "UPDATE admins set ad_nom=:ad_nom where ad_nom=:ad_nom;";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "ad_nom" => $this->getAdnom()
            )
        );
        $etat->closeCursor();
    }
}
?>
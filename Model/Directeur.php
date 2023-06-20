<?php
require_once("Connexion.php");
class Directeur{
    private $dir_nom;
    private $dir_email;
    private $dir_mdp;

    public function __construct(){
        $this -> dir_nom ="votr nom";
        $this -> dir_email = "votre email";
        $this -> dir_mdp = "votre mot de passe";
    }
    public function getDirNom(){
        return $this -> dir_nom;
    }
    public function getDirEmail(){
        return $this -> dir_email;
    }
    public function getDirMdp(){
        return $this -> dir_mdp;
    }
    public function setDirNom($dir_nom){
        $this -> dir_nom = $dir_nom;
    }
    public function setDirEmail($dir_email){
        $this -> dir_email = $dir_email;
    }
    public function setDirMdp($dir_mdp){
        $this -> dir_mdp = $dir_mdp;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO directeur VALUES(:dir_nom, :dir_email, :dir_mdp);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "dir_nom"=>$this->getDirNom(),
                "dir_email"=>$this->getDirEmail(),
                "dir_mdp"=>$this->getDirMdp()
            )
        );
        $etat->closeCursor();
    }
    public function read() {
        $base = Connection::getConnection();
        $requete = "SELECT * FROM directeur;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    public function update() {
        $base = Connection::getConnection();
        $requete = "UPDATE directeur set dir_nom=:dir_nom where dir_nom=:dir_nom;";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "dir_nom" => $this->getDirNom()
            )
        );
        $etat->closeCursor();
    }
}
?>
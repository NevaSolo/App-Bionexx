<?php
require_once("Connexion.php");
class Achat{
    private $a_nom;
    private $a_article;
    private $a_date;

    public function __construct(){
        $this -> a_nom = "Le nom du demandeur";
        $this -> a_article ="l'article";
        $this -> a_date ="la date";
    }
    public function getAnom(){
        return $this -> a_nom;
    }
    public function getAarticle(){
        return $this -> a_article;
    }
    public function getAdate(){
        return $this -> a_date;
    }
    public function setAnom($a_nom){
        $this -> a_nom = $a_nom;
    }
    public function setAarticle($a_article){
        $this -> a_article = $a_article;
    }
    public function setAdate($a_date){
        $this -> a_date = $a_date;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO achat VALUES(:a_nom, :a_article, :ad_date);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "a_nom"=>$this->getAnom(),
                "a_article"=>$this->getAarticle(),
                "a_date"=>$this->getAdate()
            )
        );
        $etat->closeCursor();
    }
    public function read() {
        $base = Connection::getConnection();
        $requete = "SELECT * FROM achat;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    public function update() {
        $base = Connection::getConnection();
        $requete = "UPDATE achat set a_nom=:a_nom where a_nom=:a_nom;";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "a_nom" => $this->getAnom()
            )
        );
        $etat->closeCursor();
    }
}
?>
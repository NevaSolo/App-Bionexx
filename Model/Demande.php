<?php
require_once("Connexion.php");
class Demande {
    private $dm_id;
    private $is_read;
    private $dm_dateDemande;
    private $dm_departement;
    private $dm_typeArticle;
    private $dm_prioriter;
    private $dm_dateLiv;
    private $dm_nom;

    public function __construct(){
        $this -> dm_id = 0;
        $this -> is_read = 0;
        $this -> dm_dateDemande = "00/00/00";
        $this -> dm_departement = "IT";
        $this -> dm_typeArticle = "Article";
        $this -> dm_prioriter = "prioriter";
        $this -> dm_dateLiv = "00/00/00";
        $this -> dm_nom = "votre nom";
    }

    public function getDmId(){
        return $this -> dm_id;
    }
    public function getIsRead(){
        return $this -> is_read;
    }
    public function getDmDateDemande(){
        return $this -> dm_dateDemande;
    }
    public function getDmDepartement(){
        return $this -> dm_departement;
    }
    public function getDmTypeArticle(){
        return $this -> dm_typeArticle;
    }
    public function getDmPrioriter(){
        return $this -> dm_prioriter;
    }
    public function getDmDateLiv(){
        return $this -> dm_dateLiv;
    }
    public function getDmNom(){
        return $this -> dm_nom;
    }

    public function setDmId($dm_id){
        $this -> dm_id = $dm_id;
    }
    public function setIsRead($is_read){
        $this -> is_read = $is_read;
    }
    public function setDmDateDemande($dm_dateDemande){
        $this -> dm_dateDemande = $dm_dateDemande;
    }
    public function setDmDepartement($dm_departement){
        $this -> dm_departement = $dm_departement;
    }
    public function setDmTypeArticle($dm_typeArticle){
        $this -> dm_typeArticle = $dm_typeArticle;
    }
    public function setDmPrioriter($dm_prioriter){
        $this -> dm_prioriter = $dm_prioriter;
    }
    public function setDmNom($dm_nom){
        $this -> dm_nom = $dm_nom;
    }
    public function setDmDateLiv($dm_dateLiv){
        $this -> dm_dateLiv = $dm_dateLiv;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO demande VALUES(null, :dm_dateDemande, :dm_departement, :dm_typeArticle, :dm_prioriter, :dm_dateLiv, :dm_nom);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "dm_dateDemande"=>$this -> getDmDateDemande(),
                "dm_departement"=>$this -> getDmDepartement(),
                "dm_typeArticle"=>$this -> getDmTypeArticle(),
                "dm_prioriter"=> $this -> getDmPrioriter(),
                "dm_dateLiv"=> $this -> getDmDateLiv(),
                "dm_nom"=>$this  -> getDmNom()
                //"ah_nom"=>$this -> getAhNom()
            )
        );
        $etat->closeCursor();
    }
    public function afficher(){
        $base = Connection::getConnection();
        $requete ="SELECT * FROM demande WHERE dm_nom=:dm_nom;";
        $etat = $base -> prepare($requete);
        $etat-> execute(
            array(
                "dm_nom"=>$this -> getDmNom()
            )
            );
            $resultats = $etat->fetchAll();
             // Affichage des résultats
?>
<?php
        foreach($resultats as $resultat) {
            ?>
            
        <p><?= $resultat['dm_dateDemande']?>-
        <?= $resultat['dm_typeArticle']?>-
        <?= $resultat['dm_prioriter']?>-
        <?= $resultat['dm_dateLiv']?> </p>
    <hr>
    
        <?php
    }
    ?>
    
    <?php

    }
    public function read(){
        $base = Connection::getConnection();
        $requete = "SELECT * FROM demande;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
}
?>
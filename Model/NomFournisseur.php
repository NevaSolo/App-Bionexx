<?php
require_once("Connexion.php");
class Nom{
    private $id_f;
    private $nom_f;
    private $modePay_f;
    private $echeance_f;

    public function __construct(){
        $this -> id_f = 0;
        $this -> nom_f = "nom f";
    }
    public function getId(){
        return $this -> id_f;
    }
    public function getNom(){
        return $this -> nom_f;
    }
    public function getModePay(){
        return $this -> modePay_f;
    }
    public function getEcheance(){
        return $this -> echeance_f;
    }
    public function setId($id_f){
        $this -> id_f = $id_f;
    }
    public function setNom($nom_f){
        $this -> nom_f = $nom_f;
    }
    public function setModePay($modePay_f){
        $this -> modePay_f = $modePay_f;
    }
    public function setEcheance($echeance_f){
        $this -> echeance_f = $echeance_f;
    }
    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO nomfournisseur VALUES(null, :nom_f, :modePay_f, :echeance_f);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "nom_f"=>$this -> getNom(),
                "modePay_f"=>$this -> getModePay(),
                "echeance_f"=>$this -> getEcheance()
            )
        );
        $etat->closeCursor();
    }
    }
?>
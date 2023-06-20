<?php
require_once("Connexion.php");
class Chef{
    private $chef_nom;
    private $chef_dep;
    private $chef_email;
    private $chef_mdp;

    public function __construct(){
        $this -> chef_nom = "votre nom";
        $this -> chef_dep ="departement";
        $this -> chef_email ="email";
        $this -> chef_mdp ="mot de passe";
    }
    public function getChefNom(){
        return $this -> chef_nom;
    }
    public function getChefDep(){
        return $this -> chef_dep;
    }
    public function getChefEmail(){
        return $this -> chef_email;
    }
    public function getChefMdp(){
        return $this -> chef_mdp;
    }
    public function setChefNom($chef_nom){
        $this -> chef_nom =$chef_nom;
    }
    public function setChefDep($chef_dep){
        $this -> chef_dep = $chef_dep;
    }
    public function setChefEmail($chef_email){
        $this -> chef_email =$chef_email;
    }
    public function setChefMdp($chef_mdp){
        $this -> chef_mdp =$chef_mdp;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO chefdepart VALUES(:chef_nom, :chef_dep, :chef_email, :chef_mdp);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "chef_nom"=>$this -> getChefNom(),
                "chef_dep"=>$this -> getChefDep(),
                "chef_email"=>$this -> getChefEmail(),
                "chef_mdp"=>$this -> getChefMdp()
            )
        );
        $etat->closeCursor();
    }
    public function read() {
        $base = Connection::getConnection();
        $requete = "SELECT * FROM chefdepart;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    public function update() {
        $base = Connection::getConnection();
        $requete = "UPDATE chefdepart set chef_nom=:chef_nom where chef_nom=:chef_nom;";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "chef_nom"=>$this -> getChefNom()
            )
        );
        $etat->closeCursor();
    }
}
?>
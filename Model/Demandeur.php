<?php
require_once("Connexion.php");
class Demandeur{
    private $dem_nom;
    private $dem_dep;
    private $dem_email;
    private $dem_mdp;

    public function __construct(){
        $this -> dem_nom = "votre nom";
        $this -> dem_dep = "votre departement";
        $this -> dem_email = "votre email";
        $this -> dem_mdp = "votre mot de passe";
    }

    public function getDemNom(){
        return $this -> dem_nom;
    }
    public function getDemDep(){
        return $this -> dem_dep;
    }
    public function getDemEmail(){
        return $this -> dem_email;
    }
    public function getDemMdp(){
        return $this -> dem_mdp;
    }
    public function setDemNom($dem_nom){
        $this -> dem_nom = $dem_nom;
    }
    public function setDemDep($dem_dep){
        $this -> dem_dep = $dem_dep;
    }
    public function setDemEmail($dem_email){
        $this -> dem_email = $dem_email;
    }
    public function setDemMdp($dem_mdp){
        $this -> dem_mdp = $dem_mdp;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO demandeur VALUES(:dem_nom, :dem_dep, :dem_email, :dem_mdp);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "dem_nom"=> $this -> getDemNom(),
                "dem_dep"=> $this -> getDemDep(),
                "dem_email"=> $this -> getDemEmail(),
                "dem_mdp"=> $this -> getDemMdp()
            )
        );
        $etat->closeCursor();
    }
   /* public function voir(){
        $base = Connection::getConnection();
        // Construction de la requête SQL
        $requete = "SELECT * FROM Demandeur WHERE dem_nom LIKE :dem_nom ";
        $etat = $base -> prepare($requete);
        $etat -> execute(array(
            "dem_nom"=>$this -> getDemNom()
        ));
        // Exécution de la requête
        $resultats = $etat->fetchAll();
        
        // Affichage des résultats
        foreach($resultats as $resultat) {
            ?><td><?= $resultat['ar_article']?></td>
            <td><?= $resultat['ar_qte']?></td>
            <?php
        }*/
    public function read() {
        $base = Connection::getConnection();
        $requete = "SELECT * FROM demandeur;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    public function update() {
        $base = Connection::getConnection();
        $requete = "UPDATE demandeur set dem_nom=:dem_nom where dem_nom=:dem_nom;";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "dem_nom" => $this->getDemNom()
            )
        );
        $etat->closeCursor();
    }
}
?>
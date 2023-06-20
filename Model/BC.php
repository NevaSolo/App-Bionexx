
<?php

require_once("Connexion.php");
class bc{
    private $bc_num;
    private $bc_invest;
    private $bc_code;
    private $bc_date;
    private $bc_fournisseur;
    private $bc_gestionnaire;
    private $bc_eb;
    private $bc_demandeur;
    private $bc_affectation;
    private $bc_dateLiv;
    private $bc_achat;
    private $bc_incoterm;
    private $bc_modeExp;
    private $bc_delai;

    public function __construct(){
        $this -> bc_num = "BCFF2300583";
        $this -> bc_invest = "CAP71-P4EAtmo";
        $this -> bc_code = "CAP071";
        $this -> bc_date = "00/00/00";
        $this -> bc_fournisseur = "vide";
        $this -> bc_gestionnaire = "vide";
        $this -> bc_eb = "vide";
        $this -> bc_demandeur = "vide";
        $this -> bc_affectation = "vide";
        $this -> bc_dateLiv = "vide";
        $this -> bc_achat = "vide";
        $this -> bc_incoterm = "vide";
        $this -> bc_modeExp = "vide";
        $this -> bc_delai = "vide";
    }

    public function getBcNum(){
        return $this -> bc_num;
    }
    public function getBcInvest(){
        return $this -> bc_invest;
    }
    public function getBcCode(){
        return $this -> bc_code;
    }
    public function getBcDate(){
        return $this -> bc_date;
    }
    public function getBcFournisseur(){
        return $this -> bc_fournisseur;
    }
    public function getBcGestionnaire(){
        return $this -> bc_gestionnaire;
    }
    public function getBcEb(){
        return $this -> bc_eb;
    }
    public function getBcDemandeur(){
        return $this -> bc_demandeur;
    }
    public function getBcAffectation(){
        return $this -> bc_affectation;
    }
    public function getBcDateLiv(){
        return $this -> bc_dateLiv;
    }
    public function getBcAchat(){
        return $this -> bc_achat;
    }
    public function getBcIncoterm(){
        return $this -> bc_incoterm;
    }
    public function getBcModeExp(){
        return $this -> bc_modeExp;
    }
    public function getBcDelai(){
        return $this -> bc_delai;
    }
    public function setBcNum($bc_num){
        $this -> bc_num= $bc_num;
    }
    public function setBcInvest($bc_invest){
        $this -> bc_invest= $bc_invest;
    }
    public function setBcCode($bc_code){
        $this -> bc_code= $bc_code;
    }
    public function setBcDate($bc_date){
        $this -> bc_date= $bc_date;
    }
    public function setBcFournisseur($bc_fournisseur){
        $this -> bc_fournisseur= $bc_fournisseur;
    }
    public function setBcGestionnaire($bc_gestionnaire){
        $this -> bc_gestionnaire= $bc_gestionnaire;
    }
    public function setBcEb($bc_eb){
        $this -> bc_eb= $bc_eb;
    }
    public function setBcDemandeur($bc_demandeur){
        $this -> bc_demandeur= $bc_demandeur;
    }
    public function setBcAffectation($bc_affectation){
        $this -> bc_affectation= $bc_affectation;
    }
    public function setBcDateLiv($bc_dateLiv){
        $this -> bc_dateLiv= $bc_dateLiv;
    }
    public function setBcAchat($bc_achat){
        $this -> bc_achat= $bc_achat;
    }
    public function setBcIncoterm($bc_incoterm){
        $this -> bc_incoterm= $bc_incoterm;
    }public function setBcModeExp($bc_modeExp){
        $this -> bc_modeExp= $bc_modeExp;
    }
    public function setBcDelai($bc_delai){
        $this -> bc_delai= $bc_delai;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO boncommande VALUES(:bc_num, :bc_invest, :bc_code, :bc_date, :bc_fournisseur, :bc_gestionnaire, :bc_eb, :bc_demandeur, :bc_affectation, :bc_dateLiv, :bc_achat, :bc_incoterm, :bc_modeExp, :bc_delai);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "bc_num"=>$this -> getBcNum(),
                "bc_invest"=>$this -> getBcInvest(),
                "bc_code"=>$this -> getBcCode(),
                "bc_date"=>$this -> getBcDate(),
                "bc_fournisseur"=>$this -> getBcFournisseur(),
                "bc_gestionnaire"=>$this -> getBcGestionnaire(),
                "bc_eb"=>$this -> getBcEb(),
                "bc_demandeur"=>$this -> getBcDemandeur(),
                "bc_affectation"=>$this -> getBcAffectation(),
                "bc_dateLiv"=>$this -> getBcDateLiv(),
                "bc_achat"=>$this -> getBcAchat(),
                "bc_incoterm"=>$this -> getBcIncoterm(),
                "bc_modeExp"=>$this -> getBcModeExp(),
                "bc_delai"=>$this -> getBcDelai()
            )
        );
        $etat->closeCursor();
    }
    }
?>
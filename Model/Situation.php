<?php
require_once("Connexion.php");
class Situation{
    private $s_id;
    private $s_dateDemande;
    private $s_typeArticle;
    private $s_nom;
    private $s_dateLiv;
    private $s_situation;

    public function __construct(){
        $this -> s_id = 0;
        $this -> s_dateDemande = "00/00/00";
        $this -> s_typeArticle = "votre Article";
        $this -> s_nom = "votre nom";
        $this -> s_dateLiv ="00/00/00";
        $this -> s_situation = "votre situation";
    }
    public function getSid(){
        return $this -> s_id;
    }
    public function getSdateDemande(){
        return $this -> s_dateDemande;
    }
    public function getStypeArticle(){
        return $this -> s_typeArticle;
    }
    public function getSnom(){
        return $this -> s_nom;
    }
    public function getSdateLiv(){
        return $this -> s_dateLiv;
    }
    public function getSituation(){
        return $this -> s_situation;
    }
    public function setSid($s_id){
        $this -> s_id = $s_id;
    }
    public function setSdateDemande($s_dateDemande){
        $this -> s_dateDemande = $s_dateDemande;
    }
    public function setStypeArticle($s_typeArticle){
        $this -> s_typeArticle = $s_typeArticle;
    }
    public function setSnom($s_nom){
        $this -> s_nom = $s_nom;
    }
    public function setSdateLiv($s_dateLiv){
        $this -> s_dateLiv =$s_dateLiv;
    }
    public function setSituation($s_situation){
        $this -> s_situation = $s_situation;
    }
    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO situation VALUES( null, :s_dateDemande, :s_typeArticle, :s_nom, :s_dateLiv, :s_situation);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "s_dateDemande"=>$this -> getSdateDemande(),
                "s_typeArticle"=>$this -> getStypeArticle(),
                "s_nom"=>$this -> getSnom(),
                "s_dateLiv"=>$this -> getSdateLiv(),
                "s_situation"=>$this ->getSituation()
            )
        );
        $etat->closeCursor();
    }
    public function read() {
        $base = Connection::getConnection();
        $requete = "SELECT * FROM situation;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    public function update() {
        $base = Connection::getConnection();
        $requete = "UPDATE situation set s_nom=:s_nom where s_nom=:s_nom;";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "s_nom" => $this->getSnom()
            )
        );
        $etat->closeCursor();
    }
    public function voir(){
        $base = Connection::getConnection();
        $requete = "SELECT DISTINCT * FROM situation WHERE s_nom=:s_nom";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "s_nom" => $this->getSnom()
            )
        );
        $resultat = $etat -> fetchall();
        ?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VueProgression</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="font-family: ABeeZee, sans-serif;">
    <div class="container d-xxl-flex justify-content-xxl-center">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p class="lead" style="font-weight: bold;text-align: center;">Progression</p>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Votre Nom</th>
                    <th>Date de la demande</th>
                    <th>Type Article</th>
                    <th>Date de livraison</th>
                    <th>Situation</th>
                </tr>
            </thead>
            <?php
            foreach($resultat as $res):
            ?>
            <tbody>
                <tr>
                    <td><?=$res['s_nom']?></td>
                    <td><?=$res['s_dateDemande']?></td>
                    <td><?=$res['s_typeArticle']?></td>
                    <td><?=$res['s_dateLiv']?></td>
                    <td><?=$res['s_situation']?></td>
                </tr>
                <tr></tr>
            </tbody>
            <?php endforeach;?>
        </table>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
    }
}
?>
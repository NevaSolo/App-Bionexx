<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>petiteFenetre</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<?php
require_once("Connexion.php");
class Article{
    private $ar_id;
    private $ar_nomdem;
    private $ar_article;
    private $ar_qte;
    private $ar_date;
    private $ar_dateLiv;
    private $ar_num;

    public function __construct(){
        $this -> ar_id = 0;
        $this-> ar_nomdem ="votre nom";
        $this -> ar_article = "votre article";
        $this -> ar_qte = 0;
        $this -> ar_date = "00/00/00";
        $this -> ar_dateLiv = "00/00/00";
        $this -> ar_num=0;
    }
    public function getArid(){
        return $this -> ar_id;
    }
    public function getArNom(){
        return $this -> ar_nomdem;
    }
    public function getArarticle(){
        return $this -> ar_article;
    }
    public function getArqte(){
        return $this -> ar_qte;
    }
    public function getArDate(){
        return $this -> ar_date;
    }
    public function getArDateLiv(){
        return $this -> ar_dateLiv;
    }
    public function getArNum(){
        return $this -> ar_num;
    }
    public function setArNom($ar_nomdem){
        $this -> ar_nomdem = $ar_nomdem;
    }
    public function setArid($ar_id){
        $this -> ar_id = $ar_id;
    }
    public function setArarticle($ar_article){
        $this -> ar_article = $ar_article;
    }
    public function setArqte($ar_qte){
        $this -> ar_qte = $ar_qte;
    }
    public function setArDate($ar_date){
        $this -> ar_date = $ar_date;
    }
    public function setArDateLiv($ar_dateLiv){
        $this -> ar_dateLiv = $ar_dateLiv;
    }
    public function setArNum($ar_num){
        $this -> ar_num = $ar_num;
    }

    public function create(){
        $base = Connection::getConnection();
        $requete = "INSERT INTO article VALUES(null, :ar_num, :ar_nomdem, :ar_article, :ar_qte, :ar_date, :ar_dateLiv);";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "ar_num"=> $this -> getArNum(),
                "ar_nomdem"=>$this -> getArNom(),
                "ar_article"=>$this->getArarticle(),
                "ar_qte"=>$this -> getArqte(),
                "ar_date"=>$this -> getArDate(),
                "ar_dateLiv"=> $this -> getArDateLiv()
                
            )
        );
        $etat->closeCursor();
    }
    public function voir(){
        $base = Connection::getConnection();
        // Construction de la requête SQL
        $requete = "SELECT * FROM article WHERE ar_date =:ar_date AND ar_dateLiv=:ar_dateLiv AND ar_nomdem LIKE :ar_nomdem ";
        $etat = $base -> prepare($requete);
        $etat -> execute(array(
            "ar_date"=> $this -> getArDate(),

            "ar_nomdem"=> $this -> getArNom(),
            "ar_dateLiv"=> $this -> getArDateLiv()
        ));
        // Exécution de la requête
        $resultats = $etat->fetchAll();
        
        // Affichage des résultats
?>
    <div class="table-responsive">
        <table class="table">
        <thead>
                <tr>
                    <th>Article</th>
                    <th>quantite</th>
                </tr>
        </thead><?php
            foreach($resultats as $resultat) {
                ?>
                 <tbody>
            <tr>
            <td><?= $resultat['ar_article']?></td>
            <td><?= $resultat['ar_qte']?></td>
        </tr>
            </tbody>
        
            <?php
        }
        ?>
        </table>
        <?php
    
    }
    public function afficher(){
        $base = Connection::getConnection();
        // Construction de la requête SQL
        $requete = "SELECT * FROM article WHERE ar_num=:ar_num";
        $etat = $base -> prepare($requete);
        $etat -> execute(array(
            "ar_num"=>$this -> getArNum()
        ));
        $resultats = $etat->fetchAll();

        ?>
    <div class="table-responsive">
        <table class="table">
        <thead>
                <tr>
                    <th>Article</th>
                    <th>quantite</th>
<?php
            foreach($resultats as $resultat):
                ?>
                 <tbody>
            <tr>
            <td><?= $resultat['ar_article']?></td>
            <td><?= $resultat['ar_qte']?></td>
        </tr>
            </tbody>
        
            <?php
        endforeach;
        ?>
        </table>
        <?php
    
    }
    public function read() {
        $base = Connection::getConnection();
        $requete = "SELECT * FROM article;";
        $etat = $base->prepare($requete);
        $etat->execute(array());
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    public function update() {
        $base = Connection::getConnection();
        $requete = "UPDATE article set ar_article=:ar_article where ar_id=:ar_id;";
        $etat = $base->prepare($requete);
        $etat->execute(
            array(
                "ar_id" => $this->getArid(),
                "ar_article"=>$this ->getArarticle()
            )
        );
        $etat->closeCursor();
    }
    public function vue(){
        $base = Connection::getConnection();
        // Construction de la requête SQL
        $requete = "SELECT * FROM article WHERE ar_date =:ar_date AND ar_dateLiv=:ar_dateLiv AND ar_nomdem LIKE :ar_nomdem ";
        $etat = $base -> prepare($requete);
        $etat -> execute(array(
            "ar_date"=> $this -> getArDate(),

            "ar_nomdem"=> $this -> getArNom(),
            "ar_dateLiv"=> $this -> getArDateLiv()
        ));
        // Exécution de la requête
        $resultats = $etat->fetchAll();
    }
}
?>
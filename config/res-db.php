<?php
//include "../traitement-res.php";
class Reservation{
    private $pdo;
    private $stmt;
    public $user = "";
    public $error;
    function __construct(){
        try{
            $this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHAR, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }catch(Exception $ex){exit($ex->getMessage());}
    }
        function __destruct(){
        $this->pdo = null;
        $this->stmt = null;
    }
    function save($date, $nom, $prenom, $tel, $email, $place){
        try{
            $this->stmt = $this->pdo->prepare('INSERT INTO `reservation`(`res_date`, `res_nom`, `res_prenom`, `res_tel`, `res_email`, `res_place`)VALUES (:date, :nom, :prenom, :tel, :email, :place)');
            $this->stmt->execute(["date"=>$date, "nom"=>$nom, "prenom"=>$prenom, "tel"=>$tel, "email"=>$email, "place"=>$place]);
            return true;
        }catch(Exception $ex){
            $this->error = $ex->getMessage();
            echo $this->error;
            return false;
        }
    }
    function checkuser($email){
        $this->stmt = $this->pdo->prepare("SELECT `res_email` FROM `reservation` WHERE `res_email`=?");
        $this->stmt->execute([$email]); 
        $user = $this->stmt->fetch();
        if($user){
            return true;
        }
        return false;
    }
    
}
define("DB_HOST", "localhost");
define("DB_NAME", "festival");
define("DB_CHAR", "utf8");
define("DB_USER", "root");
define("DB_PASS", "");

?>
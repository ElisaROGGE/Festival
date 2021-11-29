<?php 
// Affichages d'erreur sur le formulaire
$jour = "";
$date = ["vendredi", "samedi","dimanche"];
$nom = "";
$prenom = "";
$email = "";
$tel = "";
$place = 0;
$verify =false;
$Err ='';
// "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{3,30}$/";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $res = new Reservation();
    if(empty($_POST["days"])){
        $Err = "Veuillez saisir une date.";
    }elseif(!in_array($_POST["days"], $date)){
        $Err = "Veuillez saisir une date valide.";
    }
    if(empty($_POST["nom"])){
        $Err = "Veuillez saisir un nom.";
    }else{
        $nom = secur($_POST["nom"]);
    }
    if(empty($_POST["prenom"])){
        $Err += "<br>Veuillez saisir un prénom.";
    }else{
        $nom = secur($_POST["prenom"]);
    }
    if(empty($_POST["email"])){
        $Err = "Veuillez saisir une adresse mail.";
    }else{
        $email = secur($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $Err = "Veuillez saisir une adresse mail valide.";
        };
        if($res->checkuser($email)){
             $Err ="Vous ne pouvez pas réserver de nouvelles places";
        }
    }
    
    if(empty($_POST["tel"])){
        $Err = "Veuillez saisir un numéro de téléphone.";
    }else{
        $tel = ($_POST["tel"]);
        if(!preg_match("/^0[1-68]([-. ]?[0-9]{2}){4}$/", $tel)){
            $Err = "Veuillez saisir un numéro de téléphone valide.";
    
    }
    if(empty($_POST["place"])){
        $Err = "Veuillez saisir un nombre de places.";
    }else{
        $place =(int)$_POST["place"];
        if($place > 5){
            $Err = "Veuillez saisir un chiffre entre 1 et 5.";
        }
    }
    if($Err == ''){ 
        $res->save($jour, $nom, $prenom, $tel, $email, $place);
        $verify = true;
    }

}
}

function secur($safe){
   $safe = trim($safe);
   $safe = stripcslashes($safe);
   $safe = htmlspecialchars($safe);
   return $safe; 
}
?>
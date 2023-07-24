<!-- Le script du formulaire -->
<?php 

include("local/".$lng.".php");
    //Vérifier si les champs(les valeurs de $_POST) sont vides
   function isEmpty(&$postData, &$stockData, &$msgErrVar) {
        if (empty($postData)){
            global $message;
            $msgErrVar =  $message["validation"]["required"] ??  "hello" ;
        } else {
            $stockData = test_entree($postData);
            return true;
        }
        return false;
    }
    // Supprimer les chars inutiles dans tous les variable de $_POST
    function test_entree($data) {
        $data = trim($data);                // Supprimer les caractères inutiles (espace supplémentaire, tabulation, saut de ligne)
        $data = stripslashes($data);        // Supprimer les anti-slashes (\)
        $data = htmlspecialchars($data);    // Escape the code (les tags ...)
        return $data;
    }
    // Valider le text
    function validText(&$text, &$msgErrVar){
        if (!preg_match("/^[a-zA-Z-'éèà ]*$/", $text)){
            global $message;
            $msgErrVar =  $message["validation"]["text"] ;
        }
    }
    // ces variables vont contenir les données à envoyer
    $email = $nom = $prenom = $titreStg = $org = $date = "";
    $emailErr = $nomErr = $prenomErr = $titreStgErr = $orgErr = $dateErr = "";
    // Vérifier si les données sont envoyées (avec la methode post)
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sendForm"])){
        if (isEmpty($_POST["email"], $email, $emailErr)){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                global $message;
                $emailErr =  $message["validation"]["email"];
             }
        }
        if (!empty($_POST["titreStg"])){
            $titreStg = test_entree($_POST["titreStg"]);
            validText($titreStg, $titreStgErr);
        }
        if (isEmpty($_POST["nom"], $nom, $nomErr))            validText($nom, $nomErr);
        if (isEmpty($_POST["prenom"], $prenom, $prenomErr))   validText($prenom, $prenomErr);
        if (isEmpty($_POST["org"], $org, $orgErr))            validText($org, $orgErr);
        isEmpty($_POST["date"], $date, $dateErr);
    }
?>

<!-- Le script pour changer la langue -->
<?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["lang"])){
        setcookie("langCk", $_POST["lang"]);
        header("Location: " . $_SERVER["REQUEST_URI"]); //Redirect into the current page(this action delete all the data from the POST variable)
        exit();
    }
?>

<!-- Le script pour changer le mode (dark/light) -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mode"])){
        setcookie("modeCk", $_POST["mode"]); // il expirerai à la fin de la session
        header("Location: " . $_SERVER["REQUEST_URI"]); //Redirect into the current page(this action delete all the data from the POST variable)
        exit();
    }
?>

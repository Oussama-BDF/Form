<!-- Le script du formulaire -->
<?php 
    include("local/".$lng.".php"); //par rapport la langue
    // on va stocker les valeur de POST dans ces variables
    $email = $nom = $prenom = $titreStg = $org = $date = "";

    // Supprimer les chars inutiles dans tous les variables de $_POST
    function dlt_unnecessary_chars($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // Valider l'email
    function validateEmail(&$email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            global $message;
            return  $message["validation"]["email"];
        }
        return "";
    }
    // Valider le text
    function validateText(&$text){
        if (!preg_match("/^[a-zA-Z-'éèà ]*$/", $text)){
            global $message;
            return  $message["validation"]["text"] ;
        }
        return "";
    }
    // Si les champs(les valeurs de $_POST) ne sont pas vides => valider la donnée
    function validate(&$postData, &$stockData, $validate="", $isRequired=True) {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sendForm"])){
            if (empty($postData)){
                global $message;
                return  ($isRequired)? $message["validation"]["required"] : "";
            } else {
                $stockData = dlt_unnecessary_chars($postData);
                return (function_exists($validate)? $validate($stockData) : "");
            }
        }
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

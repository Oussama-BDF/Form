<!-- Le script du formulaire -->
<?php 
    include("local/".$pageLanguage.".php"); //par rapport la langue
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
        return NULL;
    }
    // Valider le text
    function validateText(&$text){
        if (!preg_match("/^[a-zA-Z-'éèà ]*$/", $text)){
            global $message;
            return  $message["validation"]["text"] ;
        }
        return NULL;
    }
    // Si les champs(les valeurs de $_POST) ne sont pas vides => valider la donnée
    function validate(&$postData, &$stockData, $feildName, $validate="", $isRequired=True) {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sendForm"])){
            if (empty($postData)){
                global $message;
                return ($isRequired)? $message["home"]["formulaire"][$feildName]["libelle"]." ".$message["validation"]["required"] : NULL;
            } else {
                $stockData = dlt_unnecessary_chars($postData);
                return (function_exists($validate)? $validate($stockData) : NULL);
            }
        }
    }

    function displayErrMsg(&$postData, &$stockData, $feildName, $validate="", $isRequired=True){
        $errMsg = validate($postData, $stockData, $feildName, $validate, $isRequired);
        if($errMsg){
            echo '<p class="redText errMessage">';
            echo    '<style>.redText.errMessage{display:block;}</style>';
            echo    '<img class="exclamationImage" src="assets/images/exclamation.png" alt="">';
            echo    "      ".$errMsg;
            echo '</p>';
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

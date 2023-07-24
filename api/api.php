<!-- Le script du formulaire -->
<?php 
    //Vérifier si les champs(les valeurs de $_POST) sont vides
    function isEmpty(&$postData, &$stockData, &$msgErrVar, &$msgErrVal) {
        if (empty($postData)){
            include("local/strings.php");
            $msgErrVar = $$msgErrVal[0];
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
    function validText(&$text, &$msgErrVar, &$msgErrVal){
        if (!preg_match("/^[a-zA-Z-'éèà ]*$/", $text)){
            include("local/strings.php");
            $msgErrVar = $$msgErrVal[1];
        }
    }
    // ces variables vont contenir les données à envoyer
    $email = $nom = $prenom = $titreStg = $org = $date = "";
    $emailErr = $nomErr = $prenomErr = $titreStgErr = $orgErr = $dateErr = "";
    // Vérifier si les données sont envoyées (avec la methode post)
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sendForm"])){
        if (isEmpty($_POST["email"], $email, $emailErr, $lng)){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                include("local/strings.php");
                $emailErr = $$lng[2];
            }
        }
        if (!empty($_POST["titreStg"])){
            $titreStg = test_entree($_POST["titreStg"]);
            validText($titreStg, $titreStgErr, $lng);
        }
        if (isEmpty($_POST["nom"], $nom, $nomErr, $lng))            validText($nom, $nomErr, $lng);
        if (isEmpty($_POST["prenom"], $prenom, $prenomErr, $lng))   validText($prenom, $prenomErr, $lng);
        if (isEmpty($_POST["org"], $org, $orgErr, $lng))            validText($org, $orgErr, $lng);
        isEmpty($_POST["date"], $date, $dateErr, $lng);
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

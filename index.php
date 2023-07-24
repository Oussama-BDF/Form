<?php 
    if (isset($_COOKIE["langCk"])){
        if ($_COOKIE["langCk"] == "ar"){
            include("pages/ar.php");
            exit();
        } else {
            include("pages/fr.php");
            exit();
        }
    }else{
        // $lng = (isset($_COOKIE['LangCk'])) ? $_COOKIE['langCk'] : "fr";
        // include("pages/".$lng.'.php'); 
        include("pages/fr.php");
    }
?>
<?php 
    $pageLanguage = (isset($_COOKIE['langCk'])) ? $_COOKIE['langCk'] : "fr";
    include("pages/home.php"); 
    exit();
?>
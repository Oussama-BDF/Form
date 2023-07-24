<?php 
    $lng = (isset($_COOKIE['langCk'])) ? $_COOKIE['langCk'] : "fr";
    include("pages/homePage.php"); 
    exit();
?>
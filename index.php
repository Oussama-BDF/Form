<?php 
    $lng = (isset($_COOKIE['langCk'])) ? $_COOKIE['langCk'] : "fr";
    include("pages/".$lng.'.php'); 
    exit();
?>
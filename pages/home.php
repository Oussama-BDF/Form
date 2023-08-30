<?php
    include("src/api.php");
?>


<!DOCTYPE html>
<html dir="<?php echo ($pageLanguage == 'ar') ? 'rtl' : 'ltr' ;  ?>">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/formStyle.css?v=1.0.2">
        <?php if (isset($_COOKIE["modeCk"]) && $_COOKIE["modeCk"]=="darkMode"):?>
            <link rel="stylesheet" href="assets/darkMode.css?v=1.0.0">
        <?php else:?>
            <link rel="stylesheet" href="assets/lightMode.css?v=1.0.0">
        <?php endif;?>
        <title><?php echo $message["home"]["titre"]; ?></title>
    </head>
    <body>
        <div class="container">
            <div class="row" style="position: fixed; top: 5px; left: 5px; text-align: center; ">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                    <select class="SelectLanguage" name="lang" onchange="this.form.submit()">
                        <option class="SelectLanguage" value="<?php echo $message["home"]["selectLanguage"]["lang1"]["value"];?>" >
                            <?php echo $message["home"]["selectLanguage"]["lang1"]["libelle"];?> 
                        </option>            
                        <option class="SelectLanguage" value="<?php echo $message["home"]["selectLanguage"]["lang2"]["value"];?>" >
                            <?php echo $message["home"]["selectLanguage"]["lang2"]["libelle"];?>
                        </option>
                    </select>
                </form>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                    <input class="changeMode" type="submit" name="mode" 
                        value= "<?php echo (isset($_COOKIE["modeCk"])? ($_COOKIE["modeCk"]=="lightMode"? "darkMode":"lightMode") : "darkMode");?>" />
                </form>
            </div>
            <div class="row flex">
                <div class="col-100 mrgBlck-6">
                    <header class="item head">
                        <h1><?php echo $message["home"]["head_item"]["titre"]; ?></h1>
                        <p><?php echo $message["home"]["head_item"]["paragraphe"]; ?></p>
                        <hr>
                        <div class="emailImg">
                            <p class="email">
                                <b>oussama.boudafdafa@gmail.com </b>
                                <span class="bleuText">
                                    <?php echo $message["home"]["head_item"]["changer_compte"]; ?>
                                </span>
                            </p>
                            <img  class="cloudImg" src="" alt="" style="<?php if($pageLanguage == "ar") echo "float: left;"?>">
                        </div>
                        <hr>
                        <p class="redText">
                            <?php echo $message["home"]["head_item"]["indication"]; ?>
                        </p>
                    </header>
                </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                <div class="row flex">
                    <div class="col-100 mrgBlck-6">
                        <div class="item inpt ">
                            <label for="em">
                                <?php echo $message["home"]["formulaire"]["email"]["libelle"]; ?><span class="redText">*</span>
                            </label>
                            <input id="em" type="text" name="email" 
                                placeholder="<?php echo $message["home"]["formulaire"]["email"]["placeholder"]; ?>">
                            <?php displayErrMsg($_POST["email"], $email, "email", "validateEmail");?>
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mrgBlck-6">
                        <div class="item inpt">
                            <label for="nom">
                                <?php echo $message["home"]["formulaire"]["nom"]["libelle"]; ?><span class="redText"> *</span>
                            </label>
                            <input id="nom" type="text" name="nom" 
                                placeholder="<?php echo $message["home"]["formulaire"]["nom"]["placeholder"]; ?>">
                            <?php displayErrMsg($_POST["nom"], $nom, "nom", "validateText");?>
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mrgBlck-6">
                        <div class="item inpt">
                            <label for="pren">
                                <?php echo $message["home"]["formulaire"]["prenom"]["libelle"]; ?><span class="redText"> *</span>
                            </label>
                            <input id="pren" type="text" name="prenom" 
                                placeholder="<?php echo $message["home"]["formulaire"]["prenom"]["placeholder"]; ?>">
                            <?php displayErrMsg($_POST["prenom"], $prenom, "prenom", "validateText");?>
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mrgBlck-6">
                        <div class="item inpt">
                            <label for="titreStg">
                                <?php echo $message["home"]["formulaire"]["titreStg"]["libelle"]; ?>
                            </label>
                            <input id="titreStg" type="text" name="titreStg" 
                                placeholder="<?php echo $message["home"]["formulaire"]["titreStg"]["placeholder"]; ?>">
                            <?php displayErrMsg($_POST["titreStg"], $titreStg, "titreStg", "validateText", false);?>
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mrgBlck-6">
                        <div class="item inpt">
                            <label for="org">
                                <?php echo $message["home"]["formulaire"]["org"]["libelle"]; ?><span class="redText"> *</span>
                            </label>
                            <input id="org" type="text" name="org" 
                                placeholder="<?php echo $message["home"]["formulaire"]["org"]["placeholder"]; ?>">
                            <?php displayErrMsg($_POST["org"], $org, "org", "validateText");?>
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mrgBlck-6">
                        <div class="item inpt">
                            <label for="date">
                                <?php echo $message["home"]["formulaire"]["date"]["libelle"];?><span class="redText">*</span>
                            </label>
                            <input id="date" type="date" name="date">
                            <?php displayErrMsg($_POST["date"], $date, "date");?>
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mrgBlck-6">
                        <div class=" buttons">
                            <input class="envoyer" type="submit" name="sendForm" 
                                value="<?php echo $message["home"]["formulaire"]["envoyer"];?>" >
                            <input class="effacer" type="reset" name="effacer" 
                                style="<?php if($pageLanguage == "ar") echo "float: left;"?>" 
                                value="<?php echo $message["home"]["formulaire"]["effacer"];?>" >
                        </div>
                    </div>
                </div>
            </form>
            <div class="row flex">
                <div class="col-100 mrgBlck-6">
                    <footer>
                        <p><?php echo $message["home"]["footer"]["N'envoyez"];?></p>
                        <p class="centre">
                            <?php echo $message["home"]["footer"]["ceForm"];?>
                            <u><?php echo $message["home"]["footer"]["Signaler"];?></u>
                        </p>
                        <p class="centre GoogleForms"><b>Google</b> Forms</p>
                    </footer>
                </div>
            </div>
            <div class="row">
                <img class="info" src="assets/images/info.png" alt="">
            </div>
            
        </div>
    </body>
</html>
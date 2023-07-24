<?php
    include("api/api.php");
?>


<!DOCTYPE html>
<html dir="<?php echo ($lng == 'ar') ? 'rtl' : 'ltr' ;  ?>">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/formStyle.css?v=1.0.0">
        <title><?php echo $message["home"]["head_item"]["titre"]; ?></title>
        <style>
            <?php if (isset($_COOKIE["modeCk"]) && $_COOKIE["modeCk"]=="dr")    include("assets/darkMode.css");?>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row " style="position: fixed; top: 5px; left: 5px; text-align: center; ">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                    <select class="SelectLang" name="lang" onchange="this.form.submit()">
                        <option class="SelectLang" value="<?php echo $message["home"]["selectLang"]["lang1"]["value"];?>"> <?php echo $message["home"]["selectLang"]["lang1"]["libelle"];?> </option>            
                        <option class="SelectLang" value="<?php echo $message["home"]["selectLang"]["lang2"]["value"];?>"> <?php echo $message["home"]["selectLang"]["lang2"]["libelle"];?> </option>
                    </select>
                </form>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                    <input class="ModeCh" type="submit" name="mode" value= "<?php echo (isset($_COOKIE["modeCk"])? ($_COOKIE["modeCk"]=="lt"? "dr":"lt") : "dr");?>"/>
                </form>
            </div>
            <div class="row flex">
                <div class="col-100 mBlck-6">
                    <header class="item head">
                        <h1><?php echo $message["home"]["head_item"]["titre"]; ?></h3>
                        <p><?php echo $message["home"]["head_item"]["paragraphe"]; ?></p>
                        <hr>
                        <div class="emailImg">
                            <p class="email" >oussama.boudafdafa@gmail.com <span class="bleuText"><?php echo $message["home"]["head_item"]["changer_compte"]; ?></span></p>
                            <img  class="cloudImg" src="" alt="" style="<?php if($lng == "ar") echo "float: left;"?>">
                        </div>
                        <hr>
                        <p class="redText"><?php echo $message["home"]["head_item"]["indication"]; ?></p>
                    </header>
                </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt ">
                            <label for="em"><?php echo $message["home"]["formulaire"]["email"]["libelle"]; ?><span class="redText">*<?php echo validate($_POST["email"], $email, "validateEmail");?></span></label>
                            <input id="em" type="text" name="email" placeholder="<?php echo $message["home"]["formulaire"]["email"]["placeholder"]; ?>">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="nom"><?php echo $message["home"]["formulaire"]["nom"]["libelle"]; ?><span class="redText">*<?php echo validate($_POST["nom"], $nom, "validateText");?></span></label>
                            <input id="nom" type="text" name="nom" placeholder="<?php echo $message["home"]["formulaire"]["nom"]["placeholder"]; ?>">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="pren"><?php echo $message["home"]["formulaire"]["prenom"]["libelle"]; ?><span class="redText">*<?php echo validate($_POST["prenom"], $prenom, "validateText");?></span></label>
                            <input id="pren" type="text" name="prenom" placeholder="<?php echo $message["home"]["formulaire"]["prenom"]["placeholder"]; ?>">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="titreStg"><?php echo $message["home"]["formulaire"]["titreStg"]["libelle"]; ?><span class="redText"><?php echo validate($_POST["titreStg"], $titreStg, "validateText", false);?></span></label>
                            <input id="titreStg" type="text" name="titreStg" placeholder="<?php echo $message["home"]["formulaire"]["titreStg"]["placeholder"]; ?>">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="org"><?php echo $message["home"]["formulaire"]["org"]["libelle"]; ?><span class="redText">*<?php echo validate($_POST["org"], $org, "validateText");?></span></label>
                            <input id="org" type="text" name="org" placeholder="<?php echo $message["home"]["formulaire"]["org"]["placeholder"]; ?>">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="date"><?php echo $message["home"]["formulaire"]["date"]["libelle"];?><span class="redText">*<?php echo validate($_POST["date"], $date);?></span></label>
                            <input id="date" type="date" name="date">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class=" buttons">
                            <input class="envoyer" type="submit" value="<?php echo $message["home"]["formulaire"]["envoyer"];?>" name="sendForm">
                            <input class="effacer" type="reset" value="<?php echo $message["home"]["formulaire"]["effacer"];?>" name="effacer" style="<?php if($lng == "ar") echo "float: left;"?>">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row flex">
                <div class="col-100 mBlck-6">
                    <footer>
                        <p><?php echo $message["home"]["footer"]["N'envoyez"];?></p>
                        <p class="centre"><?php echo $message["home"]["footer"]["ceForm"];?><u><?php echo $message["home"]["footer"]["Signaler"];?></u></p>
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
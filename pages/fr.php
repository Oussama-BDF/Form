<?php
    include("api/api.php");
?>


<!DOCTYPE html>
<html dir="<?php echo ($lng == 'ar') ? 'rtl' : 'ltr' ;  ?>">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/formStyle.css?v=1.0.0">
        <title>Formulaire "Stage d'initiation"</title>
        <style>
            <?php if (isset($_COOKIE["modeCk"]) && $_COOKIE["modeCk"]=="dr")    include("assets/darkMode.css");?>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row " style="position: fixed; top: 5px; left: 5px; text-align: center; ">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                    <select class="SelectLang" name="lang" onchange="this.form.submit()">
                        <option class="SelectLang" value="fr">Francais</option>            
                        <option class="SelectLang" value="ar">Arabe</option>
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
                        <h1>Formulaire "Stage d'initiation"</h3>
                        <p>Formulaire pour la collecte des informations en relation avec les stages d'initiation</p>
                        <hr>
                        <div class="emailImg">
                            <p class="email" >oussama.boudafdafa@gmail.com <span class="bleuText">Changer de compte</span></p>
                            <img  class="cloudImg" src="" alt="">
                        </div>
                        <hr>
                        <p class="redText">* Indique une question obligatoire</p>
                    </header>
                </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt ">
                            <label for="em">Adresse e-mail <span class="redText">*<?php echo $emailErr;?></span></label>
                            <input id="em" type="text" name= "email" placeholder="Votre adresse email">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="nom">Nom <span class="redText">*<?php echo $nomErr;?></span></label>
                            <input id="nom" type="text" name= "nom" placeholder="Votre réponse">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="pren">Prenom <span class="redText">*<?php echo $prenomErr;?></span></label>
                            <input id="pren" type="text" name= "prenom" placeholder="Votre réponse">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="titreStg">Titre du stage <span class="redText"><?php echo $titreStgErr;?></span></label>
                            <input id="titreStg" type="text" name= "titreStg" placeholder="Votre réponse">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="org">Organisme d'accueil <span class="redText">*<?php echo $orgErr;?></span></label>
                            <input id="org" type="text" name= "org" placeholder="Votre réponse">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="date">Date debut de stage <span class="redText">*<?php echo $dateErr;?></span></label>
                            <input id="date" type="date" name="date">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class=" buttons">
                            <input class="envoyer" type="submit" value="Envoyer" name="sendForm">
                            <input class="effacer" type="reset" value="Effacer le formulaire" name="effacer">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row flex">
                <div class="col-100 mBlck-6">
                    <footer>
                        <p>N'envoyez jamais de mots de passe via Google Forms.</p>
                        <p class="centre">Ce formulaire a été créé dans Universite Chouaib Doukkali. <u>Signaler un cas d'utilisation abusive</u></p>
                        <p class="centre GoogleForms"><b>Google</b> Forms</p>
                    </footer>
                </div>
            </div>
            <div class="row">
                <img class="info" src="assets/images/info.png" alt="">
            </div>
            
        </div>


        <!-- document.getElementById("id1").innerHTML="new text"; // .att="new value"  // .style.att="new value" // -->
        <!-- <button type="button" onclick="function3()">click</button>
        <p id="id1"></p>
        <script src="Formulaire.js"></script> -->
    </body>
</html>


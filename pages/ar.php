
<?php
    include("api/api.php");
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/formStyle.css?v=1.0.0">
        <title>Formulaire "Stage d'initiation"</title>
        <style>
            <?php if (isset($_COOKIE["modeCk"]) && $_COOKIE["modeCk"]=="dr")    include("assets/darkMode.css");?>
        </style>
    </head>
    <body style="direction: rtl;">
        <div class="container">
            <div class="row" style="position: fixed; top: 5px; left: 5px; text-align: center;">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <select class="SelectLang" name="lang" onchange="this.form.submit()">
                        <option class="SelectLang" value="ar">العربية</option>            
                        <option class="SelectLang" value="fr">الفرنسية</option>
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
                        <h1>استمارة "دورة التهيئة"</h3>
                        <p>نموذج لجمع المعلومات المتعلقة بدورات البدء</p>
                        <hr>
                        <div class="emailImg">
                            <p class="email" >oussama.boudafdafa@gmail.com <span class="bleuText">غير الحساب</span></p>
                            <img src="" class="cloudImg" alt="" style="float: left;">
                        </div>
                        <hr>
                        <p class="redText">* يشير إلى أن معلومة مطلوبة</p>
                    </header>
                </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt ">
                            <label for="em">عنوان البريد الإلكتروني <span class="redText">*<?php echo $emailErr;?></span></label>
                            <input id="em" type="text" name= "email" placeholder="بريدك الالكتروني">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="nom">الإسم <span class="redText">*<?php echo $nomErr;?></span></label>
                            <input id="nom" type="text" name= "nom" placeholder="إجابتك">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="pren">النسب <span class="redText">*<?php echo $prenomErr;?></span></label>
                            <input id="pren" type="text" name= "prenom" placeholder="إجابتك">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="titreStg">عنوان التدريب <span class="redText"><?php echo $titreStgErr;?></span></label>
                            <input id="titreStg" type="text" name= "titreStg" placeholder="إجابتك">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="org">المنظمة المضيفة <span class="redText">*<?php echo $orgErr;?></span></label>
                            <input id="org" type="text" name= "org" placeholder="إجابتك">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class="item inpt">
                            <label for="date">تاريخ بدء التدريب <span class="redText">*<?php echo $dateErr;?></span></label>
                            <input id="date" type="date" name="date">
                        </div>
                    </div>
                </div>
                <div class="row flex">
                    <div class="col-100 mBlck-6">
                        <div class=" buttons">
                            <input class="envoyer" type="submit" value="إرسال" name="sendForm">
                            <input class="effacer" type="reset" value="مسح الإستمارة" name="effacer" style="float: left;">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row flex">
                <div class="col-100 mBlck-6">
                    <footer>
                        <p>لا ترسل أبدًا كلمات المرور من خلال نماذج Google.</p>
                        <p class="centre">تم إنشاء هذا النموذج في جامعة شعيب الدكالي. <u>الإبلاغ عن إساءة الاستخدام</u></p>
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


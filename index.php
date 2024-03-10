<?php
    include 'formulaire.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="form-section">
        <div class="grid-col">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="grid-form">
                    <label for="prenom" >Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" class="formstyle">
                    <div class="php-info">
                        <?php if (!empty($prenom)) { 
                        $prenomInfo = $prenomInfo; }
                        else {
                             echo $prenomInfo;
                        }
                         ?>
                    </div>
                </div>
                <div class="grid-form">
                    <label for="nom" >Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" class="formstyle">
                    <div class="php-info">
                        <?php if (!empty($nom)) { 
                        $nomInfo = $nomInfo; }
                        else {
                             echo $nomInfo;
                        }
                         ?>
                    </div>
                </div>
                <div class="grid-form">
                    <label for="Mail" >Mail :</label>
                    <input type="mail" name="mail" id="Mail" placeholder="Votre Mail" class="formstyle">
                    <div class="php-info"><?php if(!empty($mail)) {

                        if ( preg_match ( " /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ " , $mail ) ){
                            $mailInfo = $mailInfo;
                        }

                        else {
                            $mailInfo = "Le mail n'est pas valide !";
                        }
                        }

                        else {
                        $mailInfo = "Le champ du mail est vide";
                        } ?>
                    </div>
                </div>
                <div class="grid-form">
                    <label for="tel" >Téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="Votre Téléphone" class="formstyle">
                    <div class="php-info"><?php 
                    if(!empty($tel)) {

                        if ( preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $tel ) ){
                            $telInfo = $telInfo;
                        }
                
                        else {
                        $telInfo = "Le téléphone n'est pas valide !";
                        }
                    }
                
                    else {
                        $telInfo = "Le champ du téléphone est vide";
                    } ?>
                    </div>
                </div>
                <div class="grid-form">
                    <label for="sujet" >Sujet du message</label>
                    <input type="text" name="sujet" id="sujet" placeholder="Sujet du message" class="formstyle">
                </div>
                <div class="grid-form">
                    <label for="message" >Message</label>
                    <textarea id="message" name="message" rows="5" cols="33" class="formstyle"></textarea>
                    <div class="php-info">
                        <?php if (!empty($message)) { 
                        $messageInfo = $messageInfo; }
                        else {
                             echo $messageInfo;
                        }
                         ?>
                    </div>
                </div>
                <div class="grid-form">
                <div>
                    <label for="news">S'inscrire à la Newsletter</label>
                    <input type="checkbox" id="news" name="news" />
                    <div class="php-info"><?php 
                    if(isset($_POST['news']) && $_POST['news']!="") {
                        $newsInfo = 'inscrit à la newsletter'; }

                    else {
                        $newsInfo = "Non inscrit à la newsletter";
                    }
                     ?></div>
                </div>
                <div>
                    <br><br><input type="submit" value="Envoyer le formulaire" />
                </div>
                <div>
                <input type="file" name="files" />
                </div>
            </form> 
        </div>

        <!-- Recap -->

        <div>
    <h1>Récap des infos</h1>
    <div> <?php echo $telInfo; ?> </div>
    <div> <?php echo $mailInfo; ?> </div>
    <div> <?php echo $prenomInfo; ?> </div>
    <div> <?php echo $nomInfo; ?> </div>
    <div> <?php echo $messageInfo; ?> </div>
    <div> <?php echo $newsInfo; ?> </div>
</div>





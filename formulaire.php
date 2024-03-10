<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$news = $_POST['news'];


    if(!empty($tel)) {

        if ( preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $tel ) ){
            $telInfo = "Le téléphone est valide";
        }

        else {
        $telInfo = "Le téléphone n'est pas valide !";
        }
    }

    else {
        $telInfo = "Le champ du téléphone est vide";
    }



    if(!empty($mail)) {

        if ( preg_match ( " /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ " , $mail ) ){
            $mailInfo = "Le mail est valide";
        }
        
        else {
            $mailInfo = "Le mail n'est pas valide !";
        }
    }

    else {
        $mailInfo = "Le champ du mail est vide";
    }



    if(!empty($prenom)) {

        if (strlen($prenom) > 64) {
            $prenomInfo = "Le nombre de caractère de prénom est trop élevé";
        } 

        else {
            $prenomInfo = "le prénom est valide";
            
        }
    }

    else {
        $prenomInfo = "Le champ de prénom est vide";
    }


    
    if(!empty($nom)) {

        if (strlen($nom) > 64) {
            $nomInfo = "Le nombre de caractère de nom est trop élevé";
        } 

        else {
            $nomInfo = "le nom est valide";
        }
    }

    else {
        $nomInfo = "Le champ de nom est vide";
    }



    if(!empty($message)) {
            
        $messageInfo = "le message est valide";
    }

    else {
        $messageInfo = "le champ message est vide";
    }



    if(isset($_POST['news']) && $_POST['news']!="")
    {
        $newsInfo = 'inscrit à la newsletter'; 
    }

    else {
        $newsInfo = "Non inscrit à la newsletter";
    }


    // Envoie de fichier 

    if (isset($_FILES['files']) AND $_FILES['files']['error'] == 0) {

        if ($_FILES['files']['size'] <= 2000000) {
            
            $infosfichier = pathinfo($_FILES['files']['name']);

            $extension_upload = $infosfichier['extension'];

            $extensions_autorisees = array('jpg', 'doc', 'pdf', 'png', 'docx', 'txt');

            if (in_array($extension_upload, $extensions_autorisees)) {
                
                $dossier = "dossier/";
                $fichier = basename($_FILES['files']['name']);
                if(move_uploaded_file($_FILES['files']['tmp_name'], $dossier . $fichier)) {
                    echo 'Upload effectué avec succès !';

                }
                else {
                    echo 'Echec de l\'upload !';
                }
            }
        }

        else {
            echo "le fichier est trop lourd";
        }

    }

    else {
        $filesInfo = "erreur dans l'envoi du fichier";
    }

?>



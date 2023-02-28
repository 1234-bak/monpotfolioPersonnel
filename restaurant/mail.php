<?php
if (isset($_POST['envoyer'])) {
    if ((empty($_POST['nom'])) || (empty($_POST['mail'])) || (empty($_POST['message']))) {
        echo '<div class="msg error">merci de bien vouloir remplir tout les champs</div>';
        
    }else {
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];

        $desti = 'ibrahimbakayoko2991@gmail.com';
        $sujet = 'message en provenance de votre sites SanaBouf';
        $contenu = "ce message en provenance de votre site a été envoyer par : \n";
        $contenu .= "NOM: $nom \n";
        $contenu .= "Email: $mail \n";
        $contenu .= "Message: $message ";
        $entete = "FROM: $desti";

        mail($desti,$sujet,$contenu,$entete);

        echo '<div class="msg success">votre message a bien été envoyer</div>';
    
    }
}



?>
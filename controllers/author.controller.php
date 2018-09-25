<?php
/**
 * Vérifie les données envoyées lors de l'envoie du formulaire sur la page 'author'
 * Puis met en form le mail Qui sera envoyé à l'adresse du propriétaire du site.
 * si tout est OK on affiche le message 'succes' qui est dans 'js/author.func.js'
 */
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));
    $to = "arnauddesvignes@icloud.com";
    $from = $email;
    $message_format = '<b><span style="font-size: 20px;">Provenance de votre site : BILLET SIMPLE POUR L\'ALASKA<br/>Nom et Prénom : '.$name.' <br/>Adresse Email : '.$email.'</span></b><p><span style="font-size: 18px;">'.$message.'</span></p>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "content-type: text/html; charset=utf-8\n";
    if(mail($to, $subject, $message_format, $headers)){
        echo "success";
    }else{
        echo "The server failed to send the message. Please try again later.";
    }
}
?>
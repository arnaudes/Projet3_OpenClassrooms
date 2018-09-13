<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));
    $to = "arnauddesvignes@icloud.com";
    $from = $email;
    $message_format = '<b><span style="font-size: 20px;">Nom et Prénom : '.$name.' <br>Adresse Email : '.$email.'</span></b><p><span style="font-size: 18px;">'.$message.'</span></p>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "content-type: text/html; charset=utf-8\n";
    if(mail($to, $subject, $message_format, $headers)){
        echo "success";
    }else{
        echo "The server failed to send teh message. Please try again later.";
    }
}
?>
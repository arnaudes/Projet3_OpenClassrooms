<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = htmlspecialchars(nl2br($_POST['message']));
    $to = "arnauddesvignes@icloud.com";
    $from = $email;
    $message_format = "<strong>Nom: </strong>'.$name.' <br/><strong>Email:</strong> '.$email.' <br/><p>'.$message.'</p>";
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "content-type: text/html; charset=iso-8859-1\n";
    if(mail($to, $headers, $message_format)){
        echo "success";
    }else{
        echo "The server failed to send the message. Please try again later.";
    }
}
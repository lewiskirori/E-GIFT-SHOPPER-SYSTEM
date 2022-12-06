<?php
    $receiver = "papilocsta19@gmail.com";
    $subject  = "New Gift Notification..!";
    $body     = "Hello, there!...This is an email to inquire newest gifts from the shop.";
    $sender   = "From: coldcode703@gmail.com";

    if(mail($receiver, $subject, $body, $sender)){//php function send mail
        echo "Email sent successfully to $receiver !" ;
    }else{
        echo "Sorry, failed while sending mail!";
    }
?>
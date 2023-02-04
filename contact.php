<?php
    $name          = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message       = $_POST['message'];

    $email_from ='$visitor_email';

    $email_subject = "Talk to Us!<<egs>>";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to             = "```";

    $headers        = "From: $email_from \r\n";

    $headers       .= "Reply-To: $visitor_email \r\n";

    mail ($to,$email_subject,$email_body,$headers);

    header("Location: contact.htm");

?>

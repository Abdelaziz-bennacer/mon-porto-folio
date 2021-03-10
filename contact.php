<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "abdelazizbendevjava@outlook.fr";
    $headers = "From: ".$mailFrom;
    $txt = "Vous avez reçu un message de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    //header("Location: contact.php?mailsend");
}


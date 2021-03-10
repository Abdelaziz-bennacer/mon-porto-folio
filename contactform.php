<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "abdelazizbendevjava@outlook.fr";
    $headers = "From: ".$mailFrom;
    $txt = "Vous avez reçu un message de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");
}


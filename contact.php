<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "contact.abdelaziz.dev.java@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Vous avez reçu un message de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}


<?php

if (isset($_POST['submit__button'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "alihaiderkhannews@gmail.com";
    $headers = "From: My website".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name."\n\n".$message; 

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");
}
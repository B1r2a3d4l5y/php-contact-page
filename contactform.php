<?php

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "dani@mmtuts.net";
    $headers = "From:".$mailFrom;
    $txt = "You have recived an e-mail from".$name.". /n/n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend")

}
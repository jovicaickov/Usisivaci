<?php

if (isset($_POST['submit'])) {
    $subject = "New e-mail";
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "jovica.ickov@hotmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an e-mail from: ".$name.".\n\n"."Message: ".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html");
}
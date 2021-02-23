<?php

if (isset($_POST['submit'])) {
    $subject = "Pristigla vam je nova poruka sa sajta";
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];
    $findus = $_POST['find-us'];
    $phone = $_POST['tel'];
    
    $mailTo = "jovica.ickov@hotmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "Dobili ste novu poruku od: ".$name.".\n\n"."Broj telefona: ".$phone.".\n\n"."Poruka: ".$message."\n\n"."Saznao sam za vas preko: ".$findus.".";
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html");
}
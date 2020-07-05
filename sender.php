<?php 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hamsik11@azet.sk";
    $headers = "From: ".$mailFrom;
    $txt = "Dostal si e-mail od ".$name."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
?>
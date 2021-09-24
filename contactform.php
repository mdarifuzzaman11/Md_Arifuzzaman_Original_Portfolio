<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailForm = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "marif@engineer.com";
    $headers = "Form: ".$mailForm;
    $txt = "You Have an email from ".$name. ".\n\n".$message ;

    mail($mailTo,$subject, $txt, $headers );
    header("Location: index.php?mailsend");
}

?>
<?php 
if (isset($_POST['submit'])) {
    $name = $POST['name'];
    $subject = $POST['subject'];
    $mailFrom = $POST['mail'];
    $message = $POST['message'];
    $mailTo = "mendes"

    mail();
}


?>
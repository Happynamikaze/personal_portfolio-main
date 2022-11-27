<?php
    $name = $_POST['name'];
    $title = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "ss4039417@gmail.com";

    $subject = $title;
    $txt = "<h2>$name</h2>" . "<br>" . "Email: " . "<p>$email</p>" . "<br>" . "Message: " . "<p>$message</p>";

    $headers = "From: noreply@warclouser.com" . "<br>" . "CC: ss4039417@gmail.com";

    if($email != NULL) {
        mail($to,$subject,$txt,$headers);
        header("Location:index.html");
    }
?>
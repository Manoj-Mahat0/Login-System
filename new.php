<?php
$receiver = "manojmahato08779@gmail.com";
$subject = "manojmahato0877@gmail.com";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:sender email address here";

if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>
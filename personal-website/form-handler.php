<?php

$name = $_POST['name'];
$mail  $_POST['mail'];
$feedback = $_POST['feedback'];

$email_from = "srinityasuripeddi@gmail.com";
$email_subject="user form submission";
$email_body="Hey".$name.", I'm so thriled to recieve your message via my personal website.";
$to = $mail;
$header="Reply to msg: Srinitya";

mail($to,$email_subject,$email_body,$header);
header("Location: index.html");
?>
<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Hello!";
    $message = $_POST['message'];

    $mailTo = "henrique.ojeda@outlook.com";
    $headers = "From: ".$email;
    $txt = "Message from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);

// echo("Test2");
header("Location: index.html?mailsend");
}

if (mail($mailTo, $subject, $txt, $headers)!==true){
    die('Fail to send');

}
die('Success');


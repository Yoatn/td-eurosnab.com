<?php

    $contactname = $_POST["contactname"];

    $contactemail = $_POST["contactemail"];

    $contact = $_POST["contactphone"];



$EmailTo = "mail@mail.ru";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Имя: ";
$Body .= $contactname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $contactemail;
$Body .= "\n";
$Body .= "Телефон: ";
$Body .= $contactphone;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
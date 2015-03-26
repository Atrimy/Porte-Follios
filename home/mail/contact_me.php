<?php
    // Check for empty fields
    if(empty($_POST['name'])  		||
       empty($_POST['email']) 		||
       empty($_POST['phone']) 		||
       empty($_POST['message'])	        ||
       !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
       {
            echo "Le formulaire du message est incomplet !";
            echo $_POST['name'].$_POST['email'].$_POST['phone'].$_POST['message'];
            return false;
       }

    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Create the email and send the message
    $to = 'pierre.d53@live.fr'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "ReDclouds-Corp messagers : $name";
    $email_body = "Voici les d�tails :\n\nNom : $name\n\nE-mail: $email_address\n\nTelephone: $phone\n\nMessage:\n$message";
    $headers = "From: pierre.d53@live.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";	
    mail($to,$email_subject,$email_body,$headers);
    return true;			
?>
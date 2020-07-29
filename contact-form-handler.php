<?php
    $visitor_email = $_POST['email'];

    $email_from= 'Starpharmacy@Starpharmacy.com';

    $email_subject= "New Website Form Submission";

    $email_body=   "User Email: $visitor_email.\n".;

    #to= "meaadhassan09@gmail.com";

    $headers ="From: $email_from \r \n";

    $headers .="Reply-To: $visitor_email \r\n";
    
    mail($to, $email_subject, $email_body,$headers);

    header("Location: index.html");

    
?>
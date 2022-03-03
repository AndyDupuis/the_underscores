<?php
    $name=$_POST['name'];
    $message=$_POST['message']
?>
<?php
    $email_from = 'tomasmillakoch97@gmail.com'
    $email_subject = 'New Form Submission (App Challenge)'
    $email_body = "You have received a new message from $name. \n".
                "Here is the message: \n %message".
?>
<?php
    $to = "tomasmillakoch97@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
?>
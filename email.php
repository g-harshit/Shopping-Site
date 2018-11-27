<?php
$mail->SetFrom($email,$name);
    $address = "gharshit1237@gmail.com";
    $mail->AddAddress($address, "Harshit Gupta");
    $mail->Subject    = "Contact form ".$name;
    $mail->MsgHTML($emailbody);
    if(!$mail->Send()) {
       echo "OOPS!!something went wrong in sending email: " . $mail->ErrorInfo;
	   exit;
    }
?>
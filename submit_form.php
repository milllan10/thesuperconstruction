<?php
require('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;

try {
    $mail->SMTPDebug = 2;                                    
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                
    $mail->Username   = 'milanhingu9987@gmail.com';          
    $mail->Password   = 'mulikwqfhelymrge';                  
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;                                 
    $mail->setFrom('milanhingu9987@gmail.com', 'The Super Construction');
    $mail->addAddress($_POST['email'], 'Milan Hingu');     
    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Thankyou For contacting The Super Construction';
    $mail->Body    = 'This is the Password and Username reset message';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
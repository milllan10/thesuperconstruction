<?php
require('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;

try {
    $mail->SMTPDebug = 2;                                    
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                
    $mail->Username   = 'milanhingu9987@gmail.com';          
    $mail->Password   = '';                  
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;                                 
    $mail->setFrom('milanhingu9987@gmail.com', 'The Super Construction');
    $mail->addAddress($_POST['email'], 'Milan Hingu');     
    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Thankyou For contacting The Super Construction';
    $mail->Body    = '<html>
    <head>
        <style>
            *{
                font-family:Arial, Helvetica, sans-serif;
                background-color: #f1f3ff;
            }
            p{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>
            <p>Hello , '.$_POST["name"].'</p>
            <p>Thankyou for contacting us.</p>
            <p>Your message was "' .$_POST["message"]. ' " We appreciate your time and thoughts.</p>
            <p>We Will Soon contact you on your given number/email</p>
            <span>Regards<br><a href="https://milllan10.github.io/thesuperconstruction.github.io/">The Super Construction,</a>Team.</span>
        </div>
    </body>
</html>';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

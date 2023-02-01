<!-- contact us form  -->

<?php

    // extract($_POST);

    // $_POST['lead_email']

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;    
   $mail->SMTPDebug = 2;
   //Enable verbose debug output
   //  $mail->isSMTP();  
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    // $mail->Host       = 'localhost';                     //Set the SMTP server to send through

     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->SMTPSecure = 'tls';
    $mail->Username   = 'samarpit@fuellingrockets.com';                     //SMTP username
    $mail->Password   = 'szasgxegpzreyzpj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("samarpit@fuellingrockets.com");
    $mail->addAddress("Samarpit.shankey@gmail.com");
    $mail->addAddress('samarpit@fuellingrockets.com');
    // $mail->addAddress('gnshkhr@gmail.com');     //Add a recipient
    // $mail->addAddre'ss('ellen@example.com');             
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('samarpit@fuellingrockets.com');

    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Customer Enquiry ';
    $mail->Body    = 
    "<table style='width:500px;height:auto; box-shadow:0px 0px 15px #ccc; border-radius:8px; border:1px solid #ccc; background:#fff; text-align:center; display:table; margin:0; padding:15px; font-family: Poppins, sans-serif;'>
        <tr>
            <td style='text-align:left; padding-bottom:10px; min-width:134px'>First Name :-</td>
            <td style='text-align:left;'>".$_POST['lead_name']."</td>
        </tr>
        <tr>
            <td style='text-align:left; padding-bottom:10px; min-width:134px'>Email :-</td>
            <td style='text-align:left'>".$_POST['lead_email']."</td>
        </tr>
        <tr>
            <td style='text-align:left; padding-bottom:10px; min-width:134px'>Mobile :-</td>
            <td style='text-align:left'>".$_POST['lead_mobnum']."</td>
        </tr>
        
        <tr>
            <td style='text-align:left; padding-bottom:10px; min-width:134px'>Message :-</td>
            <td style='text-align:left'>".$_POST['lead_query']."</td>
        </tr>
        
        
   </table>";

    $mail->send();
    // $result = 'Message has been sent';
    // header('Location:index.html');

    echo "<script>
        alert('Message has been sent');
        window.location.href='index.html';
    </script>";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
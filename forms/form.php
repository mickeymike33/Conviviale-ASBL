<?php

// titre
$madame = $_GET["madame"];
$monsieur = $_GET["monsieur"];
$mademoiselle = $_GET["mademoiselle"];

// personnal
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$email = $_GET["email"];

// message
$objet = $_GET["objet"];
$message = $_GET["message"];
$file = $_GET["file"];

// format de réponse
$html = $_GET["html"];
$txt = $_GET["txt"];

// conditions
$cgu = $_GET["cgu"];

// send
$contact = $_GET["contact"];
$annuler = $_GET["annuler"];

echo $email;

// require 'php_mailer/PHPMailer.php';

// $mail = new PHPMailer(true);                            
// try {
//     //Server settings
//     $mail->SMTPDebug = 2;                                 // Enable verbose debug output
//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'convivialgmp@gmail.com';                 // SMTP username
//     $mail->Password = 'lovejohnson3.3';                           // SMTP password
//     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 25;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom($email, 'Mailer');
//     $mail->addAddress('convivialgmp@gmail.com', 'Convivial');     // Add a recipient
//     // $mail->addAddress('ellen@example.com');               // Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     $mail->addAttachment($file);         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     //Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = $objet;
//     $mail->Body    = $message;
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     if(isset($_POST['submit'])) {
//         send();
//     }
//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
// }

?>

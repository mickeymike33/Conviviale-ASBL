
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$errors = array();
$date=date("d/m/Y");
$titre= $_POST["titre"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$objet=$_POST["objet"];
$message=$_POST["message"];
$file=$_POST["image_field"];
$format=$_POST["format"];
$terms=$_POST["terms"];
$submit=$_POST["submit"];
$cancel=$_POST["cancel"];

// Verification

// if ($name == "" || $email == "" || $message == "" || $terms == "") {
//     echo "Please fill in the required fields: Name, Email and Details";
//     exit;
// }

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'convivialgmp@gmail.com';                 // SMTP username
    $mail->Password = 'php7.2lol';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $prenom);
    $mail->addAddress('convivialgmp@gmail.com', 'Convivial Asbl');     // Add a recipient
    $mail->addReplyTo($email, $prenom);
    $mail->addCC($email);

    //Upload Image
    $allowed =  array('gif','png' ,'jpg');
    $uploaddir = 'var/tmp/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    $ext = pathinfo($uploadfile, PATHINFO_EXTENSION);
    echo '<pre>';

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) && in_array($ext,$allowed)) {
        echo "Success";
    $mail->addAttachment($uploadfile);
    } else {
        echo "Error";
    }
    var_dump($_FILES);
    print "</pre>";

    //Content
    $mail->isHTML(true);                            // Set email format to HTML
    $mail->Subject = $objet;
    $mail->Body    = $message;
    $mail->AltBody = $message;
    $mail->CharSet = 'UTF-8';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>

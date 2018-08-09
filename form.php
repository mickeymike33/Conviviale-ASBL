<?php 
session_start();
?>

<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

date_default_timezone_set('Europe/Paris');

$errors = array();
$today = date("F j, Y, g:i a"); 
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


$mail = new PHPMailer(true);                              
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'convivialgmp@gmail.com';           // SMTP username
    $mail->Password = 'php7.2lol';                        // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $prenom);
    $mail->addAddress('convivialgmp@gmail.com', 'Convivial Asbl');     // Add a recipient
    // $mail->addReplyTo($email, $prenom);
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
    $mail->isHTML(true);  
    $mail->Subject = $objet;
    switch ($format) {
        case 'html':
            $mail->Body = "<html><head><title>Convivial Asbl</title><style>div{color:red;}</style></head><body><div>$message</div></br></br>$prenom $nom</br>$email</br>$today</br></body></html>";
            break;
        case 'txt':
            $mail->Body = "$message </br></br> $prenom $nom </br>$email</br>$today</br>";
            break;
        default:
            $mail->Body = "$message </br></br> $prenom $nom </br>$email</br>$today</br>";
            break;
    }
    // $mail->Body    = "$message </br></br> $prenom $nom </br>$email</br>$today</br>";
    $mail->AltBody = $message;
    $mail->CharSet = 'UTF-8';

    if($mail->send()){;
    // echo 'Message has been sent';
    // echo "<script>window.location.replace('index.php')</script>";
    $_SESSION['success'] = "Votre message a été envoyé avec succès!";
    }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



// Required field names
$required = array($nom, $prenom, $email, $terms, $message);

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    // $_SESSION['confirm'] = "Veuillez remplir tous les champs.";
    $error = true;
  }
}
if ($error) {
  echo "All fields are required.";
} else {
  echo "Proceed...";
}

//Logs Txt
$file = fopen('form-logs.txt', 'a+'); //Open your .txt file
$content = "\n$today — $prenom : $objet - $message";
fwrite($file , $content); //Now lets write it in there
fclose($file ); //Finally close our .txt
die(header("Location: ".$_SERVER["HTTP_REFERER"]));

?>

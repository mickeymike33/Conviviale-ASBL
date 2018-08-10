<?php $name = basename($_FILES['resume']["name"]);
var_dump($name);
$chemin="assets/";
$chemintotal = $chemin . $name;
var_dump($chemintotal);?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultat</title>
  </head>
  <body>

    <?php
       $to = "to@gmail.com";
       $subject = "This is subject";
       $message = "This is simple text message.";
       $header = "From:from@yantranet.com \r\n";
       $retval = mail ($to,$subject,$message,$header);
       if( $retval == true ){
          echo "Message sent successfully...";
       }else{
          echo "Message could not be sent...";
       }
    ?>

<p> Bienvenue <?php echo $_POST['case'];?>
  <?php echo $_POST['nom'];?> <?php echo $_POST['prenom']; ?> !</p>

<p>Nous vous mettrons au courant des dernieres nouvelle sur votre adresse E-mail : <?php echo $_POST['e-mail']; ?></p>

<p>Votre demande : <?php echo htmlspecialchars($_POST['texte']); ?></p>

<p>Sur demande <?php echo $_POST['choix']; ?></p>

<p>votre dossier <?php if (move_uploaded_file($_FILES['resume']['tmp_name'],$chemintotal)) ?> </p>
<img src="./<?php echo $chemintotal ?>" alt="">

<p>Format de réponse
    <?php if (isset($_POST['question']))
          {
            echo 'HTML';
          }
          else {
            echo 'TXT';
          }
          ?>
          <p>



<p>Si un element ne convient pas, <a href="formulaire.php">cliquez ici</a> pour revenir au formulaire.</p>

  </body>
</html>

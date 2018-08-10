<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
  </head>

  <?php
    //=====Création du header de l'e-mail
    $header = "From: \"WeaponsB\"<weaponsb@mail.fr>".$passage_ligne;
    $header .= "Reply-to: \"WeaponsB\" <weaponsb@mail.fr>".$passage_ligne;
    $header .= "MIME-Version: 1.0".$passage_ligne;
    $header .= "X-Priority: 3".$passage_ligne;
    $header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    //==========
  ?>

  <?php
      function uploadImage($value='') {
        if (isset($_FILES['button-file']['name'])) {
          global $uploadfile;
          //le dossier vers où uploader
          $uploaddir = 'uploads/';
          //la destination complete
          $uploadfile = $uploaddir . basename($_FILES['button-file']['name']);
          //le movement du fichier
          //move_uploaded_file($Nomdufichier à uploader, $destination)
          envoiMail($uploadfile);
          if (move_uploaded_file($_FILES['button-file']['tmp_name'], $uploadfile)) {
            // return "<img src='$uploadfile' style='max-width:300px' alt=''>";
            return "Fichier uploadé avec succès.";
          } else {
            return "Aucun fichier à uploader.\n";
          }
          var_dump($_FILES);
        }
      }
   ?>

   <?php
      if(isset($_GET["page"])){
        switch($_GET["page"]){
          case "home":
            //echo "je suis sur la home";
            require "home.php";
            break;
          case "contact":
            //echo "je suis sur la page contact et je suis content";
            require "contact.php";
          break;
          default:
            require "404.php";
            //echo "ERROR 404";
          break;
        }
      }
    ?>

    <form enctype="multipart/form-data" action="cible.php" method="post">

    <body class="columns">
        <section class="column contentContainer is-9">
          <h2>Contact</h2>
          <div class="field">
          <label class="label">Titre</label>
            <div class="control">
              <label class="radio">
              <input type="radio" name="case"/>
                Mme
              </label>
              <label class="radio">
                <input type="radio" name="case">
                Melle
              </label>
              <label class="radio">
                <input type="radio" name="case">
                Mr
              </label>
            </div>
          </div>
          <div class="field">

          <div class="field">
            <label class="label">Nom</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" name="nom" placeholder="Xavier"/>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>

          </div>
        </div>

          <div class="field">
            <label class="label">Prénom</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" name="prenom" placeholder="Charles">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">E-mail</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="email" name="e-mail" placeholder="charlesdickmans@gmail.com">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
          </div>
          </div>

          <div class="field">
            <label class="label">Objet</label>
            <div class="control">
              <div class="select">
                <select name="choix">
                  <option value="d'informations">Demande d'informations</option>
                  <option value="d'inscription">Inscription</option>
                  <option value="autre">Autre</option>
                </select>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Votre message</label>
            <div class="control">
              <textarea class="textarea" type="text" name="texte" placeholder="Lorem ipsum"></textarea>
            </div>
          </div>

          <div class="file">
            <label class="label">Documents</label>
            <label class="file-label">
              <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
              <input class="file-input" type="file" name="resume">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choisir un fichier…
                </span>
              </span>
            </label>
          </div>

          <div class="field">
            <label class="label">Format de réponse</label>
            <div class="control">
              <label class="radio">
                <input type="radio" name="question" value="oui" id="oui" checked="checked" /> <label for="oui">HTML</label>
              <label class="radio">
                <input type="radio" name="question" value="non" id="non" /> <label for="non">TXT</label>
            </div>
          </div>

          <div>
            <form action="cible.php" method="post">

              <p>
                <input type="submit" value="Contact" />
              </p>
          </div>
        </section>

      </form>

  </body>
</html>

<?php
  //echo "<pre>".print_r($_SERVER, true)."</pre>";

if(isset($_GET["page"])){
  echo $_GET["page"];
} else {
  echo "ya rien";
}
  $URI = $_SERVER['REQUEST_URI'];
  $san = filter_var($URI, FILTER_SANITIZE_URL);
  $parse = parse_url($san);
  $filename = $parse['path'] . '.php';
  if(file_exists($filename)) {
    require $filename;
  }
  else {
    require '404.php';
  }
  var_dump($parse);

 ?>


 <?php
  $donnée = $_POST['test'];
  $san_donnée = filter_var($donnée, FILTER_SANITIZE_EMAIL);
  $val_donnée = filter_var($san_donnée, FILTER_VALIDATE_EMAIL);
  if ($val_donnée != false) {
    echo $val_donnée;
  }
  else {
    echo 'adresse email non valide';
  }
 ?>

<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    require('head.php');
    ?>
    <title>Contact</title>
</head>
<body>
<div class="columns header-mobile has-background-warning">
    <?php
        require('forms/header-mobile.php');
    ?>
</div>
<div class="columns">
    <section class="column is-3 hero is-medium is-warning is-bold index">
        <?php
            require('menu.php');
        ?>
    </section>
    <section class="column is-3 hero is-medium is-warning is-bold index-mobile">
        <?php
            require('menu.php');
        ?>
    </section>
    <section class="column contentContainer is-9">
        <h2>Contact</h2>
        <form action="form.php" method="post" enctype="multipart/form-data"> 
        <!-- Titre: type radio -->
            <div class="field first">
                <label class="label">Titre</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" id="madame" name="titre">
                        Mme
                    </label>
                    <label class="radio">
                        <input type="radio" id="mademoiselle" name="titre">
                        Melle
                    </label>
                    <label class="radio">
                        <input type="radio" id="monsieur" name="titre">
                        Mr
                    </label>
                </div>
            </div>
            <!-- Nom: type text -->
            <div class="field">
                <label class="label">Nom</label>
                <div class="control">
                    <input class="input nom" type="text" placeholder="Dickmans" name="nom" required  pattern="[A-Za-z]{1-10}">
                </div>
            </div>
            <!-- Prénom: type text -->
            <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                    <input class="input prenom" type="text" placeholder="Charles" name="prenom" required pattern="[A-Za-z]{1-10}">
                </div>
            </div>
            <!-- Email: type text -->
            <div class="field">
                <label class="label">E-mail</label>
                <div class="control">
                    <input class="input email" type="text" placeholder="charlesdickmans@gmail.com" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
            </div>    
            <!-- Objet: type select -->
            <div class="field">
                <label class="label">Objet</label>
                <div class="control">
                    <div class="select">
                        <select name="objet">
                            <option name="objet" value="J'ai besoin d'une information">J'ai besoin d'une information</option>
                            <option name="objet" value="J'ai besoin d'aide">J'ai besoin d'aide</option>
                            <option name="objet" value="J'aimerais proposer de l'aide">J'aimerais proposer de l'aide</option>
                            <option name="objet" value="Autre">Autre</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Message: type text -->
            <div class="field">
                <label class="label">Votre message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Lorem ipsum" name="message" required></textarea>
                </div>
            </div>
            <!-- File: type file -->
            <div class="file">
                <label class="label">Documents</label>
                <label class="file-label">
                <input class="file-input" type="file" name="userfile" onchange="setfilename(this.value);">
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                        Choisir un fichier…
                    </span>
                </span>
                <input id="uploadFile" name="uploadFileOne" type="text" disabled="disabled" placeholder="" class="name-info-form file-witdth" />
                <script>
                    function setfilename(val)
                    {
                        var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
                        document.getElementById("uploadFile").value = fileName;
                    }    
                </script>
                </label>
            </div>
            <!-- Réponse format: type radio -->
            <div class="field">
                <label class="label">Format de réponse</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" id="html" name="format" value="html">
                        HTML
                    </label>
                    <label class="radio">
                        <input type="radio" id="txt" name="format" value="txt">
                        TXT
                    </label>
                </div>
            </div>
            <!-- Conditions: type checkbox -->
            <div class="field">
            <div class="label"></div>
                <div class="control">
                    <label class="checkbox">
                    <input type="checkbox" name="terms" class="terms" required>
                    J'ai lu et j'accepte les <a href="../forms/cgu.php">conditions générales</a> d'utilisation du site.
                    </label>
                </div>
            </div>
            <!-- Submit / Cancel -->
            <div class="field">
                <div class="label"></div>
                <div class="control">
                    <button class="button is-warning" id="submit" name="submit" type="submit">Contact</button>
                    <button class="button" id="cancel" name="cancel" onclick="goBack()">Annuler</button>
                </div>
            </div>
            <div class="field">
                <div class="label"></div>
                <div class="control success">
                <?php
                    if(isset($_SESSION['success']))
                    {
                        echo $_SESSION['success'];
                    }
                 ?>
                </div>
            </div>
        </form>
    </section>
</div>
<script>
function goBack() {
    location.href = 'index.php';
}
</script>
<!-- <script>
    var inp = $('.nom');
    inp.blur(function () {
        inp.removeClass('is-danger').filter(function(){
        return !$.trim(this.value);
        }).addClass('is-danger');
    });

    var text = $('.textarea');
    text.blur(function () {
        text.removeClass('is-danger').filter(function(){
        return !$.trim(this.value);
        }).addClass('is-danger');
    });
</script> -->
</body>
</html>

<?php
session_destroy();
?>
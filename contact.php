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
        <form action="forms/form.php" method="post"> 
            <div class="field first">
                <label class="label">Titre</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="madame">
                        Mme
                    </label>
                    <label class="radio">
                        <input type="radio" name="mademoiselle">
                        Melle
                    </label>
                    <label class="radio">
                        <input type="radio" name="monsieur">
                        Mr
                    </label>
                </div>
            </div>
            <div class="field">
                <label class="label">Nom</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Dickmans" name = "nom">
                </div>
            </div>
            <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Charles" name = "prenom">
                </div>
            </div>
            <div class="field">
                <label class="label">E-mail</label>
                <div class="control">
                    <input class="input" type="text" placeholder="charlesdickmans@gmail.com" name = "email">
                </div>
            </div>    
            <div class="field">
                <label class="label">Objet</label>
                <div class="control">
                    <div class="select">
                        <select>
                            <option>Selectionner</option>
                            <option name = "option1">J'ai besoin d'aide</option>
                            <option name = "option2">J'aimerais proposer de l'aide</option>
                            <option name = "option3">Autre</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label">Votre message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Lorem ipsum" name = "message"></textarea>
                </div>
            </div>
            <div class="file">
                <label class="label">Documents</label>
                <label class="file-label">
                <input class="file-input" type="file" name="filse">
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
                        <input type="radio" name="html">
                        HTML
                    </label>
                    <label class="radio">
                        <input type="radio" name="txt">
                        TXT
                    </label>
                </div>
            </div>
            <div class="field">
            <div class="label"></div>
                <div class="control">
                    <label class="checkbox">
                    <input type="checkbox" name="check">
                    J'ai lu et j'accepte les <a href="#">conditions générales</a> d'utilisation du site.
                    </label>
                </div>
            </div>
            <div class="field">
                <div class="label"></div>
                <div class="control">
                    <button class="button is-warning" name="submit">Contact</button>
                    <button class="button" name="annuler">Annuler</button>
                </div>
            </div>
        </form>
    </section>
</div>
</body>
</html>
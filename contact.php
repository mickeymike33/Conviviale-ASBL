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
        <div class="field first">
            <label class="label">Titre</label>
            <div class="control">
                <label class="radio">
                    <input type="radio" name="question">
                    Mme
                </label>
                <label class="radio">
                    <input type="radio" name="question">
                    Melle
                </label>
                <label class="radio">
                    <input type="radio" name="question">
                    Mr
                </label>
            </div>
        </div>
        <div class="field">
            <label class="label">Nom</label>
            <div class="control">
                <input class="input" type="text" placeholder="Dickmans">
            </div>
        </div>
        <div class="field">
            <label class="label">Prénom</label>
            <div class="control">
                <input class="input" type="text" placeholder="Charles">
            </div>
        </div>
        <div class="field">
            <label class="label">E-mail</label>
            <div class="control">
                <input class="input" type="text" placeholder="Dickmans">
            </div>
        </div>    
        <div class="field">
            <label class="label">Objet</label>
            <div class="control">
                <div class="select">
                    <select>
                        <option>Selectionner</option>
                        <option>With options</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Votre message</label>
            <div class="control">
                <textarea class="textarea" placeholder="Lorem ipsum"></textarea>
            </div>
        </div>
        <div class="file">
            <label class="label">Documents</label>
            <label class="file-label">
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
                    <input type="radio" name="question">
                    HTML
                </label>
                <label class="radio">
                    <input type="radio" name="question">
                    TXT
                </label>
            </div>
        </div>
        <div class="field">
            <div class="label"></div>
            <div class="control">
                <button class="button is-warning">Contact</button>
                <button class="button">Annuler</button>
            </div>
        </div>
    </section>
</div>
</body>
</html>
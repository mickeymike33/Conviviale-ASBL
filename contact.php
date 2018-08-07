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
                    <input class="input" type="text" placeholder="Dickmans" name="nom" id="nom">
                </div>
            </div>
            <!-- Prénom: type text -->
            <div class="field">
                <label class="label">Prénom</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Charles" name="prenom" id="prenom">
                </div>
            </div>
            <!-- Email: type text -->
            <div class="field">
                <label class="label">E-mail</label>
                <div class="control">
                    <input class="input" type="text" placeholder="charlesdickmans@gmail.com" name="email" id="email">
                </div>
            </div>    
            <!-- Objet: type select -->
            <div class="field">
                <label class="label">Objet</label>
                <div class="control">
                    <div class="select">
                        <select>
                            <option>Selectionner</option>
                            <option name="objet" id="besoin">J'ai besoin d'aide</option>
                            <option name="objet" id="proposer">J'aimerais proposer de l'aide</option>
                            <option name="objet" id="autre">Autre</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Message: type text -->
            <div class="field">
                <label class="label">Votre message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Lorem ipsum" name="message" id="message"></textarea>
                </div>
            </div>
            <!-- File: type file -->
            <div class="file">
                <label class="label">Documents</label>
                <label class="file-label">
                <input class="file-input" type="file" name="file" id="file">
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
            <!-- Réponse format: type radio -->
            <div class="field">
                <label class="label">Format de réponse</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" id="html" name="format">
                        HTML
                    </label>
                    <label class="radio">
                        <input type="radio" id="txt" name="format">
                        TXT
                    </label>
                </div>
            </div>
            <!-- Conditions: type checkbox -->
            <div class="field">
            <div class="label"></div>
                <div class="control">
                    <label class="checkbox">
                    <input type="checkbox" name="terms" id="terms">
                    J'ai lu et j'accepte les <a href="../forms/cgu.php">conditions générales</a> d'utilisation du site.
                    </label>
                </div>
            </div>
            <!-- Submit / Cancel -->
            <div class="field">
                <div class="label"></div>
                <div class="control">
                    <button class="button is-warning" id="submit" name="submit">Contact</button>
                    <button class="button" id="cancel" name="cancel">Annuler</button>
                </div>
            </div>
        </form>
    </section>
</div>
</body>
</html>
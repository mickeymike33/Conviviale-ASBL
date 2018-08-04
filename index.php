<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    require('head.php');
    ?>
    <title>Accueil Convivial</title>
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
        <h2>Accueil</h2>
        <div class="accueilSlogan first">
            <p>Demandeurs d'asile ou réfugiés ?</p>
            <p>Asylum seekers or refugees?</p>
            <p>طالبي اللجوء أو اللاجئين؟</p>
            <p>Просители убежища или беженцы?</p> 
            <p>Asielzoekers of vluchtelingen?</p>
        </div>
        <div class="accueilSlogan-mobile first">
            <p>Mouvement d'insertion des réfugiés</p>
        </div>    
        <div class="containerVideo">    
            <iframe src="https://www.youtube.com/embed/QsgdzYnGTEI" frameborder="0" class="video" allowfullscreen></iframe>
        </div>  
        <div class="button is-warning is-medium"><a href="contact.php">Poser une question</a></div>
    </section>
    </div>
    <div class="columns footer-mobile">
    <p>
        Rue du Charroi 33-35, 1190 Bruxelles
        <br>
        info@convivial.be / 02 503 43 46
    </p>
    </div>
</body>
</html>
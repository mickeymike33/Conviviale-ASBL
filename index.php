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
    <section class="column is-3 is-medium is-warning is-bold index">
        <?php
            require('menu.php');
        ?>
    </section>
    <section class="column is-3 is-medium is-warning is-bold index-mobile">
        <?php
            require('menu.php');
        ?>
    </section>
    <section class="column contentContainer is-9 indexContent">
        
    <!-- <h2>Accueil</h2> -->
    <div class="accueilSlogan-mobile first">
            <p>Mouvement d'insertion des réfugiés</p>
    </div>   
    <div class="containerVideo">    
        <iframe src="https://www.youtube.com/embed/QsgdzYnGTEI?rel=0&amp;showinfo=0&amp;start=20" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="video" title="Présentation Convivial"></iframe>
    </div> 
    <!-- <video controls autoplay preload muted loop>
            <source src="assets/img/convivial.mp4" type="video/mp4">
    </video> -->
        <div class="accueilSlogan first">
            <p>Convivial accompagne les réfugiés depuis leur installation autonome dans un logement jusqu’aux premiers pas vers la réalisation d’un projet d’insertion sociale et professionnelle.</p>
            <!-- <p>En parallèle, Convivial organise des dispositifs de sensibilisation du grand public et de mise en relation entre citoyens résidents en Belgique et réfugiés.</p> -->
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
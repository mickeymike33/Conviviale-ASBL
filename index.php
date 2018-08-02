<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    require('head.php');
    ?>
    <title>Accueil Convivial</title>
</head>
<body class="columns">
    <section class="column is-3 hero is-medium is-warning is-bold index">
        <?php
            require('menu.php');
        ?>
    </section>
    <section class="column contentContainer is-9">
        <h2>Accueil</h2> 
        <div class="accueilSlogan">
            <p>Demandeurs d'asile ou réfugiés ?</p>
            <p>Asylum seekers or refugees?</p>
            <p>طالبي اللجوء أو اللاجئين؟</p>
            <p>Просители убежища или беженцы?</p> 
            <p>Asielzoekers of vluchtelingen?</p>
        </div>     
        <div class="containerVideo">    
            <iframe src="https://www.youtube.com/embed/QsgdzYnGTEI" frameborder="0" class="video" allowfullscreen></iframe>
        </div>  
        <div class="button is-warning is-medium">Poser une question</div>
    </section>
</body>
</html>
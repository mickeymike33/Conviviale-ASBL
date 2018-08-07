<?php 
$date=date("d/m/Y");
$enfant= $_POST["enfant"];
$enfantErr="";
$instit=$_POST["instit"];
$institErr="";
$excuse="";
$choix=$_POST["choix"];
//This function prevents cross-scripting
function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $enfant=testInput($enfant);
    $instit=testInput($instit);
    $choix=testInput($choix);
// Check empty fields
if (empty($_POST["enfant"])){
    $enfantErr="Champ obligatoire, patate!";
}
if (empty($_POST["instit"])){
    $institErr="Champ obligatoire, patate!";
}
//Check characters (à adapter pour le français!)
if (!preg_match("/^[a-zA-Z ]*$/",$enfant)) {
    $enfantErr = "C'est pas un vrai nom ça, petit canaillou!";
  }
if (!preg_match("/^[a-zA-Z ]*$/",$instit)) {
    $institErr = "C'est pas un vrai nom ça, petit canaillou!";
}
// Choix de l'excuse
if ($choix=="chat"){
    $excuse='<p> Notre chat est mort hier soir dans une bagarre avec le chat de notre voisin français à propos du foot.
                Vous comprendrez que les funérailles de notre ancien compagnon ainsi que l\'expédition punitive chez le voisin ne permettent pas à '.$enfant.' de se présenter à l\'école.</p>';
}
elseif($choix=="maladie"){
    $excuse='<p> En effet, '.$enfant.' est malade et s\'est chié dessus toute la nuit. Je vous l\'amènerais bien mais connaissant votre caractère de merde, vous me le renverriez à la maison</p>
            <p> Autant faire gagner du temps à tout le monde.</p>';
}
elseif($choix=="piscine"){
    $excuse='<p> En effet, '.$enfant.' a piscine. Comme de toutes façons il n\'apprend rien en classe, autant que '.$enfant.' fasse quelque chose de son temps.</p>';
}
elseif($choix=="alf"){
    $excuse='<p>En effet, un OVNI s\'est écrasé sur notre garage et l\'extraterrestre qui en est sorti n\arrête pas d\'essayer de bouffer notre chat.
    Heureusement, '.$enfant.' s\'entend à merveille avec ce visiteur venu d\'ailleurs. </p>';
}
else{
    $excuse='<script> alert("Choisis une excuse dans la liste!");</script>';
};
$intro= '<p> Madame '.$instit.',</p>';
$corps= '<p> Mon fils '.$enfant.' ne pourra se présenter à l\'école ce '.$date.'. </p>';
$salutations='<p> Veuillez agréer, Madame '.$instit.', l\'expression de mes salutations distinguées,</p>';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L'excuse du jour</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="enfant">Nom de l'enfant</label><input type="text" name="enfant" id="enfant" value="<?php echo $enfant; ?>"><span><?php echo $enfantErr ?></span>
    <label for="instit">Nom de la madame</label><input type="text" name="instit" id="instit"value="<?php echo $instit;?>"><span><?php echo $institErr?></span><br>
    <input type="radio" id="maladie" name="choix" <?php if (isset($choix) && $choix=="maladie") echo "checked"; ?>value="maladie">Maladie</input>
    <input type="radio" id="chat" name="choix" <?php if (isset($choix) && $choix=="chat") echo "checked"; ?> value="chat">Mon chat est mort</input>
    <input type="radio" id="piscine" name="choix" <?php if (isset($choix) && $choix=="piscine") echo "checked"; ?> value="piscine">Je peux pas j'ai piscine!</input>
    <input type="radio" id="alf" name="choix" <?php if (isset($choix) && $choix=="alf") echo "checked"; ?> value="alf">Un OVNI s'est écrasé sur mon garage</input><br>
    <input type="submit">Choisir votre excuse</input>       
</form>
    <section>
        <?php echo $intro?>
        <?php echo $corps?>
        <?php echo $excuse?>
        <?php echo $salutations?>
    </section>
</body>
</html>
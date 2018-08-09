<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$titre= $_POST["titre"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$objet=$_POST["objet"];
$message=$_POST["message"];
$format=$_POST["format"];
$terms=$_POST["terms"];
if($titre !=''&& $nom !=''&& $prenom !=''&& $email !='' && $objet !='' && $message !='' && $format !='' && $terms !='')
{
//  To redirect form on a particular page
header("Location:https://www.google.be/search?ei=9OtrW8imFIvXjwSC0aDIAw&q=heure+php+france&oq=heure+php+frab&gs_l=psy-ab.3.0.0i22i30k1l3.42364.42792.0.44539.4.4.0.0.0.0.176.343.0j2.2.0....0...1c.1.64.psy-ab..2.2.342....0.TAF85VAtxqk");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>
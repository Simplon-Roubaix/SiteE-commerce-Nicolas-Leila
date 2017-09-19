<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}



function recup_img($bdd) {
$img_nom = $_FILES['img_upload']['name'];
$img_taille  = $_FILES['img_upload']['size'];
$img_type = $_FILES['img_upload']['type'];

$req = $bdd->prepare('INSERT INTO image(nom, taille, type)
VALUES(:nom, :taille, :type)');
$req->execute(array(
    'nom' => $img_nom,
    'taille' => $img_taille,
    'type' => $img_type
  ));

}
recup_img($bdd);

?>

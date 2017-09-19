<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

include('ajoutImg.php');

$reponse = $bdd->query('SELECT MAX(id) FROM image');
$description= $reponse->fetch();


$req = $bdd->prepare('INSERT INTO cartes(titre, description, prix, infosCompletes)
VALUES(:titre, :description, :prix, :infosCompletes)');
$req->execute(array(
    'titre' => $_POST['title'],
    'description' => $_POST['desc'],
    'prix' => $_POST['price'],
    'infosCompletes' => $_POST['infos']
  ));

  ?>

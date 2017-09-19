<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


// $reponse = $bdd->query('SELECT * FROM cartes, image WHERE image.id_cartes = cartes.id');
// $description= $reponse->fetch();


$req = $bdd->prepare('INSERT INTO cartes(titre, description, prix, infosCompletes)
VALUES(:titre, :description, :prix, :infosCompletes)');
$req->execute(array(
    'titre' => $_POST['title'],
    'description' => $_POST['desc'],
    'prix' => $_POST['price'],
    'infosCompletes' => $_POST['infos']
  ));

  ?>

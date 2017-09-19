<?php
include('header.php');
?>

<?php
 try {
   $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 } catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
 }

 $reponse = $bdd->query('SELECT * FROM infoGenerales');
 $info= $reponse->fetch();
  ?>

 <?php
 include('phpPages/footer.php');
  ?>
  <div class="container">
  <div class="row">
    <h4 class="header titre"><?php echo $info['titreCorps']?></h4>

    <?php
    $reponse = $bdd->query('SELECT * FROM cartes, image WHERE image.id_cartes = cartes.id');
      while ($donnees = $reponse->fetch()) {
        ?>

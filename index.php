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
        <div id="carte" class="col s12 m6 l6 xl6">
      <div class="card horizontal card small">
        <div class="card-image">
          <img src="<?php echo $donnees['chemin']; ?>" alt="meuble">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p><?php echo $donnees['description']; ?><br>
             <?php echo $donnees['prix']; ?> €</p>
          </div>
          <div class="card-action">
            <a href="pageProduit.php?join=<?php echo $donnees['id']; ?>">Voir le produit</a>
          </form>
          </div>
        </div>
      </div>
    </div>

  <?php
  }
  $reponse->closeCursor();
  ?>

  </div>
  </div>

 <?php
 include('phpPages/footer.php');
  ?>

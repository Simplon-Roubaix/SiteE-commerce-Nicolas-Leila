<?php
require('informationsProduit.php');
require ('infosGenerales.php');
include('header.php');
?>

<div class="container">
<div class="row">
  <h4 class="header titre">NOUVEAUX PRODUITS</h4>

<?php
foreach ($produits as $key => $value) {
  # code...
?>

  <div class="col s12 m6 l6 xl6">
    <div class="card horizontal card small">
      <div class="card-image">
        <img src="<?php echo $value['image']; ?>" alt="meuble">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p> <?php echo $value['description']; ?><br>
           <?php echo 'prix '.$value['prix']; ?></p>
        </div>
        <div class="card-action">
          <form class="" action="descriptionProduit.php" method="post">
          <input type="hidden" name="clé" value="<?php echo $key?>">
        <a href="pageProduit.php" id="linkProduct">Voir le produit<input type="submit" value="" class="btn-flat"/></a>
        </form>
        </div>
      </div>
    </div>
  </div>

<?php
}
?>

</div>
</div>
 <?php
 include('footer.php');
  ?>

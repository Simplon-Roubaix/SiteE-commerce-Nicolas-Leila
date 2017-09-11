<?php
require('phpPages/informationsProduit.php');
require ('phpPages/infosGenerales.php');
include('phpPages/header.php');
?>

<div class="container">
<div class="row">
  <h4 class="header titre"><?php echo $infos['corps']['titre']?></h4>

<?php
foreach ($produits as $key => $value) {

?>

  <div id="carte" class="col s12 m6 l6 xl6">
    <div class="card horizontal card small">
      <div class="card-image">
        <img src="<?php echo $value['image']; ?>" alt="meuble">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p> <?php echo $value['description']; ?><br>
           <?php echo $value['prix']; ?></p>
        </div>
        <div class="card-action">
          <form class="" action="pageProduit.php" method="post">
          <input type="hidden" name="clé" value="<?php echo $key?>">
          <input id="linkProduct" type="submit" value="Voir le produit" class="btn-flat"/>
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
 include('phpPages/footer.php');
  ?>

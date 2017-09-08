<?php
require('cartes.php');
require ('info.php');
include('header.php');
?>

<div class="container">
<div class="row">

<?php
foreach ($produits as $key => $value) {
  # code...
?>

    <div class="col s12 m6 l6 xl6">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo $value['image']; ?>">
          <span class="card-title"></span>
          <form class="x" action="produit2.php" method="post">

              <input type="hidden" name="clé" value="<?php echo $key?>">
              <input type="submit" value="+" class="btn-floating halfway-fab waves-effect waves-light red"/>

          </form>

        </div>
        <div class="card-content">
          <p> <?php echo $value['description']; ?></p>
          <p> <?php echo 'prix '.$value['prix']; ?></p>
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

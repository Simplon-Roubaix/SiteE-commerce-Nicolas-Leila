<?php $_POST['clé']; ?>
<?php
require('phpPages/informationsProduit.php');
require ('phpPages/infosGenerales.php');
include('phpPages/header.php');
?>

<div class="container">
  <div class="row">
 <div class="card large col s12 m11 l11 xl11">
     <h4 class="header center-align titre"><?php echo $produits [$_POST['clé']]['titre']; ?></h4>
     <div class="hoverable card horizontal card medium">
       <div class="card-image">
         <img src="<?php echo $produits [$_POST['clé']]['image']; ?>" alt="meuble">
       </div>
       <div class="card-stacked">
         <div class="card-content">
           <p id="description"><?php echo $produits [$_POST['clé']]['informationsCompletes']; ?></p>
           <div class="card-action">
           <p class="center-align"><strong><?php echo $produits [$_POST['clé']]['prix']; ?></strong><br>
             <br>
<a class="waves-effect btn-large light-blue darken-1">Ajouter au panier</a></p>
</div>
         </div>
       </div>
     </div>
   </div>
</div>
</div>


 <?php
 include('phpPages/footer.php');
  ?>

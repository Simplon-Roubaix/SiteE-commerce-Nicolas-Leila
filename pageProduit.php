<!-- <?php echo $_POST['clé']; ?> -->
<?php
require('informationsProduit.php');
require ('infosGenerales.php');
include('header.php');
?>
 <?php
foreach ($produits as $key => $value) {
 ?>
<div class="container">
  <div class="row">
 <div class="card large col s12 m11 l11 xl11">
     <h4 class="header center-align"><?php echo $value['titre']; ?></h4>
     <div class="hoverable card horizontal card medium">
       <div class="card-image">
         <img src="<?php echo $value['image']; ?>" alt="meuble">
       </div>
       <div class="card-stacked">
         <div class="card-content">
           <p id="description"><?php echo $value['informationsCompletes']; ?></p>
           <div class="card-action">
           <p class="center-align"><strong><?php echo $value['prix']; ?></strong><br>
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
}
?>

 <?php
 include('footer.php');
  ?>

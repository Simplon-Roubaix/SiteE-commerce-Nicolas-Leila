<?php
require('produit.php');
require ('info.php');
include('header.php');
?>
<?php
foreach ($produits as $key => $value) {
  # code...
?>



<div class="row">
     <div class="col s12 m5">
       <div class="card">
         <div class="card-image">
           <img src="<?php echo $value['image']; ?>">
           <span class="card-title v"></span>
         </div>
         <div class="card-content">
           <p> <?php echo $value['description']; ?></p>
           <p> <?php echo 'prix '.$value['prix']; ?></p>
         </div>
         <div class="card-action">
           <a href="#">This is a link</a>
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

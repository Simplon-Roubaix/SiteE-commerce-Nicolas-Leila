<!-- <?php echo $_POST['clé']; ?> -->
<?php
require('cartes.php');
require ('info.php');
include('header.php');
?>
 <?php
// foreach ($produits as $key => $value) {
  # code...
 ?>



<div class="row">
     <div class="col s12 m10">
       <div class="card">
         <div class="card-image">
           <img src="<?php echo $value['image']; ?>">
           <span class="card-title"></span>
           <form class="x" action="index.php" method="post">
             <p>
               <input type="hidden" name="clé" value="<?php echo $key?>">
               <input type="submit" value="+" class="btn-floating halfway-fab waves-effect waves-light red"/><
             </p>
           </form>

         </div>
         <div class="card-content">
           <p> <?php echo $produits['description']; ?></p>
           <p> <?php echo 'prix '.$produits['prix']; ?></p>
         </div>
       </div>
     </div>
   </div>
<?php
// }
?>

 <?php
 include('footer.php');
  ?>

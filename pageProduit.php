<?php
include('header.php');
?>

<?php
 try {
   $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 } catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
 }


 $id_num = $_GET['join'];
 $reponse = $bdd->prepare('SELECT * FROM cartes WHERE id=?');
 $reponse->execute([$id_num]);
 $show_card= $reponse->fetch();

 ?>


<div class="container">
  <div class="row">
 <div class="card large col s12 m11 l11 xl11">
     <h4 class="header center-align titre"><?php echo $show_card['titre'];?></h4>
     <div class="hoverable card horizontal card medium">
       <div class="card-image">

         <?php

$req = $bdd->prepare('SELECT * FROM image WHERE id_cartes=?');
$req->execute([$id_num]);
$show_img = $req->fetch();
{
  ?>

         <img src="<?php echo $show_img['chemin']; ?>" alt="meuble">
         <?php
}
?>
       </div>
       <div class="card-stacked">
         <div class="card-content">
           <p id="description"><?php echo $show_card['infosCompletes']; ?></p>
           <div class="card-action">
           <p class="center-align"><strong><?php echo $show_card['prix']; ?> €</strong><br>
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
 $reponse->closeCursor();
 include('phpPages/footer.php');
  ?>

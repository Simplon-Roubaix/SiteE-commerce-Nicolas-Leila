<?php
include('header.php');

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
?>

<div id="form" class="container">
<div class="row">
  <a href="login.php">Déconnexion</a>
    <form class="col s10" enctype="multipart/form-data" action="ajoutImg.php" method="post">
      <!-- <div class="row"> -->
        <div class="input-field col s6">
          <input id="first_name" name="title" type="text" class="validate">
          <label for="first_name">Titre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="desc" type="text" class="validate">
          <label for="last_name">Phrase de description</label>
        </div>
        <div class="input-field col s6">
          <input id="price" name="price" type="text" class="validate">
          <label for="price">Prix</label>
        </div>
        <div class="input-field col s6">
          <textarea id="textarea1" name="infos" class="materialize-textarea"></textarea>
          <label for="textarea1">Informations Complètes</label>
        </div>
         <p>Image</p>
         <input type="file" name="img_upload" size=50 />
           <input class="waves-effect btn light-blue darken-1" value="Envoyer" type="submit" name="action">
        </form>
  </div>
</div>

<?php
include('phpPages/footer.php');
 ?>

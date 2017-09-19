<?php
 try {
   $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'urbaniak24dec78-', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 } catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
 }

 $pseudo=htmlspecialchars($_POST['pseudo']);
$mdp=sha1($_POST['mdp']);

$req=$bdd->prepare('SELECT * FROM login WHERE pseudo= :pseudo AND mdp= :mdp');
$req->execute(array(
  'pseudo'=>$pseudo,
  'mdp'=>($mdp)
));
$donnees = $req->fetch();

  if($donnees['mdp']==$mdp){
// var_dump($donnees['mdp']);
    header('Location:formulaire.php');
  }
  else{
    // echo "test";
    header('Location:login.php');
  }
?>

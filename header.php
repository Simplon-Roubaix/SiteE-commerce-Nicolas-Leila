<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Furniture</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    </head>

<body>
  <?php
   try {
     $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   } catch (Exception $e) {
     die('Erreur : '.$e->getMessage());
   }

   $reponse = $bdd->query('SELECT * FROM infoGenerales');
   $info= $reponse->fetch();
    ?>

    <header>


<nav id="header" class="nav-extended">
   <div id="logo" class="nav-wrapper">
     <a href="index.php" class="brand-logo center"><img src="<?php echo $info['logo'];?>" alt="logo">
</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
     <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="#">My Favoris</a></li>
       <li><a href="login.php">My Compte</a></li>
       <li><a href="#">My Panier</a></li>
     </ul>
     <ul class="side-nav" id="mobile-demo">
       <li><a href="#">My Favoris</a></li>
       <li><a href="#">My Compte</a></li>
       <li><a href="#">My Panier</a></li>
     </ul>
   </div>
   <div class="nav-content">
     <ul class="tabs tabs-transparent">
       <li class="tab"><a class="active" href="index.php">Accueil</a></li>
       <li class="tab"><a href="#test1">Salon</a></li>
       <li class="tab"><a href="#test2">Chambre à coucher</a></li>
       <li class="tab"><a href="#test3">Luminaires</a></li>
       <li class="tab"><a href="#test4">Promotions</a></li>
     </ul>
   </div>
 </nav>

</header>

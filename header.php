<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <header>
      <p class="light-blue lighten-4"><?php
      require ('info.php');
      echo $infos['header']['titre'] ."<br>";
      echo $infos['header']['product']  . "<br>";
      echo $infos['header']['nom'] ;
       ?></p>
       
      <nav>

    <div class="nav-wrapper light-blue lighten-5">
      <a href="#" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

    </header>

    <body>

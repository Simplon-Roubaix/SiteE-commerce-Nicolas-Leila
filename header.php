<!doctype html>
<html class="no-js" lang="">
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
        <link rel="stylesheet" href="css/style.css">
    </head>

    <header>

      <nav>

        <div class="nav-wrapper light-blue lighten-5">
          <a href="#" class="brand-logo"><?php
          echo $infos['header']['titre'] ."<br>";
          echo $infos['header']['product']  . "<br>";
          echo $infos['header']['nom'] ;?></a>
          <span><?php echo $infos['header']['desc'] ;?></span>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><?php echo $infos['header']['lien1'] ;?></a></li>
        <li><a href="#"><?php echo $infos['header']['lien2'] ;?></a></li>
        <li><a href="#"><?php echo $infos['header']['lien3'] ;?></a></li>
      </ul>
    </div>
  </nav>



    <body>

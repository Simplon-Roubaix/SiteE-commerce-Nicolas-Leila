<?php
 try {
   $bdd = new PDO('mysql:host=localhost;dbname=SiteEcommerce;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 } catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
 }

 $reponse = $bdd->query('SELECT * FROM infoGenerales');
 $info= $reponse->fetch();
  ?>


  <footer id="footer" class="page-footer">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <h5 class="titre white-text"><?php echo $info['titreFooter1']?></h5>
               <ul id="social">
                 <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                 <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                 <li><a href="#" target="_blank"><i class="fa fa-pinterest-p fa-2x"></i></a></li>
                 <li><a href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
               </ul>
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="titre white-text"><?php echo $info['titreFooter2']?></h5>
               <ul>
                 <li><a class="grey-text text-lighten-3" href="#" target = "_blank">Livraisons</a></li>
                 <li><a class="grey-text text-lighten-3" href="#" target = "_blank">Remboursement et Retours</a></li>
                 <li><a class="grey-text text-lighten-3" href="#" target = "_blank">F.A.Q</a></li>
                 <li><a class="grey-text text-lighten-3" href="#" target = "_blank">Termes et Conditions</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div id="secondFooter" class="footer-copyright">
           <div class="container">
           © 2017 Copyright
           <a class="grey-text text-lighten-4 right" href="#!">Contact Us</a>
           </div>
         </div>
       </footer>






       <script src="js/materialize.js"></script>
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>



<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>

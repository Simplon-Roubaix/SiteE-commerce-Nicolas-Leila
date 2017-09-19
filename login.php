<?php
include('header.php');
?>
<div id="form" class="container">
<div class="row">
    <form class="col s10" action="login_post.php" method="post">
        <div class="input-field col s6">
          <input id="first_name" name="pseudo" type="text" class="validate">
          <label for="first_name">Pseudo</label>
        </div>
        <div class="input-field col s6">
          <input id="password" name="mdp" type="password" class="validate">
          <label for="password">Password</label>
        </div>
           <button class="waves-effect btn light-blue darken-1" type="submit" name="action">Valider
            <i class="material-icons right">send</i>
           </button>
        </form>
  </div>
</div>
<?php
include('phpPages/footer.php');
 ?>

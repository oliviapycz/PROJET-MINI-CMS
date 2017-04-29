<?php
session_start();
  if ((isset($_SESSION['username_sign_in']) &&     isset($_SESSION['password_sign_in'])) || (isset($_SESSION['username']) && isset($_SESSION['password']))) { ?>

  <form class="" action="../controller/controller_create_article.php" method="post">

  <input class="col-lg-4 col-xs-6" type="text" name="country" value="" placeholder="pays visité">

  <input class="col-lg-4 col-xs-6" type="text" name="year" value="" placeholder="année de la visite">

  <input class="col-lg-4 col-xs-12" type="text" name="title" value="" placeholder="title">
<br>
  <textarea class=" col-lg-12 col-xs-12 paraph_create" name="first_paraph" rows="8" cols="80" placeholder="first_paraph"></textarea>
<br />
  <textarea class=" col-lg-12 col-xs-12 paraph_create" name="second_paraph" rows="8" cols="80" placeholder="second_paraph"></textarea>
<br>
  <textarea class=" col-lg-12 col-xs-12 paraph_create" name="third_paraph" rows="8" cols="80" placeholder="third_paraph"></textarea>
<br>
  <input type="submit" name="" value="ENVOYER">
</form>
<?php } ?>

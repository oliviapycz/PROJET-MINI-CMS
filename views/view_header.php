<header id="header" class="row justify-content-lg-center">
  <div class="row col-xs-12 col-lg-3 violet">
    <a class="col-xs-3 col-lg-3" href="index.php">
      <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
    </a>
    <h1 class="col-xs-9 col-lg-9">T.W.I.M.H</h1>
  </div>

  <div class="col-xs-12 col-lg-7 visible-lg bleu" >
    <h1>The.World.Is.My.Home</h1>
  </div>

  <div class="col-xs-12 col-lg-2 connexion">
    <?php
    if (isset($_SESSION['username_sign_in']) && isset($_SESSION['password_sign_in'])) { ?>
      <h5>Bienvenue  <a href="member_profile.php"><?php echo $_SESSION['username_sign_in'];?></a></h5>
        <a href="../controller/controller_log_out.php">Se déconnecter</a>
<?php } elseif (isset($_SESSION['username']) && isset($_SESSION['password'])) { ?>
      <h5>Bienvenue <a href="member_profile.php"><?php echo $_SESSION['username']; ?></a></h5>
        <a href="../controller/controller_log_out.php">Se déconnecter</a>
   <?php } else { ?>
    <a href="connexion.php">CONNEXION</a>
  <?php } ?>

  </div>
</header>

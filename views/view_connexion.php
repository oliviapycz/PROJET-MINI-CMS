<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>NOUVEAU</title>
  </head>
  <body class="container-fluid">
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
        <a href="#">CONNEXION</a>
      </div>
    </header>

    <main class="row">
      <section class="sign_in col-lg-5 col-xs-12">
        <?php require "../views/view_form_sign_in.php" ?>
      </section>
      <section class="col-lg-2 col-xs-12">
        <p> OR </p>
      </section>
      <section class="sign_up col-lg-5 col-xs-12">
        <?php require "../views/view_form_sign_up.php" ?>
      </section>
    </main>

    <footer id="footer" class="row">
      <div class="reseau col-lg-6 col-lg-offset-3">
        <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
        <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
        <i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i>
        <i class="fa fa-tumblr-square fa-3x" aria-hidden="true"></i>
      </div>
    </footer>

  </body>
</html>

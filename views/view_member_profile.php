<?php
session_start();
  if ((isset($_SESSION['username_sign_in']) &&     isset($_SESSION['password_sign_in'])) || (isset($_SESSION['username']) && isset($_SESSION['password']))) { ?>

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

    <?php require 'view_header.php' ?>

    <main class="row">

      <nav class="row col-xs-12 col-lg-3 crud_nav">
        <ul>
          <a href=""><li class="crud_article col-lg-12 col-xs-12">Mes Articles</li></a>
          <a href=""><li class="crud_article col-lg-12 col-xs-12">Ajouter un Article</li></a>
          <a href=""><li class="crud_article col-lg-12 col-xs-12">Modifier un Article</li></a>
          <a href=""><li class="crud_article col-lg-12 col-xs-12">Supprimer un Article</li></a>
        </ul>
      </nav>

      <article class="row create_article col-lg-9 col-xs-12 ">
        <?php require 'view_form_create_article.php' ?>
      </article>
    </main>
<?php }
  require 'view_footer.php';
?>
  </body>
</html>

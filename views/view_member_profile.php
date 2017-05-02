<?php
session_start();
  if ((isset($_SESSION['username_sign_in']) &&     isset($_SESSION['password_sign_in'])) || (isset($_SESSION['username']) && isset($_SESSION['password']))) { ?>

<!DOCTYPE html>
<html ng-app="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
  <!-- <script src="../web/js/script.js"></script> -->
    <title>NOUVEAU</title>
  </head>
  <body class="container-fluid">

    <?php require 'view_header.php' ?>

    <main class="row">

      <nav  class="row col-xs-12 col-lg-3 crud_nav">
        <ul>
          <a href=""><li class="crud_article col-lg-12 col-xs-12">Mes Articles</li></a>

          <a ng-click="createArticle=true" href=""><li class="crud_article col-lg-12 col-xs-12">Ajouter un Article</li></a>

          <a href=""><li class="crud_article col-lg-12 col-xs-12">Supprimer un Article</li></a>

          <div ng-mouseover="updateArticle=true" ng-mouseleave="updateArticle=false" class="show_update">
            <a href="#update"><li class="crud_article col-lg-12 col-xs-12">Modifier un Article</li></a>

            <?php foreach ($articles as $article): ?>
              <section class="essai">
                <div ng-show="updateArticle" class="show_update_articles">
                  <li ng-click="updateArticleForm" class="li_update"><?= "<a href='member_profile.php?country=" .strtoupper($article['country']). "' >".strtoupper($article['country']) . "|" . $article['year']."</a>" ?></li>
                  <?php endforeach ?>
                  <!-- <li class="li_index"><a href="#">VOIR PLUS</a></li> -->
                </div>
              </section>

          </div>


        </ul>
      </nav>

      <article class="row create_article col-lg-9 col-xs-12 ">

        <div ng-show ="createArticle" ><?php require 'view_form_create_article.php' ?></div>

        <div ><?php require 'view_form_update_article.php' ?></div>

      </article>
    </main>
<?php }
  require 'view_footer.php';
?>

  </body>
</html>

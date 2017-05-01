<?php
session_start();
?>
<!DOCTYPE html>
<html ng-app="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
    <title>NOUVEAU</title>
  </head>
  <body class="container-fluid">

    <?php require 'view_header.php' ?>

    <main class="row">
      <div>
      <nav class="col-xs-12 col-lg-3">
        <ul>
          <?php foreach ($articles as $article): ?>
          <div class=""><li class="li_index"><?= "<a href='index.php?country=" .strtoupper($article['country']). "' >".strtoupper($article['country']) . "|" . $article['year']."</a>" ?></li>
            <?php endforeach ?>
            <li class="li_index"><a href="#">VOIR PLUS</a></li>
          </div>
        </ul>
      </nav>
        <section>

        </section>
      </div>
      <article class="article col-lg-9 visible-lg">
        <?php foreach ($chosen_articles as $chosen_article): ?>
      <div class="">
        <h3><?php echo $chosen_article['title']; ?></h3>  <br />
        <!-- <h5> by :  echo strtoupper($_SESSION['username_sign_in']); </h5> <p>|</p> </h5> -->
        <em>mis à jour le :</em>
        <?php echo $chosen_article['date_modification']; ?>
         <br /><br>
        <p><?php echo $chosen_article["first_paraph"]; ?></p> <br />
        <p><?php echo $chosen_article["second_paraph"]; ?></p> <br />
        <p><?php echo $chosen_article["third_paraph"]; ?></p> <br />
      </div>

    <?php endforeach ?>
      </article>
    </main>

    <?php require 'view_footer.php' ?>

  </body>
</html>

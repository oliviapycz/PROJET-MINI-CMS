<?php
session_start();
  if ((isset($_SESSION['username_sign_in']) &&     isset($_SESSION['password_sign_in'])) || (isset($_SESSION['username']) && isset($_SESSION['password']))) { ?>
<?php foreach ($chosen_articles as $chosen_article): ?>
  <form ng show="updateArticleForm" class="" action="../controller/controller_update_article.php" method="post">

    <input type="text" name="country" value="<?php echo strtoupper($chosen_article['country']) ?>" placeholder="pays visité">

    <input type="text" name="year" value="<?php echo $chosen_article['year'] ?>" placeholder="année de la visite">

    <input class="input_title_create" type="text" name="title" value="<?php echo $chosen_article['title'] ?>" placeholder="title">
<br>
    <textarea class="paraph_create" name="first_paraph" rows="8" cols="80"><?php echo $chosen_article['first_paraph'] ?></textarea>
<br />
    <textarea class="paraph_create" name="second_paraph" rows="8" cols="80"><?php echo $chosen_article['second_paraph'] ?></textarea>
<br>
    <textarea class="paraph_create" name="third_paraph" rows="8" cols="80"><?php echo $chosen_article['third_paraph'] ?></textarea>
<br>
    <input type="submit" name="" value="MODIFIER">
    </form>
  <?php endforeach ?>
<?php } ?>

<?php
session_start();
  if ((isset($_SESSION['username_sign_in']) &&     isset($_SESSION['password_sign_in'])) || (isset($_SESSION['username']) && isset($_SESSION['password']))) {

  $country = $_GET['country'];
  $newcountry = $_POST['country'];
  $newyear = $_POST['year'];
  $newtitle = $_POST['title'];
  $newfirst_paraph = $_POST['first_paraph'];
  $newsecond_paraph = $_POST['second_paraph'];
  $newthird_paraph = $_POST['third_paraph'];

  require '../model/model.php';

  $updateArticle = updateArticle($newcountry, $newtitle, $newyear, $newfirst_paraph, $newsecond_paraph, $newthird_paraph);
  header('Location:http://localhost/~olivia/CHEFOEUVRE/NOUVEAU/web/member_profile.php');
}

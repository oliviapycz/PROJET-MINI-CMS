<?php
session_start();
  if ((isset($_SESSION['username_sign_in']) &&     isset($_SESSION['password_sign_in'])) || (isset($_SESSION['username']) && isset($_SESSION['password']))) {

  $country = $_POST['country'];
  $year = $_POST['year'];
  $title = $_POST['title'];
  $first_paraph = $_POST['first_paraph'];
  $second_paraph = $_POST['second_paraph'];
  $third_paraph = $_POST['third_paraph'];

  require '../model/model.php';

  $addArticle = addArticle($country, $title, $year, $first_paraph, $second_paraph, $third_paraph);
  header('Location:http://localhost/~olivia/CHEFOEUVRE/NOUVEAU/web/member_profile.php');
}

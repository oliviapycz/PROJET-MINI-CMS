<?php
session_start();

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

  $lastname = htmlspecialchars($_POST['lastname']);
  $firstname = htmlspecialchars($_POST['firstname']);
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $retape_password = htmlspecialchars($_POST['retape_password']);

require '../model/model.php';

$addMember = addMember($lastname, $firstname, $username, $email, $password);

if (isset($_POST['username']) && isset($_POST['password'])) {
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  header('Location:http://localhost/~olivia/CHEFOEUVRE/NOUVEAU/web/member_profile.php');
}
else {
  echo "error error";
}
}

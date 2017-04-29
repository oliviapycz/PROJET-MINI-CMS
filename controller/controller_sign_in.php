<?php
session_start();

if(isset($_POST['username_sign_in']) && isset($_POST['password_sign_in'])){
  $username_sign_in = $_POST['username_sign_in'];
  $password_sign_in = $_POST['password_sign_in'];

require '../model/model.php';
$members = getMembers();

foreach ($members as $member) {
  if ($username_sign_in == $member['username'] && $password_sign_in == $member['password']) {
    $_SESSION['username_sign_in'] = $username_sign_in;
    $_SESSION['password_sign_in'] = $password_sign_in;
    header('Location:http://localhost/~olivia/CHEFOEUVRE/NOUVEAU/web/member_profile.php');
  }
  else {
    echo "something went wrong";
  }
}
}
